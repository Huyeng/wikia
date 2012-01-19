<?php
class Wall {
	private $mTitle;
	private $mCityId;
	private $mThreadMapping = null;
	private $mThreadMappingRev = null;
	private $mThreadRCMapping = null;
	private $mThreadsHistory = null;
	private $mMaxPerPage = false;
	private $mSorting = false;

	static public function newFromTitle( Title $title ) {
		$wall = new Wall();
		$wall->mTitle = $title;
		$wall->mCityId = F::app()->wg->CityId;
		return $wall;
	} 
	
	static function getParentTitleFromReplyTitle( $titleText ) {
		$parts = explode('/@', $titleText);
		if(count($parts) < 3) return null;	
		return $parts[0] . '/@' . $parts[1];
	}
	
	public function getUser() {
		return User::newFromName($this->mTitle->getBaseText(), false);
	}
	
	public function getUrl() {
		$title = F::build( 'title', array( $this->getUser()->getName(), NS_USER_WALL ), 'newFromText' );
		return $title->getFullUrl();
	}

	
	public function getThreads($page = 1, $queryLimit = array() ) {
		// make objects out of IDs
		// load missing data in ONE SQL query
		// grouping together all threads without reply data

		if(is_null($this->mThreadMapping)) {
			$this->loadThreadList();
		}
		
		// the order of funcitons differs, because sorting for threads
		// by "newest" / "oldest" does not require all of them
		// so we can slice first, than load them
		// and for other sorting methods we need to fetch them all first
		// than sort
		switch( $this->mSorting ) {
			case 'nt': // newest threads first
			default:
				$this->loadThreads();
				$this->sliceThreads( $page );
				$this->checkWhichThreadsAreCached();
				$this->preloadThreadsGrouped();
				return $this->threads;
			case 'ot': // oldest threads first
				$this->loadThreads();
				$this->threads = array_reverse($this->threads, true);
				$this->sliceThreads( $page );
				$this->checkWhichThreadsAreCached();
				$this->preloadThreadsGrouped();
				return $this->threads;
			case 'nr': // threads with newest reply first
				$this->loadThreads();
				$this->checkWhichThreadsAreCached();
				$this->preloadThreadsGrouped();
				$this->preloadThreadTimestamp();
				uasort($this->threads, array($this, 'sortLastReply'));
				$this->sliceThreads( $page );
				return $this->threads;
			case 'ma': // most active threads first
				$this->loadThreads();
				$this->checkWhichThreadsAreCached();
				$this->preloadThreadsGrouped();
				$this->preloadThreadScore();
				uasort($this->threads, array($this, 'sortMostactive'));
				$this->sliceThreads( $page );
				return $this->threads;
		}
		
	}
	
	public function sortLastReply( $a, $b ) {
		return ($a->getLastReplyTimestamp() < $b->getLastReplyTimestamp() ) ? 1 : -1;
	}
	
	public function sortMostactive( $a, $b ) {
		return ($a->getScore() < $b->getScore() ) ? 1 : -1;
	}
	
	public function getThreadHistoryCount() {
		if(is_null($this->mThreadsHistory)) {
			$this->loadWallThreadsHistory();
		}
		return count($this->mThreadsHistory);
	}
	
	public function getThreadCount() {
		if(is_null($this->mThreadMapping)) {
			$this->loadThreadList();
		}
		return count($this->mThreadMapping);
	}
	
	public function setMaxPerPage( $val ) {
 		$this->mMaxPerPage = $val;
	}

	public function setSorting( $val ) {
 		$this->mSorting = $val;
	}
	
