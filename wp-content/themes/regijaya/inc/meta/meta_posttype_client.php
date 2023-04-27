<?php

class Client_Post_Type {

    public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Clients', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Clients', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Client', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Client', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Client', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Client', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Client', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Client', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Client', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Clients', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Clients', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Client', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Clients found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Clients found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Clients', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Client', 'qubick-id' ),
			],
			'public'              => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_rest'        => true,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite_no_front'    => false,
			'show_in_menu'        => true,
			'menu_position'       => 8,
			'menu_icon'           => 'dashicons-list-view',
			'supports' => [
                'title',
				'thumbnail',
			],
			'rewrite' => true,
		];

		register_post_type( 'client', $args );

	}

}

Client_Post_Type::init();

?>