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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

include_once('glacial-theme-setup-core.php');
register_activation_hook(__FILE__,array('AIO_WP_Security','activate_handler'));//activation hook
register_deactivation_hook(__FILE__,array('AIO_WP_Security','deactivate_handler'));//deactivation hook


if( !class_exists('Bootstrap') ) :
	define('GLACIALSETUP_DIR', __DIR__);
	define('GLACIALSETUP_URI', __FILE__);

	require_once(GLACIALSETUP_DIR . 'classes/GlacialThemeSetup.php');
endif;
