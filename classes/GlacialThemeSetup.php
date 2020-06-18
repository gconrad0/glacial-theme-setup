<?php


namespace GlacialThemeSetup;

if ( ! class_exists( 'GlacialThemeSetup' ) ) {
	class GlacialThemeSetup {

		function __construct() {
			$this->includes();

		}

		function includes() {
			include_once( 'GlacialUsers.php' );

		}

	} // End of class

} //End of class not exists check
$glacialThemeSetup = new GlacialThemeSetup();