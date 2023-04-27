<?php

class Product_Post_Type {

    public static function init() {
		add_action( 'init', array( __CLASS__, 'definition' ) );
		add_filter( 'rwmb_meta_boxes', array( __CLASS__, 'register_meta_boxes') );
	}

	public static function definition() {
		$args = [
			'label'  => esc_html__( 'Products', 'qubick-id' ),
			'labels' => [
				'menu_name'          => esc_html__( 'Products', 'qubick-id' ),
				'name_admin_bar'     => esc_html__( 'Product', 'qubick-id' ),
				'add_new'            => esc_html__( 'Add Product', 'qubick-id' ),
				'add_new_item'       => esc_html__( 'Add New Product', 'qubick-id' ),
				'new_item'           => esc_html__( 'New Product', 'qubick-id' ),
				'edit_item'          => esc_html__( 'Edit Product', 'qubick-id' ),
				'view_item'          => esc_html__( 'View Product', 'qubick-id' ),
				'update_item'        => esc_html__( 'View Product', 'qubick-id' ),
				'all_items'          => esc_html__( 'All Products', 'qubick-id' ),
				'search_items'       => esc_html__( 'Search Products', 'qubick-id' ),
				'parent_item_colon'  => esc_html__( 'Parent Product', 'qubick-id' ),
				'not_found'          => esc_html__( 'No Products found', 'qubick-id' ),
				'not_found_in_trash' => esc_html__( 'No Products found in Trash', 'qubick-id' ),
				'name'               => esc_html__( 'Products', 'qubick-id' ),
				'singular_name'      => esc_html__( 'Product', 'qubick-id' ),
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

		register_post_type( 'product', $args );

	}

    public static function register_meta_boxes() {
		$prefix = 'product_';
		$meta_boxes[] = array(
			'id'		=> 'detail',
			'title'		=> 'Detail',
			'post_types'=> 'product',
			'context'	=> 'normal',
			'priority'	=> 'high',
			'fields' => [
                [
                    'type' 			   => 'single_image',
                    'name' => esc_html__( 'Image Produk', 'online-generator' ),
                    'id'   => $prefix . 'image_product',
                ],
				[
	                'type' => 'text',
	                'name' => esc_html__( 'Product Name ENG', 'qubick' ),
	                'id'   => $prefix . 'product_name_eng',
	            ],  
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Product Name ID', 'qubick' ),
	                'id'   => $prefix . 'product_name_id',
	            ],   
                [
	                'type' => 'text',
	                'name' => esc_html__( 'Product Subname ENG', 'qubick' ),
	                'id'   => $prefix . 'product_subname_eng',
	            ],  
	            [
	                'type' => 'text',
	                'name' => esc_html__( 'Product Subname ID', 'qubick' ),
	                'id'   => $prefix . 'product_subname_id',
	            ],
	            [
	                'type' => 'textarea',
	                'name' => esc_html__( 'Description ENG', 'qubick' ),
	                'id'   => $prefix . 'description_eng',
	            ],
	            [
	                'type' => 'textarea',
	                'name' => esc_html__( 'Description ID', 'qubick' ),
	                'id'   => $prefix . 'description_id',
	            ],
				[
                    'type' 			   => 'single_image',
                    'name' => esc_html__( 'Image Function 1', 'online-generator' ),
                    'id'   => $prefix . 'image_function1',
                ],
				[
                    'type' 			   => 'single_image',
                    'name' => esc_html__( 'Image Function 2', 'online-generator' ),
                    'id'   => $prefix . 'image_function2',
                ],
				[
                    'type' 			   => 'single_image',
                    'name' => esc_html__( 'Image Function 3', 'online-generator' ),
                    'id'   => $prefix . 'image_function3',
                ],
				[
                    'type' 			   => 'single_image',
                    'name' => esc_html__( 'Image Function 4', 'online-generator' ),
                    'id'   => $prefix . 'image_function4',
                ],
			],
		);

		return $meta_boxes;
    }
}

Product_Post_Type::init();

?>