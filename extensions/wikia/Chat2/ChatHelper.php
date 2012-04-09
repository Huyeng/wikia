<?php

class ChatHelper {
	private static $serversBasket = "wgChatServersBasket";
	private static $operationMode = "wgChatOperationMode";
	private static $CentralCityId = 177;
	private static $configFile = array();	
	/**
	 * Hooks into GetRailModuleList and adds the chat module to the side-bar when appropriate.
	 */
	static public function onGetRailModuleList(&$modules) {
		global $wgUser;
		wfProfileIn(__METHOD__);

		// Above spotlights, below everything else. BugzId: 4597.
		$modules[1175] = array('ChatRail', 'Placeholder', null);

		wfProfileOut(__METHOD__);
		return true;
	}
	
	/**
	 * $mode - true = operation, false = failover
	 */
	
	static public function changeMode($mode = true){
		if(self::getMode() == false) { //just promote server to operation mode
			self::setMode(true);
			return true;
		} 

		$basket = self::getServerBasket();
		self::setServerBasket(($basket)%2 + 1);
		self::setMode(false);
		return false;
	}
	
	static public function getMode(){
		$mode = WikiFactory::getVarValueByName(self::$operationMode, self::$CentralCityId );
		if(is_null($mode)) {
			return true;
		}
		
		return $mode; 
	}
	
	static public function setMode($mode){
		WikiFactory::setVarByName(self::$operationMode, self::$CentralCityId, $mode);
	}

	static public function getServer($type = 'Main'){
		global $wgCityId;
	
		$server = self::getChatConfig($type.'ChatServers');
		$serversCount = count($server[self::getServerBasket()]);
		
		$out = explode(':', $server[self::getServerBasket()][$wgCityId%$serversCount]);
		return array('host' => $out[0], 'port' => $out[1]); 
	}
	
	static public function getChatCommunicationToken() {
		return self::getChatConfig('ChatCommunicationToken');
	}
	
	static public function getServersList($type = 'Main') {
		$server = self::getChatConfig($type.'ChatServers');
		return $server[self::getServerBasket()]; 
	}

	/**
	 * 
	 * laod Config of chat from json file (we need to use jsone file becasue w)
	 * @param string $name
	 */
	static function getChatConfig($name) {
		global $wgWikiaLocalSettingsPath, $wgDevelEnvironment;
		wfProfileIn(__METHOD__);
		
		if(empty(self::$configFile)) {
			$string = file_get_contents(dirname($wgWikiaLocalSettingsPath) . '/../ChatConfig.json' );
			self::$configFile = json_decode($string, true);
		}
		
		if(isset(self::$configFile[empty($wgDevelEnvironment) ? 'prod':'dev'][$name])) {
			wfProfileOut(__METHOD__);
			return self::$configFile[empty($wgDevelEnvironment) ? 'prod':'dev'][$name];
		}
		
		if(isset(self::$configFile[$name])) {
			wfProfileOut(__METHOD__);
			return self::$configFile[$name];
		}
		
		wfProfileOut(__METHOD__);
		return false;
	}
	
	static public function getServerBasket() {
		$basket	= WikiFactory::getVarValueByName(self::$serversBasket, self::$CentralCityId);
		if(empty($basket)) {
			return 1;
		}
		return $basket;
	}
	
	static private function setServerBasket($basket) {
		WikiFactory::setVarByName(self::$serversBasket, self::$CentralCityId, $basket);
	}
		
	static public function onStaffLogFormatRow($slogType,$result,$time,$linker,&$out) {
		if($slogType == 'chatfo') {
			$out = wfMsgExt('chat-failover-log-entry', array('parseinline'), array($time, $result->slog_user_name, $result->slog_user_namedst, $result->slog_comment));
			return true;
		}
		
		return true; 
	}
	
	/**
	 * Prepare a pre-rendered chat entry point for logged-in users
	 */
	public static function onMakeGlobalVariablesScript(&$vars) {
		global $wgUser;
		wfProfileIn( __METHOD__ );
		
		$vars['wgWikiaChatModuleContent'] = ( $wgUser->isAnon() ) ? '' : F::app()->sendRequest('ChatRailModule', 'Contents' )->toString();
		$vars['wgWikiaChatWindowFeatures'] = ChatRailModule::CHAT_WINDOW_FEATURES;
		wfProfileOut( __METHOD__ );
		return true;
	}
	
	/**
	 * Add WikiaChatLink to all Chat links (we open them in new window in JS)
	 */
	public static function onLinkEnd( $skin, Title $target, array $options, &$text, array &$attribs, &$ret ) {
		if ( ( $target instanceof Title ) && ( $target->getNamespace() == NS_SPECIAL ) && $target->isLocal() && ( $target->getText() == "Chat" ) ) {
			if ( !array_key_exists('class', $attribs) ) $attribs['class'] = 'WikiaChatLink';
			else $attribs['class'] .= ' WikiaChatLink';
		}
		return true;
	}
	
