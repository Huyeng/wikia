<?php

class PartnerVideoHelper {

	protected static $instance;

	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new PartnerVideoHelper();
		}

		return self::$instance;
	}

	public static function downloadScreenplayFeed() {
		global $SCREENPLAY_FTP_HOST, $SCREENPLAY_REMOTE_FILE, $SCREENPLAY_FEED_FILE, $TEMP_DIR;
		global $remoteUser, $remotePassword, $wgHTTPProxy;
		// Screenplay uses a zipped xml file. Retrieve from
		// ftp server, unzip, and open.

		print("Connecting to $SCREENPLAY_FTP_HOST as $remoteUser...\n");

		// must use cURL because of the http proxy
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_PROXY, $wgHTTPProxy);
		curl_setopt($curl, CURLOPT_URL, "ftp://$remoteUser:$remotePassword@$SCREENPLAY_FTP_HOST/$SCREENPLAY_REMOTE_FILE");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_BINARYTRANSFER, true);
		$localFile = $TEMP_DIR . '/screenplay.' . date("Ymd") . '.zip';
		$result = curl_exec($curl);	
		curl_close($curl);
		file_put_contents($localFile, $result);	// wlee: this uses memory less efficiently than
							// CURLOPT_FILE. However, in my testing,
							// CURLOPT_FILE saved incomplete files!
		if (!$result) die("Couldn't connect to $SCREENPLAY_FTP_HOST\n");
		unset($result);

		print("Downloaded $SCREENPLAY_REMOTE_FILE to $localFile...\n");

		// unzip	
		$feedFile = '';	
		$zip = new ZipArchive;
		if ($zip->open($localFile) === true) {
			$zip->extractTo($TEMP_DIR);
			$zip->close();
			$feedFile = file_get_contents($TEMP_DIR.'/'.$SCREENPLAY_FEED_FILE);
		}
		else {
			die(self::zipFileErrMsg($zip)."\n");
		}

		if (!$feedFile) {
			die("could not open or read $SCREENPLAY_FEED_FILE in $localFile\n");
		}

		return $feedFile;	
	}

	public static function zipFileErrMsg($errno) {
		// using constant name as a string to make this function PHP4 compatible
		$zipFileFunctionsErrors = array(
		    'ZIPARCHIVE::ER_MULTIDISK' => 'Multi-disk zip archives not supported.',
		    'ZIPARCHIVE::ER_RENAME' => 'Renaming temporary file failed.',
		    'ZIPARCHIVE::ER_CLOSE' => 'Closing zip archive failed', 
		    'ZIPARCHIVE::ER_SEEK' => 'Seek error',
		    'ZIPARCHIVE::ER_READ' => 'Read error',
		    'ZIPARCHIVE::ER_WRITE' => 'Write error',
		    'ZIPARCHIVE::ER_CRC' => 'CRC error',
		    'ZIPARCHIVE::ER_ZIPCLOSED' => 'Containing zip archive was closed',
		    'ZIPARCHIVE::ER_NOENT' => 'No such file.',
		    'ZIPARCHIVE::ER_EXISTS' => 'File already exists',
		    'ZIPARCHIVE::ER_OPEN' => 'Can\'t open file', 
		    'ZIPARCHIVE::ER_TMPOPEN' => 'Failure to create temporary file.', 
		    'ZIPARCHIVE::ER_ZLIB' => 'Zlib error',
		    'ZIPARCHIVE::ER_MEMORY' => 'Memory allocation failure', 
		    'ZIPARCHIVE::ER_CHANGED' => 'Entry has been changed',
		    'ZIPARCHIVE::ER_COMPNOTSUPP' => 'Compression method not supported.', 
		    'ZIPARCHIVE::ER_EOF' => 'Premature EOF',
		    'ZIPARCHIVE::ER_INVAL' => 'Invalid argument',
		    'ZIPARCHIVE::ER_NOZIP' => 'Not a zip archive',
		    'ZIPARCHIVE::ER_INTERNAL' => 'Internal error',
		    'ZIPARCHIVE::ER_INCONS' => 'Zip archive inconsistent', 
		    'ZIPARCHIVE::ER_REMOVE' => 'Can\'t remove file',
		    'ZIPARCHIVE::ER_DELETED' => 'Entry has been deleted',
		);
		$errmsg = 'unknown';
		foreach ($zipFileFunctionsErrors as $constName => $errorMessage) {
			if (defined($constName) and constant($constName) === $errno) {
				return 'Zip File Function error: '.$errorMessage;
			}
		}
		return 'Zip File Function error: unknown';
	}

	public function importFromPartner($provider, $file) {
		global $parseOnly;
		
		$numCreated = 0;

		switch ($provider) {
			case VideoPage::V_SCREENPLAY:
				$numCreated = $this->importFromScreenplay($file);
				break;
			case VideoPage::V_MOVIECLIPS:
				$ids = self::getMovieClipIdsFromFileContents($file);
				foreach ($ids as $id) {
					$numCreated += $this->importFromMovieClips($id);
				}
				break;
			default:
		}

		!$parseOnly && print "Created $numCreated articles!\n\n";
	}

	public function importFromScreenplay($file) {
		global $parseOnly;
		
		$articlesCreated = 0;

		$doc = new DOMDocument( '1.0', 'UTF-8' );
		@$doc->loadXML( $file );
		$titles = $doc->getElementsByTagName('Title');
		$numTitles = $titles->length;
		!$parseOnly && print("Found $numTitles titles...\n");
		for ($i=0; $i<$numTitles; $i++) {
			$title = $titles->item($i);
			$titleName = html_entity_decode( $title->getElementsByTagName('TitleName')->item(0)->textContent );
			$year = $title->getElementsByTagName('Year')->item(0)->textContent;
			$clips = $title->getElementsByTagName('Clip');
			$numClips = $clips->length;
			for ($j=0; $j<$numClips; $j++) {
				$clipData = array('titleName'=>$titleName, 'year'=>$year);

				$clip = $clips->item($j);
				$clipData['eclipId'] = $clip->getElementsByTagName('EclipId')->item(0)->textContent;
				$clipData['trailerType'] = $clip->getElementsByTagName('TrailerType')->item(0)->textContent;
				if (strtolower($clipData['trailerType']) == 'not set') unset($clipData['trailerType']);
				$clipData['trailerVersion'] = $clip->getElementsByTagName('TrailerVersion')->item(0)->textContent;
				if (strtolower($clipData['trailerVersion']) == 'not set') unset($clipData['trailerVersion']);
				$clipData['description'] = html_entity_decode( $clip->getElementsByTagName('Description')->item(0)->textContent );
				$clipData['duration'] = $clip->getElementsByTagName('RunTime')->item(0)->textContent;
				$clipData['jpegBitrateCode'] = VideoPage::SCREENPLAY_MEDIUM_JPEG_BITRATE_ID;

				$encodes = $clip->getElementsByTagName('Encode');
				$numEncodes = $encodes->length;
				for ($k=0; $k<$numEncodes; $k++) {				
					$encode = $encodes->item($k);
					$url = html_entity_decode( $encode->getElementsByTagName('Url')->item(0)->textContent );					
					$bitrateCode = $encode->getElementsByTagName('EncodeBitRateCode')->item(0)->textContent;
					$formatCode = $encode->getElementsByTagName('EncodeFormatCode')->item(0)->textContent;
					switch ($formatCode) {
						case VideoPage::SCREENPLAY_ENCODEFORMATCODE_JPEG:
							switch ($bitrateCode) {
								case VideoPage::SCREENPLAY_LARGE_JPEG_BITRATE_ID:
									$clipData['jpegBitrateCode'] = VideoPage::SCREENPLAY_LARGE_JPEG_BITRATE_ID;
									break;
								case VideoPage::SCREENPLAY_MEDIUM_JPEG_BITRATE_ID:
								default:
							}
							break;
						case VideoPage::SCREENPLAY_ENCODEFORMATCODE_MP4:
							switch ($bitrateCode) {
								case VideoPage::SCREENPLAY_STANDARD_BITRATE_ID:
								case VideoPage::SCREENPLAY_STANDARD_43_BITRATE_ID:
									$clipData['stdBitrateCode'] = $bitrateCode;
									$clipData['stdMp4Url'] = $url;
									break;
								case VideoPage::SCREENPLAY_HIGHDEF_BITRATE_ID:
									$clipData['hdMp4Url'] = $url;
									break;
								default:
							}
							break;
						default:
					}
				}

				$msg = '';
				$articlesCreated += $this->createVideoPageForPartnerVideo(VideoPage::V_SCREENPLAY, $clipData, $msg);
				if ($msg) {
					print "ERROR: $msg\n";
				}
			}
		}

		return $articlesCreated;
	}

	public function importFromMovieClips($id) {
		global $MOVIECLIPS_VIDEOS_LISTING_FOR_MOVIE_URL, $MOVIECLIPS_XMLNS;
		global $wgHTTPProxy, $parseOnly;

		$articlesCreated = 0;

		$url = str_replace('$1', $id, $MOVIECLIPS_VIDEOS_LISTING_FOR_MOVIE_URL);
		$info = array();
		!$parseOnly && print("Connecting to $url...\n");

		$rssContent = Http::get($url);
		if (!$rssContent) {
			print("ERROR: problem downloading content!\n");
			return 0;
		}

		$feed = new SimplePie();
		$feed->set_raw_data($rssContent);
		$feed->init();
		if ($feed->error()) {
			print("ERROR: {$feed->error()}");
			return $articlesCreated;
		}

		foreach ($feed->get_items() as $key=>$item) {
			// video title
			$clipData['clipTitle'] = html_entity_decode( $item->get_title() );

			// id
			$mcIds = $item->get_item_tags($MOVIECLIPS_XMLNS, 'id');
			$clipData['mcId'] = $mcIds[0]['data'];

			// movie name
			$objectIds = $item->get_item_tags($MOVIECLIPS_XMLNS, 'object_ids');
			$clipData['titleName'] = html_entity_decode( $objectIds[0]['child'][$MOVIECLIPS_XMLNS]['imdb_id'][0]['attribs']['']['name'] );
			$clipData['freebaseMid'] = $objectIds[0]['child'][$MOVIECLIPS_XMLNS]['freebase_mid'][0]['data'];

			// description, thumbnails, movie year, duration
			if ($enclosure = $item->get_enclosure()) {
				$thumbnails = (array) $enclosure->get_thumbnails();
				$numThumbnails = sizeof($thumbnails);
				if ($numThumbnails) {
					if ($numThumbnails > 1) {
						$clipData['thumbnail'] = $thumbnails[1];
					}
					else {
						$clipData['thumbnail'] = $thumbnails[0];
					}

					$thumbnailParts = explode('/', $clipData['thumbnail']);
					array_pop($thumbnailParts);	// filename. throw away
					$movieAndYear = array_pop($thumbnailParts);
					$year = substr($movieAndYear, -4);
					if (is_numeric($year)) {
						$clipData['year'] = $year;
					}
				}
				
				// remove the title from the description
				$description = strip_tags( html_entity_decode( $item->get_description() ) );
				$description = str_replace("{$clipData['titleName']} ({$clipData['year']}) - {$clipData['clipTitle']} - ", '', $description);
				// description may have commas, need to escape these before video metadata is imploded by comma
				$clipData['description'] = str_replace(',', '&#44;', $description);	
				
				$clipData['duration'] = $enclosure->get_duration();
			}

			$articlesCreated += $this->createVideoPageForPartnerVideo(VideoPage::V_MOVIECLIPS, $clipData, $msg);
			if ($msg) {
				print "ERROR: $msg\n";
			}
		}

		return $articlesCreated;
	}

	public static function getMovieClipIdsFromFileContents($file) {
		$ids = array();

		$lines = explode("\n", $file);

		foreach ($lines as $line) {
			$line = trim($line);
			if ($line) {
				$ids[] = $line;
			}
		}

		return $ids;
	}

	public static function generateNameForPartnerVideo($provider, array $data) {
		$name = '';

		switch ($provider) {
			case VideoPage::V_SCREENPLAY:
				$altDescription = '';
				$altDescription .= !empty($data['trailerType']) ? $data['trailerType'] . ' ' : '';
				$altDescription .= !empty($data['trailerVersion']) ? $data['trailerVersion'] . ' ' : '';
				$altDescription .= "({$data['eclipId']})";
				$description = ($data['description']) ? $data['description'] : $altDescription;
				$name = sprintf("%s - %s", self::generateTitleNameForPartnerVideo($provider, $data), $description);										
				break;
			case VideoPage::V_MOVIECLIPS:
				$name = sprintf("%s - %s", self::generateTitleNameForPartnerVideo($provider, $data), $data['clipTitle']);
				break;
			default:
		}

		return $name;
	}

	public static function generateCategoriesForPartnerVideo($provider, array $data) {
		global $wgWikiaVideoProviders;

		$categories = array();
		$categories[] = $wgWikiaVideoProviders[$provider];

		switch ($provider) {
			case VideoPage::V_SCREENPLAY:
				$categories[] = self::generateTitleNameForPartnerVideo($provider, $data);	
				if (!empty($data['trailerVersion'])) {
					$categories[] = $data['trailerVersion'];
				}
				break;
			case VideoPage::V_MOVIECLIPS:
				$categories[] = self::generateTitleNameForPartnerVideo($provider, $data);
				if (!empty($data['freebaseMid'])) {
					$categories[] = 'freebasemid-' . (substr($data['freebaseMid'], 0, 3) == '/m/' ? substr($data['freebaseMid'], 3) : $data['freebaseMid']);	// since / is not valid in category name, remove preceding /m/
				}
				break;
			default:
				return array();
		}

		return $categories;
	}
	
	public static function generateTitleNameForPartnerVideo($provider, array $data) {
		$name = '';
		
		switch ($provider) {
			case VideoPage::V_SCREENPLAY:
			case VideoPage::V_MOVIECLIPS:
				if (strpos($data['titleName'], "({$data['year']})") === false) {
					$name = $data['titleName'] . ' (' . $data['year'] . ')';					
				}
				else {
					$name = $data['titleName'];					
				}
				break;
			default:
		}
		
		return $name;		
	}
	
	protected function makeTitleSafe($name) {
		return Title::makeTitleSafe(NS_VIDEO, str_replace('#', '', $name));    // makeTitleSafe strips '#' and anything after. just leave # out
	}		
	
	protected static function sanitizeDataForPartnerVideo($provider, &$data) {
		switch ($provider) {
			case VideoPage::V_SCREENPLAY:
				$data['titleName'] = str_replace('  ', ' ', str_replace('/', ' ', $data['titleName']) );
				if (!empty($data['description'])) {
					$data['description'] = str_replace('  ', ' ', str_replace('/', ' ', $data['description']) );					
				}
				break;
			case VideoPage::V_MOVIECLIPS:
				$data['titleName'] = str_replace('  ', ' ', str_replace('/', ' ', $data['titleName']) );
				break;
			default:
		}
	}

	public function createVideoPageForPartnerVideo($provider, array $data, &$msg) {
		global $debug, $parseOnly, $filename;

		$id = null;
		$metadata = null;	
		
		self::sanitizeDataForPartnerVideo($provider, $data);
		
		$name = self::generateNameForPartnerVideo($provider, $data);

		switch ($provider) {
			case VideoPage::V_SCREENPLAY:
				$id = $data['eclipId'];

				if (empty($data['stdBitrateCode'])) {
					$msg = "no video encoding exists for $name: clip $id";
					return 0;
				}

				$doesHdExist = (int) !empty($data['hdMp4Url']);
				$metadata = array($data['stdBitrateCode'], $doesHdExist, $data['duration'], $data['jpegBitrateCode']);
				break;
			case VideoPage::V_MOVIECLIPS:
				$id = $data['mcId'];
				$metadata = array($data['thumbnail'], $data['duration'], $data['description']);
				break;
			default:
				$msg = "unsupported provider $provider";
				return 0;
		}


		$title = $this->makeTitleSafe($name);
		if(is_null($title)) {
			$msg = "article title was null: clip id $id. name: $name";
			return 0;
		}
		if(!$debug && !$parseOnly && $title->exists()) {
			$msg = "article named $name already exists: clip id $id";
			return 0;
		}	

		$categories = self::generateCategoriesForPartnerVideo($provider, $data);
		$categoryStr = '';
		foreach ($categories as $categoryName) {
			$category = Category::newFromName($categoryName);
			$categoryStr .= '[[' . $category->getTitle()->getFullText() . ']]';
		}

		$video = F::build('VideoPage', array(&$title));
		if ($video instanceof VideoPage) {
			$video->loadFromPars( $provider, $id, $metadata );
			$video->setName( $name );
			if ($parseOnly) {
				printf("%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\t%s\n", basename($filename), $id, $data['titleName'], $data['year'], $title->getText(), self::generateTitleNameForPartnerVideo($provider, $data), $provider==VideoPage::V_SCREENPLAY ? $metadata[2] : $metadata[1], implode(',', $metadata), implode(',', $categories));
			}
			elseif ($debug) {
				print "parsed partner clip id $id. name: {$title->getText()}. data: " . implode(',', $metadata) . ". categories: " . implode(',', $categories) . "\n";
			}
			else {
				$video->save($categoryStr);
				print "created article {$video->getID()} from partner clip id $id\n";
			}
			return 1;
		}

		return 0;
	}
}
