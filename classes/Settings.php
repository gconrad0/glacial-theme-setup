<?php


namespace GlacialThemeSetup;


class Settings {

	public function __construct() {
		add_action( 'admin_menu',array( $this, 'settingsPage' ));
		//add_action( 'admin_init', 'wporg_settings_init' );
		//add_action( 'admin_menu', 'wporg_options_page' );


	}

	public function settingsPage() {

	    add_menu_page(
			'Glacial Theme Setup',
			'Glacial Theme Setup',
			'manage_options',
			'glacial-theme',
			[$this, 'optionsPageHTML']
		);
	}

	function optionsPageHTML() {

	    // check user capabilities
		if ( !current_user_can( 'manage_options' ) ) {
			return;
		}

		// add error/update messages

		// check if the user have submitted the settings
		// wordpress will add the "settings-updated" $_GET parameter to the url
		if ( isset( $_GET['settings-updated'] ) ) {
			// add settings saved message with the class of "updated"
			add_settings_error( 'wporg_messages', 'wporg_message', __( 'Settings Saved', 'wporg' ), 'updated' );
		}

		// show error/update messages
		settings_errors( 'wporg_messages' );
		?>
        <div class="wrap">
            <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
            <form action="options.php" method="post">
				<?php
				// output security fields for the registered setting "wporg"
				settings_fields( 'wporg' );
				// output setting sections and their fields
				// (sections are registered for "wporg", each field is registered to a specific section)
				do_settings_sections( 'wporg' );
				// output save settings button
				submit_button( 'Save Settings' );
				?>
            </form>
        </div>
		<?php
	}



}