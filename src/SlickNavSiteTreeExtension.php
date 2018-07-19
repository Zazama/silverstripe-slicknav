<?php

namespace Zazama;

use SilverStripe\View\Requirements;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Extension;

class SlickNavSiteTreeExtension extends Extension {

	use Configurable;

	private static $include_jquery = true;

	public function contentcontrollerInit() {
		Requirements::css('zazama/silverstripe-slicknav:css/slicknav.min.css');
		if($this->config()->get('include_jquery')) {
			Requirements::javascript('zazama/silverstripe-slicknav:javascript/jquery-3.3.1.min.js');
		}
		Requirements::javascript('zazama/silverstripe-slicknav:javascript/jquery.slicknav.min.js');
	}
}