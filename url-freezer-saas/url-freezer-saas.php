<?php
/*
Plugin Name: URL Freezer SaaS
Description: Integrates URL Freezer SaaS with your website
Version:     1.0.0
Author:      URL Freezer
Author URI:  http://urlfreezer.com
Text Domain: url-freezer-saas
*/

defined( 'ABSPATH' ) or die;

define( 'URL_FREEZER_SAAS_VER', '1.0.0' );
define( 'URL_FREEZER_SAAS_FILE', __FILE__ );
define( 'URL_FREEZER_SAAS_DIR_PATH', plugin_dir_path( __FILE__ ) );

if ( ! class_exists( 'URL_Freezer_SaaS' ) ) {
	class URL_Freezer_SaaS {
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
			register_setting( 'url_freezer_saas_optsgroup', 'url_freezer_saas_enabled' );
			register_setting( 'url_freezer_saas_optsgroup', 'url_freezer_saas_id' );
		}

		public function add_admin_menu() {
			add_menu_page(
				__( 'URL Freezer', 'url-freezer-saas' ),
				__( 'URL Freezer', 'url-freezer-saas' ),
				'manage_options',
				'url-freezer-saas',
				array( $this, 'render_options_page' ),
				'dashicons-media-code'
			);
		}

		public function render_options_page() {
			require( __DIR__ . '/options.php' );
		}


		public function add_script() {
			$enabled = trim( get_option( 'url_freezer_saas_enabled' ) );
			if ( $enabled  == '' ) return;

			$user_id = trim( get_option( 'url_freezer_saas_id' ) );
			if ( $user_id == '' ) return;

			require_once( URL_FREEZER_SAAS_DIR_PATH . 'snippet.php' );
		}
	}
}
URL_Freezer_SaaS::get_instance();
