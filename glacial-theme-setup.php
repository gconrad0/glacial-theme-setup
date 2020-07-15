<?php
/**
 * Plugin Name: Glacial Multimedia Theme Setup
 * Plugin URI: https://glacial.com/
 * Description: A plugin that helps setup the Glacial Multimedia WP theme
 * Version: 0.0.9
 * Author: Glacial Multimedia
 * Released under the GNU General Public License (GPL)
 * http://www.gnu.org/licenses/gpl.txt
 */


if ( !defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists( 'GlacialThemeSetup' ) ) :

//	register_activation_hook( __FILE__, 'glacialThemeSetup' );//activation hook
//
//	function glacialThemeSetup() {

		define( 'GLACIALSETUP_DIR', __DIR__ );
		define( 'GLACIALSETUP_URI', __FILE__ );



function glacialActivate() {
	require_once GLACIALSETUP_DIR . '/classes/GlacialActivator.php';

	GlacialActivator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function glacialDeactivate() {
	require_once   GLACIALSETUP_DIR . 'classes/GlacialDeactivator.php';
	GlacialDeactivator::deactivate();
}

register_activation_hook( __FILE__, 'glacialActivate' );
register_deactivation_hook( __FILE__, 'glacialDeactivate' );

	// Don't run on the frontend
	if ( is_admin() ) {

		require_once( GLACIALSETUP_DIR . '/classes/GlacialThemeSetup.php' );
		// Run our plugin
		new GlacialThemeSetup\GlacialThemeSetup();
	}
	//}
endif;
