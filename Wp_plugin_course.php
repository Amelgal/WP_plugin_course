<?php
define( 'DIR_PATH', plugin_dir_path( __FILE__ ) );
/**
 * Plugin Name:       WP_course_plugin
 * Plugin URI:        https://.../
 * Description:       test plugin
 * Version:           1.0.0
 * Requires PHP:      7.4
 * Author:            Shalko Eugene
 * Author URI:        https://.../
 */

if ( ! class_exists( 'DefinеHooks' ) ) {
    class DefinеHooks {

        /**
         * Constructor
         */
        public function __construct() {
            $this->setup_actions();
        }
        /**
         * Setting up Hooks
         */
        public function setup_actions() {
            //Main plugin hooks
            register_activation_hook( DIR_PATH, array( 'DefinеHooks', 'activate' ) );
            register_deactivation_hook( DIR_PATH, array( 'DefinеHooks', 'deactivate' ) );
        }
        /**
         * Activate callback
         */
        public static function activate() {
            //Activation code in here
        }
        /**
         * Deactivate callback
         */
        public static function deactivate() {
            //Deactivation code in here
        }
    }
    // instantiate the plugin class
    $wp_plugin_template = new DefinеHooks();
}

?>