	//deprecated
	public function loadThreadsFromRC($master = true) {
		// get list of threads (article IDs) on Message Wall
		$dbr = wfGetDB( $master ? DB_MASTER : DB_SLAVE );
		
		$table = array( 'recentchanges' );
		$vars = array( 'rc_id', 'rc_log_action', 'rc_title', 'rc_user' );
		$conds = array();
		$conds[] = "rc_title LIKE '" . $dbr->escapeLike( $this->mTitle->getDBkey() ) . '/' . ARTICLECOMMENT_PREFIX . "%'";
		$conds[] = "rc_title NOT LIKE '" . $dbr->escapeLike( $this->mTitle->getDBkey() ) . '/' . ARTICLECOMMENT_PREFIX . "%/" . ARTICLECOMMENT_PREFIX ."%'";
		$conds['rc_namespace'] = NS_USER_WALL_MESSAGE;
		$options = array( 'ORDER BY' => 'rc_id DESC' );
		 
		
		$res = $dbr->select( $table, $vars, $conds, __METHOD__, $options);
		$this->mThreadRCMapping = array();
		while( $row = $dbr->fetchObject($res) ) {
			$this->mThreadRCMapping[] = array(
				'rc_id' => $row->rc_id,
				'rc_log_action' => $row->rc_log_action,
				'rc_title' => $row->rc_title,
				'rc_user' => $row->rc_user,
			);
		}
		
		return $this->mThreadRCMapping;
	}
	//deprecated
	public function loadWallThreadsHistory() {
		$app = F::app();
		
		if( is_null($this->mThreadRCMapping) ) {
			$this->loadThreadsFromRC();
		}
		
		$this->mThreadsHistory = array();
		foreach($this->mThreadRCMapping as $entry) {
			$rcTitleTxt = $entry['rc_title'];
			$rcUserTxt = $entry['rc_user'];
			$rcTitle = F::build('Title', array($rcTitleTxt, NS_USER_WALL_MESSAGE), 'newFromText');
			
			if( !($rcTitle instanceof Title) ) {
			//in theory it shouldn't happen but... just in-case we want to know it happened
				Wikia::log(__METHOD__, false, "WALL_NOTITLE_FROM_RC " . print_r($entry, true));
				continue;
			}
			
			$wm = F::build('WallMessage', array($rcTitle));
			$wm->load();
			
			$articleData = array('text_id' => '');
			$articleId = $wm->getArticleId($articleData);
			
			if( !empty($articleData['text_id']) ) {
			//if article was deleted and never restored
				$helper = F::build('WallHelper', array());
				$author = F::build('User', array($rcUserTxt), 'newFromID');
				$threadMessageTitle = $helper->getTitleTxtFromMetadata($helper->getDeletedArticleTitleTxt($articleData['text_id']));
			} else {
				$author = $wm->getUser();
				$threadMessageTitle = $wm->getMetaTitle();
			}
			$threadMessageUrl = $wm->getMessagePageUrl();
			
			if( !($author instanceof User) ) {
			//in theory it shouldn't happen but... just in-case we want to know it happened
				Wikia::log(__METHOD__, false, "WALL_NO_USER_INSTANCE " . print_r(array(
					'$rcTitleTxt' => $rcTitleTxt,
					'$rcUserTxt' => $rcUserTxt,
				), true));
				
				continue;
			}
			
			$logAction = $entry['rc_log_action'];
			$userLinks = '';
			$messageLink = '';
			
			$username = $author->getName();
			$realname = $author->getRealName();
			$userUrl = $author->getUserPage();
			
			if( empty($realname) ) {
				$userLinks = Xml::element('a', array('href' => $userUrl, 'class' => 'username'), $username);
			} else {
				$userLinks = Xml::element('a', array('href' => $userUrl, 'class' => 'realname'), $realname);
				$userLinks .= ' '.Xml::element('a', array('href' => $userUrl, 'class' => 'username'), $username);
			}
			
			$messageLink = Xml::element('a', array('href' => $threadMessageUrl), $threadMessageTitle);
			
			$wfMsgOpts = array(
				$articleId,
				$userLinks,
				$messageLink,
			);
			
			if( $logAction == '' ) {
			//created thread
				$logAction = 'create';
				$actionText = $app->wf->Msg('wall-history-created-thread', $wfMsgOpts);
				$this->mThreadsHistory[$articleId]['creation'] = array('type' => $logAction, 'text' => $actionText);
			}
			
			if( $logAction == 'delete' || $logAction == 'restore' ) {
				if( !isset($this->mThreadsHistory[$articleId]['more']) ) {
					$this->mThreadsHistory[$articleId]['more'] = array();
				}
				
				if( $logAction == 'delete' ) {
					$actionText = $app->wf->Msg('wall-history-deleted-thread', $wfMsgOpts);
				}
				
				if( $logAction == 'restore' ) {
					$actionText = $app->wf->Msg('wall-history-restored-thread', $wfMsgOpts);
				}
				
				$this->mThreadsHistory[$articleId]['more'][] = array('type' => $logAction, 'text' => $actionText);
				
				if( !isset($this->mThreadsHistory[$articleId]['creation']) ) {
					$this->mThreadsHistory[$articleId]['creation'] = array();
					$logAction = 'create';
					$actionText = $app->wf->Msg('wall-history-created-thread', $wfMsgOpts);
					$this->mThreadsHistory[$articleId]['creation'] = array('type' => $logAction, 'text' => $actionText);
				}
			}
		}
	}
	//deprecated
	public function getWallThreadsHistory($page) {
		if(is_null($this->mThreadsHistory)) {
			$this->loadWallThreadsHistory();
		}
		
		return array_slice($this->mThreadsHistory, $this->mMaxPerPage * ($page - 1), $this->mMaxPerPage, true);
	}
	
