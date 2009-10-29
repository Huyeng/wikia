<?php

class ActivityFeedHelper {

	/**
	 * @author Maciej Błaszkowski <marooned at wikia-inc.com>
	 * TODO: because of late change in specs, this function has to handle parameters in different formats and thus it's little confused - would be good to clean up the code someday
	 */
	static function parseParameters($parametersIn) {
		global $wgContLang;

		$excludeNamespaces = array();
		$parameters = array();
		//default values
		$parameters['maxElements'] = 10;
		$parameters['flags'] = array();
		$parameters['includeNamespaces'] = null;

		foreach ($parametersIn as $parameter => $value) {
			if (is_int($parameter)) {	//ajax
				@list($var, $val) = explode('=', $value);
			} else {	//parser tag
				$var = $parameter;
				$val = $value;
			}

			switch (trim($var)) {
				case 'size':
					if (!empty($val)) $parameters['maxElements'] = intval($val);
					break;
				case 'hideimages':
					if (!isset($val) || $val != 'false') $parameters['flags'][] = 'hideimages';
					break;
				case 'hidevideos':
					if (!isset($val) || $val != 'false') $parameters['flags'][] = 'hidevideos';
					break;
				case 'hidecategories':
					if (!isset($val) || $val != 'false') $parameters['flags'][] = 'hidecategories';
					break;
				case 'shortlist':
					if (!isset($val) || $val != 'false') $parameters['flags'][] = 'shortlist';
					break;
				case 'exclude':	//only from tag
					if (!empty($val)) {
						$namespaces = explode(',', $val);
						$blankNamespace = wfMsgForContent('blanknamespace');
						$blankNamespace = wfEmptyMsg('blanknamespace', $blankNamespace) ? null : $wgContLang->lc($blankNamespace);
						foreach ($namespaces as $namespace) {
							$namespace = trim($namespace);
							if (($namespaceIndex = $wgContLang->getNsIndex($namespace)) !== false && $namespaceIndex >= 0) {
								$excludeNamespaces[] = $namespaceIndex;
							} else {
								//check for main namespace which doesn't have formal name - try hardcoded 'main' and 'blanknamespace' message used in many places
								$namespaceLC = $wgContLang->lc($namespace);
								if ($namespaceLC == 'main' || $namespaceLC == $blankNamespace) {
									$excludeNamespaces[] = 0;
								}
							}
						}
						if (count($excludeNamespaces)) {
							global $wgCanonicalNamespaceNames;
							$allNS[0] = 'Main';	//hack to add main namespace
							$allNS += $wgCanonicalNamespaceNames;
							unset($allNS[-1]);
							unset($allNS[-2]);
							$parameters['includeNamespaces'] = implode('|', array_diff(array_keys($allNS), $excludeNamespaces));
						}
					}
					break;
				case 'style':	//only from tag
					if (!empty($val)) {
						$style = Sanitizer::checkCss($val);
						if ($style) {
							$parameters['style'] = $style;
						}
					}
					break;
				case 'ns':	//only from ajax
					if (!empty($val)) {
						$parameters['includeNamespaces'] = $val;
					}
					break;
				case 'flags':	//only from ajax
					if (!empty($val)) {
						$flags = explode('|', $val);
						if (in_array('hideimages', $flags)) $parameters['flags'][] = 'hideimages';
						if (in_array('hidevideos', $flags)) $parameters['flags'][] = 'hidevideos';
						if (in_array('hidecategories', $flags)) $parameters['flags'][] = 'hidecategories';
						if (in_array('shortlist', $flags)) $parameters['flags'][] = 'shortlist';
					}
					break;
				case 'tagid':	//only from ajax
					if (!empty($val)) {
						$parameters['tagid'] = $val;
					}
					break;
				case 'type':	//pick proper template for tag or widget
					if (!empty($val)) {
						$parameters['type'] = $val;
					}
					break;
			}
		}

		if (in_array('shortlist', $parameters['flags'])) {
			global $wgContentNamespaces;
			$parameters['includeNamespaces'] = implode('|', $wgContentNamespaces);
			$parameters['flags'][] = 'hideimages';
			$parameters['flags'][] = 'hidevideos';
			$parameters['flags'][] = 'hidecategories';
		}

		return $parameters;
	}

	/**
	 * @author Maciej Błaszkowski <marooned at wikia-inc.com>
	 */
	static function getList($parameters) {
		$removeDuplicatesType = in_array('shortlist', $parameters['flags']) ? 1 : 0; //remove duplicates using only title for shortlist

		$feedProxy = new ActivityFeedAPIProxy($parameters['includeNamespaces']);
		$feedRenderer = new ActivityFeedRenderer();

		$feedProvider = new DataFeedProvider($feedProxy, $removeDuplicatesType);
		$feedData = $feedProvider->get($parameters['maxElements']);
		if(!isset($feedData['results']) || count($feedData['results']) == 0) {
			return '';
		}

		$feedHTML = $feedRenderer->render($feedData, false, $parameters);
		$feedHTML = str_replace("\n", '', $feedHTML);
		return $feedHTML;
	}
}

$wgAjaxExportList[] = 'ActivityFeedAjax';
/**
 * @author Maciej Błaszkowski <marooned at wikia-inc.com>
 */
function ActivityFeedAjax() {
	global $wgRequest;
	$params = $wgRequest->getVal('params');

	$parameters = ActivityFeedHelper::parseParameters(explode('&', $params));

	wfLoadExtensionMessages('MyHome');
	$feedHTML = ActivityFeedHelper::getList($parameters);
	$data = array('data' => $feedHTML);

	$json = Wikia::json_encode($data);
	$response = new AjaxResponse($json);
	$response->setContentType('application/json; charset=utf-8');
	$response->setCacheDuration(60);
	return $response;
}