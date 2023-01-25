<?php
/**
 * Register Post Types
 *
 * @package FWPCF7OnSubmitEvent
 */
namespace CF7ONSUBMIT_THEME\Inc;
use CF7ONSUBMIT_THEME\Inc\Traits\Singleton;

class Register_Post_Types {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'create_movie_cpt' ], 0 );

	}

	// Register Custom Post Type Movie
	public function create_movie_cpt() {

		$labels = [
			'name'                  => _x( 'Movies', 'Post Type General Name', 'cf7-onsubmit-event' ),
			'singular_name'         => _x( 'Movie', 'Post Type Singular Name', 'cf7-onsubmit-event' ),
			'menu_name'             => _x( 'Movies', 'Admin Menu text', 'cf7-onsubmit-event' ),
			'name_admin_bar'        => _x( 'Movie', 'Add New on Toolbar', 'cf7-onsubmit-event' ),
			'archives'              => __( 'Movie Archives', 'cf7-onsubmit-event' ),
			'attributes'            => __( 'Movie Attributes', 'cf7-onsubmit-event' ),
			'parent_item_colon'     => __( 'Parent Movie:', 'cf7-onsubmit-event' ),
			'all_items'             => __( 'All Movies', 'cf7-onsubmit-event' ),
			'add_new_item'          => __( 'Add New Movie', 'cf7-onsubmit-event' ),
			'add_new'               => __( 'Add New', 'cf7-onsubmit-event' ),
			'new_item'              => __( 'New Movie', 'cf7-onsubmit-event' ),
			'edit_item'             => __( 'Edit Movie', 'cf7-onsubmit-event' ),
			'update_item'           => __( 'Update Movie', 'cf7-onsubmit-event' ),
			'view_item'             => __( 'View Movie', 'cf7-onsubmit-event' ),
			'view_items'            => __( 'View Movies', 'cf7-onsubmit-event' ),
			'search_items'          => __( 'Search Movie', 'cf7-onsubmit-event' ),
			'not_found'             => __( 'Not found', 'cf7-onsubmit-event' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'cf7-onsubmit-event' ),
			'featured_image'        => __( 'Featured Image', 'cf7-onsubmit-event' ),
			'set_featured_image'    => __( 'Set featured image', 'cf7-onsubmit-event' ),
			'remove_featured_image' => __( 'Remove featured image', 'cf7-onsubmit-event' ),
			'use_featured_image'    => __( 'Use as featured image', 'cf7-onsubmit-event' ),
			'insert_into_item'      => __( 'Insert into Movie', 'cf7-onsubmit-event' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Movie', 'cf7-onsubmit-event' ),
			'items_list'            => __( 'Movies list', 'cf7-onsubmit-event' ),
			'items_list_navigation' => __( 'Movies list navigation', 'cf7-onsubmit-event' ),
			'filter_items_list'     => __( 'Filter Movies list', 'cf7-onsubmit-event' ),
		];
		$args   = [
			'label'               => __( 'Movie', 'cf7-onsubmit-event' ),
			'description'         => __( 'The movies', 'cf7-onsubmit-event' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-video-alt',
			'supports'            => [
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			],
			'taxonomies'          => [],
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		];

		register_post_type( 'movies', $args );

	}


}