	private function preloadThreadTimestamp() {
		// preload timestamps of replies (and cache in thread object)
		// to prevent changing object when sorting
		foreach( $this->threads as $thread ) {
			$thread->getLastReplyTimestamp(); 
		}
	}
	
	private function preloadThreadScore() {
		// preload score of threads (and cache in thread object)
		// to prevent changing object when sorting
		foreach( $this->threads as $thread ) {
			$thread->getScore();
		}
	}
	
	private function sliceThreads( $page ) {
		if(!empty($this->mMaxPerPage)) {
			$this->threads = array_slice($this->threads, $this->mMaxPerPage * ($page - 1), $this->mMaxPerPage, true);
		}
	}
	
	private function checkWhichThreadsAreCached() {
		$this->notCached = array();
		foreach( $this->threads as $tId => $thread ) {
			if( !$thread->loadIfCached() ) {
				$this->notCached[$tId] = $this->mThreadMappingRev[ $tId ];
			}
		}
	}
	
	private function loadThreads() {
		$this->threads = array();
		foreach( $this->mThreadMapping as $tTitle => $tId ) {
			$thread = WallThread::newFromId( $tId );
			$this->threads[$tId] = $thread;
		}
	}

	private function loadThreadList( $forceReload = false ) {
		$cache = $this->getCache();
		$key = $this->getWallThreadListKey();
		
		if( $forceReload === false ) {
			$val = $cache->get( $key );
		}
		
		if( empty($val) ) {
			// if forcing reload use master server
			$this->LoadThreadListFromDB( $forceReload );
			$val = array();
			$val['threadMapping'] = $this->mThreadMapping;
			$val['threadMappingRev'] = $this->mThreadMappingRev;
			
			$cache->set( $key, $val );
		} else {
			$this->mThreadMapping = $val['threadMapping'];
			$this->mThreadMappingRev = $val['threadMappingRev'];
		}
	}
	
	private function loadThreadListFromDB($master = true) {
		// get list of threads (article IDs) on Message Wall
		$dbr = wfGetDB( $master ? DB_MASTER : DB_SLAVE );
		
		$query = "
		select page.page_id, page.page_title from page
		left join page_wikia_props
		on page.page_id = page_wikia_props.page_id
		and (page_wikia_props.propname = ".WPP_WALL_ADMINDELETE."
		     or page_wikia_props.propname = ".WPP_WALL_REMOVE."
		     or page_wikia_props.propname = ".WPP_WALL_ARCHIVE.")
		where page_wikia_props.page_id is null
		and page.page_title LIKE '" . $dbr->escapeLike( $this->mTitle->getDBkey() ) . '/' . ARTICLECOMMENT_PREFIX . "%'
		and page.page_title NOT LIKE '" . $dbr->escapeLike( $this->mTitle->getDBkey() ) . '/' . ARTICLECOMMENT_PREFIX . "%/" . ARTICLECOMMENT_PREFIX ."%'
		and page.page_namespace = ".NS_USER_WALL_MESSAGE."
		order by page.page_id desc";
		
		$res = $dbr->query( $query );
		
		$this->mThreadMapping = array();
		$this->mThreadMappingRev = array();
		while ( $row = $dbr->fetchObject( $res ) ) {
			$this->mThreadMapping[$row->page_title] = $row->page_id;
			$this->mThreadMappingRev[$row->page_id] = $row->page_title;
		}
	}
	
