<?php


namespace GlacialThemeSetup;


class GlacialUsers {

	var $users;

	function glacialUsers() {

		$this->$users = array(
			array(
				'user_login' => 'glacialcm',
				'user_pass'  => 'MuFn88B#qBXD',
				'user_email' => 'glacialcm@glacial.com',
				'first_name' => 'glacialcm',
				'role'       => 'administrator'
			),
			array(
				'user_login' => 'glacialcontent',
				'user_pass'  => 'Ck@oCdI27bdH',
				'user_email' => 'glacialcontent@glacial.com',
				'first_name' => 'glacialcontent',
				'role'       => 'administrator'
			),
			array(
				'user_login' => 'glacialdev',
				'user_pass'  => 'WNcV5d0@lyah',
				'user_email' => 'glacialdev@glacial.com',
				'first_name' => 'glacialdev',
				'role'       => 'administrator'
			),
			array(
				'user_login' => 'glacialedits',
				'user_pass'  => 'ESdghQHa@1T6',
				'user_email' => 'glacialedits@glacial.com',
				'first_name' => 'glacialedits',
				'role'       => 'administrator'
			),
			array(
				'user_login' => 'glacialppc',
				'user_pass'  => 'PxdfXO8!R3y!',
				'user_email' => 'glacialppc@glacial.com',
				'first_name' => 'glacialppc',
				'role'       => 'administrator'
			),
			array(
				'user_login' => 'glacialseo',
				'user_pass'  => 'S2wKm3@v8HQL',
				'user_email' => 'glacialseo@glacial.com',
				'first_name' => 'glacialseo',
				'role'       => 'administrator'
			),

		);

		function addUsers( $users ) {

			foreach ( $users as $user ) {
				if ( ! get_user_by( 'first_name', $user['first_name'] ) ) {
					wp_insert_user( $user );
				}
			}
		};

	}

}