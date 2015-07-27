<?php
namespace Concrete\Package\ImageSliderCustomTemplate;
use Package;
use BlockType;
use BlockTypeSet;
use Config;
defined('C5_EXECUTE') or die(_("Access Denied."));
class Controller extends Package
{
	protected $pkgHandle = 'image_slider_custom_template';
	protected $appVersionRequired = '5.7.4.2';
	protected $pkgVersion = '1.0.0';

	public function getPackageDescription()
	{
		return t("Image slider custom template");
	}
	public function getPackageName()
	{
		return t("Image slider custom template");
	}
/*
	public function install()
	{
		$pkg = parent::install();
	}
*/
}
?>
