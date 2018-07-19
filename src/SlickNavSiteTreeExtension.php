<?php

namespace Zazama;

use SilverStripe\View\Requirements;
use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Extension;

class SlickNavSiteTreeExtension extends Extension {

	use Configurable;


    /**
     * @config
     */
	private static $display_at_width = '992px';


    /**
     * @config
     */
	private static $navigationIdentifier = '#menu';


    /**
     * @config
     */
	private static $options = [
		'label' => 'Menu',
		'prependTo' => 'body'
	];

	/**
     * @config
     */
	private static $include_jquery = true;

	public function contentcontrollerInit() {
		Requirements::css('zazama/silverstripe-slicknav:css/slicknav.min.css');
		if($this->config()->get('include_jquery')) {
			Requirements::javascript('zazama/silverstripe-slicknav:javascript/jquery-3.3.1.min.js');
		}
		Requirements::javascript('zazama/silverstripe-slicknav:javascript/jquery.slicknav.min.js');
		$optionsString = json_encode($this->config()->get('options'), JSON_FORCE_OBJECT);
		Requirements::customCSS("
			.slicknav_menu {
				display: none;
			}
			@media only screen and (max-width: " . $this->config()->get('display_at_width') . ") {
				.slicknav_menu {
					display: block;
				}
			}
		");
		Requirements::customScript("
			\$snjquery('" . $this->config()->get('navigationIdentifier') . "').slicknav(" . $optionsString . ");"
		);
	}
}