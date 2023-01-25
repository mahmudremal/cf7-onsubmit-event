<?php
/**
 * Register Custom Taxonomies
 *
 * @package FWPCF7OnSubmitEvent
 */
namespace CF7ONSUBMIT_THEME\Inc;
use CF7ONSUBMIT_THEME\Inc\Traits\Singleton;

class Register_Taxonomies {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'create_genre_taxonomy' ] );
		add_action( 'init', [ $this, 'create_year_taxonomy' ] );

	}

	// Register Taxonomy Genre
	public function create_genre_taxonomy() {

		$labels = [
			'name'              => _x( 'Genres', 'taxonomy general name', 'cf7-onsubmit-event' ),
			'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'cf7-onsubmit-event' ),
			'search_items'      => __( 'Search Genres', 'cf7-onsubmit-event' ),
			'all_items'         => __( 'All Genres', 'cf7-onsubmit-event' ),
			'parent_item'       => __( 'Parent Genre', 'cf7-onsubmit-event' ),
			'parent_item_colon' => __( 'Parent Genre:', 'cf7-onsubmit-event' ),
			'edit_item'         => __( 'Edit Genre', 'cf7-onsubmit-event' ),
			'update_item'       => __( 'Update Genre', 'cf7-onsubmit-event' ),
			'add_new_item'      => __( 'Add New Genre', 'cf7-onsubmit-event' ),
			'new_item_name'     => __( 'New Genre Name', 'cf7-onsubmit-event' ),
			'menu_name'         => __( 'Genre', 'cf7-onsubmit-event' ),
		];
		$args   = [
			'labels'             => $labels,
			'description'        => __( 'Movie Genre', 'cf7-onsubmit-event' ),
			'hierarchical'       => true,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true,
		];

		register_taxonomy( 'genre', [ 'movies' ], $args );

	}

	// Register Taxonomy Year
	public function create_year_taxonomy() {

		$labels = [
			'name'              => _x( 'Years', 'taxonomy general name', 'cf7-onsubmit-event' ),
			'singular_name'     => _x( 'Year', 'taxonomy singular name', 'cf7-onsubmit-event' ),
			'search_items'      => __( 'Search Years', 'cf7-onsubmit-event' ),
			'all_items'         => __( 'All Years', 'cf7-onsubmit-event' ),
			'parent_item'       => __( 'Parent Year', 'cf7-onsubmit-event' ),
			'parent_item_colon' => __( 'Parent Year:', 'cf7-onsubmit-event' ),
			'edit_item'         => __( 'Edit Year', 'cf7-onsubmit-event' ),
			'update_item'       => __( 'Update Year', 'cf7-onsubmit-event' ),
			'add_new_item'      => __( 'Add New Year', 'cf7-onsubmit-event' ),
			'new_item_name'     => __( 'New Year Name', 'cf7-onsubmit-event' ),
			'menu_name'         => __( 'Year', 'cf7-onsubmit-event' ),
		];
		$args   = [
			'labels'             => $labels,
			'description'        => __( 'Movie Release Year', 'cf7-onsubmit-event' ),
			'hierarchical'       => false,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true,
		];
		register_taxonomy( 'movie-year', [ 'movies' ], $args );

	}

}
