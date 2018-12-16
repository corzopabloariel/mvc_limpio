<?php
include_once('config.php');
include_once('rb.php');
class DB {
	static function init() {
		R::setup("mysql:host=".CONFIG_HOST.";dbname=".CONFIG_BD,CONFIG_USER,CONFIG_PASS);
		R::ext('xdispense', function( $type ){ return R::getRedBean()->dispense( $type ); });
	}
}
