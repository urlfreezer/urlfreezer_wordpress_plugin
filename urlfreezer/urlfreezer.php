<?php
/*
Plugin Name: URL Freezer
Description: Integrates URL Freezer with your website
Version:     1.0.0
Author:      URL Freezer
Author URI:  http://urlfreezer.com
Text Domain: urlfreezer
*/

defined( 'ABSPATH' ) or die;

define( 'URLFREEZER_VER', '1.0.0' );
define( 'URLFREEZER_FILE', __FILE__ );
define( 'URLFREEZER_DIR_PATH', plugin_dir_path( __FILE__ ) );

if ( ! class_exists( 'URLFreezer' ) ) {
	class URLFreezer {
		public static function get_instance() {
			if ( self::$instance == null ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		private static $instance = null;

		private function __clone() { }

		private function __wakeup() { }

		private function __construct() {
			// Actions
			add_action( 'admin_init', array( $this, 'register_settings' ) );
			add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
			add_action( 'wp_footer', array( $this, 'add_script' ) );
		}

		public function register_settings() {
			register_setting( 'urlfreezer_optsgroup', 'urlfreezer_enabled' );
			register_setting( 'urlfreezer_optsgroup', 'urlfreezer_id' );
		}

		public function add_admin_menu() {
			add_menu_page(
				__( 'URL Freezer', 'urlfreezer' ),
				__( 'URL Freezer', 'urlfreezer' ),
				'manage_options',
				'urlfreezer',
				array( $this, 'render_options_page' ),
				'dashicons-media-code'
			);
		}

		public function render_options_page() {
			require( __DIR__ . '/options.php' );
		}


		public function add_script() {
			$enabled = trim( get_option( 'urlfreezer_enabled' ) );
			if ( $enabled  == '' ) return;

			$user_id = trim( get_option( 'urlfreezer_id' ) );
			if ( $user_id == '' ) return;

			require_once( URLFREEZER_DIR_PATH . 'snippet.php' );
		}
	}
}
URLFreezer::get_instance();