	/**
	 * add resources needed by chat
	 * as chat entry points or links can appear on any page,
	 * we really need them everywhere 
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
		global $wgExtensionsPath, $wgTitle, $wgStylePath;

		wfProfileIn(__METHOD__);

		$sp = array(
			'Contributions',
			'Log',
			'Recentchanges'
		);

		foreach($sp as $value) {
			if($wgTitle->isSpecial($value)) {
				// For Chat2 (doesn't exist in Chat(1))
				$srcs = F::build('AssetsManager',array(),'getInstance')->getGroupCommonURL('chat_ban_js', array());
				
				foreach($srcs as $val) {
					$out->addScript('<script src="' .$val. '"></script>');	
				}
				F::build('JSMessages')->enqueuePackage('ChatBanModal', JSMessages::EXTERNAL); 
				$out->addStyle(AssetsManager::getInstance()->getSassCommonURL('extensions/wikia/Chat2/css/ChatModal.scss'));
				break;
			}		
		}

		// TODO: move these to asset manager when we release chat globally
		$out->addScriptFile($wgExtensionsPath . '/wikia/Chat2/js/ChatEntryPoint.js');
		$out->addScriptFile($wgStylePath . '/common/jquery/jquery-slideshow-0.4.js');
		$out->addStyle(AssetsManager::getInstance()->getSassCommonURL('extensions/wikia/Chat2/css/ChatEntryPoint.scss'));
		
		$out->addStyle(AssetsManager::getInstance()->getSassCommonURL('extensions/wikia/Chat2/css/ChatEntryPoint.scss'));

		
		wfProfileOut(__METHOD__);
		return true;
	}
	
	public static function onContributionsToolLinks(  $id, $nt, &$tools ) {
		global $wgOut, $wgCityId, $wgUser, $wgCityId;
		wfProfileIn(__METHOD__);
		
		$user = User::newFromId($id);
		if(!empty($user)) {
			if(Chat::getBanInformation($wgCityId, $user) !== false ) {
				$dir = "change";
				LogEventsList::showLogExtract(
				$wgOut,
				'chatban',
				$nt->getPrefixedText(),
				'',
				array(
						'lim' => 1,
						'showIfEmpty' => false,
						'msgKey' => array(
							'chat-contributions-ban-notice',
							$nt->getText() # Support GENDER in 'sp-contributions-blocked-notice'
							),
						'offset' => '' # don't use $wgRequest parameter offset
					)
				);
			} else {
				if ( $wgUser->isAllowed( 'chatmoderator' ) && !$user->isAllowed( 'chatmoderator' )  ) {
					$tools[] =  "<a class='chat-change-ban' data-user-id='{$id}' href='#'>" . wfMsg( 'chat-ban-contributions-heading') . "</a>" ;
				}
			}
		}
		wfProfileOut(__METHOD__);
		return true;		
	}
	
	public static function onLogLine($logType, $logaction, $title, $paramArray, &$comment, &$revert, $logTimestamp) {
		global $wgUser, $wgCityId;

		if( strpos($logaction,'chatban') == 0 ) {
			$user = User::newFromId($paramArray[1]);
			if(!empty($user) && Chat::getBanInformation($wgCityId, $user) !== false && $wgUser->isAllowed( 'chatmoderator' ) ) {
				$revert = "(" . "<a class='chat-change-ban' data-user-id='{$paramArray[1]}' href='#'>" . wfMsg( 'chat-ban-log-change-ban-link') . "</a>" . ")";
			}
		}

		return true;
	}
	
	public static function formatLogEntry( $type, $action, $title, $forUI, $params ) {
		global $wgUser, $wgLang;

		if(empty($params[0])){
			return "";
		}
		
		$endon = "";
		if(!empty($params[3])) {
			$endon = $wgLang->timeanddate( wfTimestamp( TS_MW, $params[3] ), true );
		}

		$skin = $wgUser->getSkin();
		$id =  $params[1];
		$revert = "(" . "<a class='chat-change-ban' data-user-id='{$params[1]}' href='#'>" . wfMsg( 'chat-ban-log-change-ban-link') . "</a>" . ")";
		$link = $skin->userLink( $id, $title->getText() )
						.$skin->userToolLinks( $id, $title->getText(), false );
				
		$time = "";
		if(!empty($params[2])) {
			$time = $params[2];
		}				
						
		return wfMsg('chat-'.$action.'-log-entry', $link, $time, $endon );
	}
}
