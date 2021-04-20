<?php
/*
Plugin Name: ListingPro Payment hooks
Plugin URI: 
Description: This plugin Only compatible With listingpro Theme By CridioStudio.
Version: 1.0.2
Author: CridioStudio (Dev Team)
Author URI: http://www.cridio.io
Author Email: support@cridio.com

  Copyright 2018 CridioStudio
*/

if (!defined('ABSPATH')) return;
if (!is_admin()) return;

if (!defined('PLUGIN_DIR_PATH')) define('PLUGIN_DIR_PATH', plugins_url('', __FILE__));


class ListingCustomPayments{
	
	private $dir;
	
	function __construct(){
		$dir = dirname( __FILE__ );
		
	}
	/* /constructor */
	
	public function includeFiles(){
		include_once('functions.php');
	}
	
	
	
}
/* end class */