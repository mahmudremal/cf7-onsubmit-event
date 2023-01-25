<?php
/**
 * Register Menus
 *
 * @package FWPCF7OnSubmitEvent
 */
namespace CF7ONSUBMIT_THEME\Inc;
use CF7ONSUBMIT_THEME\Inc\Traits\Singleton;
class Menus {
	use Singleton;
	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}
	protected function setup_hooks() {
		/**
		 * Registering NAV menus.
		 */
		// add_action( 'init', [ $this, 'register_menus' ] );
		/**
		 * Admin Option Manus.
		 */
    add_filter( 'futurewordpress/project/settings/fields', [ $this, 'menus' ], 10, 1 );
	}
	public function register_menus() {
		register_nav_menus([
			'aquila-header-menu' => esc_html__( 'Header Menu', 'cf7-onsubmit-event' ),
			'aquila-footer-menu' => esc_html__( 'Footer Menu', 'cf7-onsubmit-event' ),
		]);
	}
	/**
	 * Get the menu id by menu location.
	 *
	 * @param string $location
	 *
	 * @return integer
	 */
	public function get_menu_id( $location ) {
		// Get all locations
		$locations = get_nav_menu_locations();
		// Get object id by location.
		$menu_id = ! empty($locations[$location]) ? $locations[$location] : '';
		return ! empty( $menu_id ) ? $menu_id : '';
	}
	/**
	 * Get all child menus that has given parent menu id.
	 *
	 * @param array   $menu_array Menu array.
	 * @param integer $parent_id Parent menu id.
	 *
	 * @return array Child menu array.
	 */
	public function get_child_menu_items( $menu_array, $parent_id ) {
		$child_menus = [];
		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}
		return $child_menus;
	}
  /**
   * WordPress Option page.
   * 
   * @return array
   */
	public function menus( $args ) {
    // get_FwpOption( 'key', 'default' )
		// is_FwpActive( 'key' )
		$args = [];
		$args['standard'] = [
			'title'					=> __( 'General', 'cf7-onsubmit-event' ),
			'description'			=> __( 'Generel fields comst commonly used to changed.', 'cf7-onsubmit-event' ),
			'fields'				=> [
				[
					'id' 			=> 'fwp_cf7event_enable',
					'label'					=> __( 'Enable Events', 'cf7-onsubmit-event' ),
					'description'			=> __( 'Enable events action to start function over frontend.', 'cf7-onsubmit-event' ),
					'type'			=> 'checkbox',
					'default'		=> true
				],
				[
					'id' 							=> 'fwp_cf7event_head',
					'label'						=> esc_html__( 'Insert <head> tag', 'cf7-onsubmit-event' ),
					'description'			=> esc_html__( 'The code to insert it on <head></head> tag. Scripts, styles, templates could be anything.', 'cf7-onsubmit-event' ),
					'type'						=> 'textarea',
					'default'					=> '<!-- Google tag (gtag.js) --><script async src="https://www.googletagmanager.com/gtag/js?id=AW-#########"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "AW-#########");</script>'
				],
				[
					'id' 							=> 'fwp_cf7event_foot',
					'label'						=> esc_html__( 'Insert after </body> tag', 'cf7-onsubmit-event' ),
					'description'			=> esc_html__( 'The code to insert it after </body> tag. Anything.', 'cf7-onsubmit-event' ),
					'type'						=> 'textarea',
					'default'					=> ''
				],
				[
					'id' 							=> 'fwp_cf7event_cf7',
					'label'						=> __( 'CF7 Submit', 'cf7-onsubmit-event' ),
					'description'			=> __( 'The Function to function on submit Contact form 7.', 'cf7-onsubmit-event' ),
					'type'						=> 'textarea',
					'default'					=> ''
				],
				// [
				// 	'id' 							=> 'fwp_cf7event_gtagid',
				// 	'label'						=> __( 'Google Tag ID', 'cf7-onsubmit-event' ),
				// 	'description'			=> __( 'The Google tag manager ID. EG. `AW-#########`.', 'cf7-onsubmit-event' ),
				// 	'type'						=> 'text',
				// 	'default'					=> '',
				// 	'placeholder'			=> 'AW-#########',
				// ],
			]
		];
		return $args;
	}
}
