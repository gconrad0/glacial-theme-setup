<?php


namespace GlacialThemeSetup;

if ( ! class_exists( 'GlacialThemeSetup' ) ) {

	class GlacialThemeSetup {

		public function __construct() {

			$this->includes();
			new Settings();
			//new GlacialUsers();

		}

		function includes() {
			include_once( 'GlacialUsers.php' );
			include_once ('Settings.php');
		}

		function addHooks() {

		}

	} // End of class

} //End of class not exists check
