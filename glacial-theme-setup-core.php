<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'Glacial_Theme_Setup' ) ) {

	class Glacial_Theme_Setup {

		function __construct()
		{
			$this->includes();

		}

		function includes() {
			include_once('classes/wp-security-debug-logger.php');

		}

	}//End of class

}//End of class not exists check
