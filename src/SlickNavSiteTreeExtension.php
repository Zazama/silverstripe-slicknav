<?php

namespace Zazama;

class SlickNavSiteTreeExtension extends Extension {

	private static $include_jquery = true;

	public function contentcontrollerInit() {
		Requirements::css('zazama/silverstripe-slicknav:css/slicknav.min.css');
		if(this->config()->get('include_jquery')) {
			Requirements::javascript('zazama/silverstripe-slicknav:javascript/jquery.min.js');
		}
		Requirements::javascript('zazama/silverstripe-slicknav:javascript/jquery.slicknav.min.js');
	}
}