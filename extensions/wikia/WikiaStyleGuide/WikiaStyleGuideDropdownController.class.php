<?php

/**
 * Wikia UI Style Guide Dropdown Controller
 * @author Kyle Florence
 */
class WikiaStyleGuideDropdownController extends WikiaController {
	public function multiSelect() {
		F::build('JSMessages')->enqueuePackage('WikiaStyleGuideDropdown', array('wikiastyleguide-dropdown-*'));

		$this->response->addAsset('extensions/wikia/WikiaStyleGuide/js/Dropdown.js');
		$this->response->addAsset('extensions/wikia/WikiaStyleGuide/css/Dropdown.scss');

		$this->options = $this->getVal('options', array());
		$this->selected = $this->getVal('selected', array());
	}
}
