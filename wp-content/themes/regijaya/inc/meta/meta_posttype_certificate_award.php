<?php

class Certificate_Award_Post_Type {

    public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Certificates Awards', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Certificates Awards', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Certificate Award', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Certificate/Award', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Certificate/Award', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Certificate/Award', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Certificate/Award', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Certificate/Award', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Certificate/Award', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Certificates Awards', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Certificates Awards', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Certificate Award', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Data found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Data found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Certificates Awards', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Certificate Award', 'qubick-id' ),
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
			'taxonomies' => [
				'category',
			],
			'rewrite' => true,
		];

		register_post_type( 'certificate_award', $args );

	}
}

Certificate_Award_Post_Type::init();

?>