<?php
/**
 * Plugin Name:       Block Core 
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Version:           1.0.0
 * Author:            Raihan Islam
 * Author URI:        https://raihan.website
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       block-core
 * Domain Path:       /languages
 */

 /**
  * @package Zero Configuration with @wordpress/create-block
  *  [boilerplate] && [BOILERPLATEPLUGINCORE] ===> Prefix
  */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( ! class_exists( 'BlockPluginCore_Blocks' ) ) {

	final class BlockPluginCore_Blocks {

		protected static $instance = null;

		/**
		 * Constructor
		 * @return void
		 */
		public function __construct() {
			$this->define_constants();
			$this->includes();
		}

		/**
		 * Definte the plugin constants
		 * @return void
		 */
		public function define_constants() {
			define( 'BOILERPLATEPLUGINCORE_VERSION', '1.0.0' );
			define( 'BOILERPLATEPLUGINCORE_DIR', __DIR__ );
			define( 'BOILERPLATEPLUGINCORE_URL', plugin_dir_url( __FILE__ ) );
			define( 'BOILERPLATEPLUGINCORE_PATH', plugin_dir_path( __FILE__ ) );
		}

		/**
		 * Include all the required files
		 * @return void
		 */
		public function includes() {
			require_once __DIR__ . '/inc/loader.php';
		}

		/**
		 * Initialize the plugin
		 * @return \BlockPluginCore_Blocks
		 */
		public static function init() {
			if( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}
	}
}

/**
 * Initialize the plugin
 * @return \BlockPluginCore_Blocks
 */
function boilerplate_blocks_init() {
	return BlockPluginCore_Blocks::init();
}

// kick-off the plugin
boilerplate_blocks_init();