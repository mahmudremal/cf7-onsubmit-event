<?php
/**
 * This plugin ordered by a client and done by Remal Mahmud (fiverr.com/mahmud_remal). Authority dedicated to that cient.
 *
 * @wordpress-plugin
 * Plugin Name:       CF7 onSubmit Event
 * Plugin URI:        https://github.com/mahmudremal/cf7-onsubmit-event/
 * Description:       Woocommerce endline order video integration plugin made with love by Remal Mahmud.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Remal Mahmud
 * Author URI:        https://github.com/mahmudremal/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cf7-onsubmit-event
 * Domain Path:       /languages
 * 
 * @package FWPCF7OnSubmitEvent
 * @author  Remal Mahmud (https://github.com/mahmudremal)
 * @version 1.0.1
 * @link https://github.com/mahmudremal/cf7-onsubmit-event/
 * @category	WooComerce Plugin
 * @copyright	Copyright (c) 2023-25
 * 
 * payment custom link https://mysite.com/checkout/payment/39230/?pay_for_order=true&key=wc_order_UWdhxxxYYYzzz or get link $order->get_checkout_payment_url();
 */

/**
 * Bootstrap the plugin.
 */



defined( 'CF7ONSUBMIT_PROJECT__FILE__' ) || define( 'CF7ONSUBMIT_PROJECT__FILE__', untrailingslashit( __FILE__ ) );
defined( 'CF7ONSUBMIT_DIR_PATH' ) || define( 'CF7ONSUBMIT_DIR_PATH', untrailingslashit( plugin_dir_path( CF7ONSUBMIT_PROJECT__FILE__ ) ) );
defined( 'CF7ONSUBMIT_DIR_URI' ) || define( 'CF7ONSUBMIT_DIR_URI', untrailingslashit( plugin_dir_url( CF7ONSUBMIT_PROJECT__FILE__ ) ) );
defined( 'CF7ONSUBMIT_BUILD_URI' ) || define( 'CF7ONSUBMIT_BUILD_URI', untrailingslashit( CF7ONSUBMIT_DIR_URI ) . '/assets/build' );
defined( 'CF7ONSUBMIT_BUILD_PATH' ) || define( 'CF7ONSUBMIT_BUILD_PATH', untrailingslashit( CF7ONSUBMIT_DIR_PATH ) . '/assets/build' );
defined( 'CF7ONSUBMIT_BUILD_JS_URI' ) || define( 'CF7ONSUBMIT_BUILD_JS_URI', untrailingslashit( CF7ONSUBMIT_DIR_URI ) . '/assets/build/js' );
defined( 'CF7ONSUBMIT_BUILD_JS_DIR_PATH' ) || define( 'CF7ONSUBMIT_BUILD_JS_DIR_PATH', untrailingslashit( CF7ONSUBMIT_DIR_PATH ) . '/assets/build/js' );
defined( 'CF7ONSUBMIT_BUILD_IMG_URI' ) || define( 'CF7ONSUBMIT_BUILD_IMG_URI', untrailingslashit( CF7ONSUBMIT_DIR_URI ) . '/assets/build/src/img' );
defined( 'CF7ONSUBMIT_BUILD_CSS_URI' ) || define( 'CF7ONSUBMIT_BUILD_CSS_URI', untrailingslashit( CF7ONSUBMIT_DIR_URI ) . '/assets/build/css' );
defined( 'CF7ONSUBMIT_BUILD_CSS_DIR_PATH' ) || define( 'CF7ONSUBMIT_BUILD_CSS_DIR_PATH', untrailingslashit( CF7ONSUBMIT_DIR_PATH ) . '/assets/build/css' );
defined( 'CF7ONSUBMIT_BUILD_LIB_URI' ) || define( 'CF7ONSUBMIT_BUILD_LIB_URI', untrailingslashit( CF7ONSUBMIT_DIR_URI ) . '/assets/build/library' );
defined( 'CF7ONSUBMIT_ARCHIVE_POST_PER_PAGE' ) || define( 'CF7ONSUBMIT_ARCHIVE_POST_PER_PAGE', 9 );
defined( 'CF7ONSUBMIT_SEARCH_RESULTS_POST_PER_PAGE' ) || define( 'CF7ONSUBMIT_SEARCH_RESULTS_POST_PER_PAGE', 9 );
defined( 'FUTUREWORDPRESS_PROJECT_OPTIONS' ) || define( 'FUTUREWORDPRESS_PROJECT_OPTIONS', get_option( 'cf7-onsubmit-event' ) );

require_once CF7ONSUBMIT_DIR_PATH . '/inc/helpers/autoloader.php';
require_once CF7ONSUBMIT_DIR_PATH . '/inc/helpers/template-tags.php';

if( ! function_exists( 'CF7ONSUBMIT_get_theme_instance' ) ) {
	function CF7ONSUBMIT_get_theme_instance() {\CF7ONSUBMIT_THEME\Inc\Project::get_instance();}
}
CF7ONSUBMIT_get_theme_instance();



