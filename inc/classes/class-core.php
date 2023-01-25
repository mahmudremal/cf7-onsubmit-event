<?php
/**
 * Block Patterns
 *
 * @package FWPCF7OnSubmitEvent
 */

namespace CF7ONSUBMIT_THEME\Inc;
use CF7ONSUBMIT_THEME\Inc\Traits\Singleton;

class Core {
	use Singleton;
	private $theUploadDir;
	protected function __construct() {
		$this->theUploadDir = false;
		// load class.
		$this->setup_hooks();
	}
	protected function setup_hooks() {
		if( ! is_FwpActive( 'fwp_cf7event_enable' ) ) {return;}
		add_action( 'init', [ $this, 'init' ], 10, 0 );
	}
	public function init() {
		global $wp, $wpdb;
		if( get_FwpOption( 'fwp_cf7event_head', false ) !== false && ! empty( get_FwpOption( 'fwp_cf7event_head', '' ) ) ) {
			add_action( 'wp_head', function() {echo get_FwpOption( 'fwp_cf7event_head', '' );}, 10, 0 );
		}
		if( get_FwpOption( 'fwp_cf7event_foot', false ) !== false && ! empty( get_FwpOption( 'fwp_cf7event_foot', '' ) ) ) {
			add_action( 'wp_footer', function() {echo get_FwpOption( 'fwp_cf7event_foot', '' );}, 10, 0 );
		}
	}
}