	/*
	private function propsCond($dbr, $type, $title) {
		$flags = array();
		if(empty($this->mFlagedPages)) {
			foreach($this->mFilters as $key => $value) {
				$flags = $flags + array_keys($value);		
			}
			
			$this->mFlagedPages = $this->getInList($dbr, $title, $flags);
		}

		$out = array(
			'in' => array(),
			'out' => array() 
		);
		
		foreach($this->mFilters[$type] as $key => $value ) {
			if(empty( $this->mFlagedPages[$key] )) {
				continue;
			}
			
			if($value) {
				$out['in'] = $out['in'] + $this->mFlagedPages[$key];
			} else {
				$out['out'] = $out['out'] + $this->mFlagedPages[$key];
			}
		}
		
		return $out;
	}
	//TODO: add caching
	private function getInList($dbr, $title, $flags = array()) {
		$conds = array();
		$conds['page_wikia_props.propname'] = $flags;
		$conds[] = "page.page_title LIKE '" . $dbr->escapeLike( $this->mTitle->getDBkey() ) . '/' . ARTICLECOMMENT_PREFIX . "%'";
		$conds[] = "page_wikia_props.page_id = page.page_id";
		
		$res = $dbr->select( array('page', 'page_wikia_props'), 
			array('page.page_title', 'page_wikia_props.page_id', 'props', 'propname'), 
			$conds , 
		__METHOD__);

		$out = array();
		
		while ( $row = $dbr->fetchObject( $res ) ) {
			if(empty($conds[$row->propname])) {
				$conds[$row->propname] = array();
			}
			
			$out[$row->propname][$row->page_id] = $row->page_id; //it make it easy merge
		}
		
		return $out;
	}*/
	
	private function preloadThreadsGrouped( $master = true ) {
		// load data for threads on the notCached list
		// send it to objects on threads list
		if( count($this->notCached) == 0 ) return;
		
		$dbr = wfGetDB( $master ? DB_MASTER : DB_SLAVE );
		
		$table = array( 'page' );
		$vars = array( 'page_id', 'page_title' );
		$conds = array();
		$like = array();
		foreach( $this->notCached as $tId => $tTitle ) {
			$like[]  = "page_title LIKE '" . $dbr->escapeLike( $tTitle ) . '/' . ARTICLECOMMENT_PREFIX ."%'";
		}
		$conds[] = implode(' OR ', $like);
		$conds['page_namespace'] = NS_USER_WALL_MESSAGE;
		$options = array( 'ORDER BY' => 'page_id ASC' );
		$res = $dbr->select( $table, $vars, $conds, __METHOD__, $options);
		
		$replyThreadMapping = array();
		$threadWithNoReplies = array_flip($this->notCached);
		while ( $row = $dbr->fetchObject( $res ) ) {
			$parent = self::getParentTitleFromReplyTitle($row->page_title);
			if(!isset($replyThreadMapping[$parent])) {
				$replyThreadMapping[$parent] = array();
				unset( $threadWithNoReplies[$parent] );
			}
			array_push($replyThreadMapping[$parent], $row->page_id);
		}
		
		foreach($replyThreadMapping as $title=>$ids) {
			if(!isset($this->mThreadMapping[$title])) {
				// replies to thread that doesn't exist
				// ignore
			} else {
				$parentId = $this->mThreadMapping[$title];
				$this->threads[ $parentId ]->setReplies( $ids );
			}
		}
		
		foreach($threadWithNoReplies as $title=>$id) {
			$this->threads[ $id ]->setReplies( array() );
		}		
		//var_dump($threads); die();
	}

	private function getWallThreadListKey() {
		return  __CLASS__ . '-'.$this->mCityId.'-wall-threadlist-key-v01-' . $this->mTitle->getDBkey();
	}
	
	private function getCache() {
		return F::App()->wg->Memc;
	}

	
	public function invalidateCache() {
		// invalidate cache at Wall level (new thread or thread removed)
		$this->loadThreadList( true );
	}
	
}

?>