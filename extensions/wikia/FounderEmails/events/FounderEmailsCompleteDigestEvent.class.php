<?php
class FounderEmailsCompleteDigestEvent extends FounderEmailsEvent {
	public function __construct( Array $data = array() ) {
		parent::__construct( 'completeDigest' );
		$this->setData( $data );
	}

	public function enabled ( $wgCityId ) {
 		
		if ( FounderEmails::getInstance()->getWikiFounder()->getOption( "founderemails-complete-digest-$wgCityId" ) ) {
			return true;
		}
		return false;
	}
	
	/**
	 * Called from maintenance script only.  Send Digest emails for any founders with that preference enabled
	 * @param array $events 
	 */
	public function process ( Array $events ) {
		global $wgSharedDB, $wgCityId;		
		wfProfileIn( __METHOD__ );

		$cWikiId = ( $wgSharedDB ) ? WikiFactory::DBtoID( $wgSharedDB ) : $wgCityId;

		$founderEmailObj = FounderEmails::getInstance();
		// Get list of founders with digest mode turned on (defined in FounderEmailsEvent		
		$cityList = $founderEmailObj->getFoundersWithPreference('founderemails-complete-digest');

		foreach ($cityList as $cityID) {

			$foundingUser = $founderEmailObj->getWikiFounder($cityID);
			$foundingWiki = WikiFactory::getWikiById( $cityID );
			$hash_url = Wikia::buildUserSecretKey( $foundingUser->getName(), 'sha256' );
			$unsubscribe_url = GlobalTitle::newFromText('Unsubscribe', NS_SPECIAL, $cWikiId )->getFullURL( array( 'key' => $hash_url, 'ctc' => 'FE10' ) );
			$page_url = GlobalTitle::newFromText( 'WikiActivity', NS_SPECIAL, $cityID )->getFullUrl();

			$emailParams = array(
				'$FOUNDERNAME' => $foundingUser->getName(),
				'$UNSUBSCRIBEURL' => $unsubscribe_url,
				'$WIKINAME' => $foundingWiki->city_sitename,
				'$WIKIURL' => $foundingWiki->city_url,
				'$PAGEURL' => $page_url,
				'$UNIQUEVIEWS' => $founderEmailObj->getPageViews( $cityID ),	
				'$USERJOINS' => $founderEmailObj->getNewUsers( $cityID ),
				'$USEREDITS' => $founderEmailObj->getDailyEdits( $cityID ),
			);

			$langCode = $foundingUser->getOption( 'language' );
			// Only send digest emails for English users until translation is done 
			if ($langCode == 'en') {

				$mailSubject = $this->getLocalizedMsg( 'founderemails-email-complete-digest-subject', $emailParams );
				$mailBody = $this->getLocalizedMsg( 'founderemails-email-complete-digest-body', $emailParams );		
				$mailBodyHTML = wfRenderModule("FounderEmails", "CompleteDigest", array_merge($emailParams, array('language' => 'en', 'type' => 'complete-digest')));
				$mailBodyHTML = strtr($mailBodyHTML, $emailParams);
				$mailCategory = FounderEmailsEvent::CATEGORY_COMPLETE_DIGEST.(!empty($langCode) && $langCode == 'en' ? 'EN' : 'INT');

				// Only send email if there is some kind of activity to report
				if ($emailParams['$UNIQUEVIEWS'] > 0 || $emailParams['$USERJOINS'] > 0 || $emailParams['$USEREDITS'] > 0 ) {
					$founderEmailObj->notifyFounder( $this, $mailSubject, $mailBody, $mailBodyHTML, $cityID, $mailCategory );
				}
			}
		}

		wfProfileOut( __METHOD__ );		
	}

	/*  Not used by DailyDigest event
	public static function register ( ) {
		
	}
	 */
}
