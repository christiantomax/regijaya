<?php

	// function meta_admin( $meta_boxes ) {
	//     $prefix = 'qubick';
	//     $post_id = $_GET['post'];
	//     $slug = basename(get_permalink($post_id));

	//     if ($post_id == get_option('page_on_front')) {
	//     	return meta_admin_home($prefix);
	//     }


	    
	//     return false;

	// }


	// function meta_admin_home($prefix){

	// 	$meta_boxes[] = [
	//         'title'      => esc_html__( 'Bebe Studio Field', 'english' ),
	//         'id'         => 'home_admin',
	//         'post_types' => ['page'],
	//         'context'    => 'after_title',
	//         'autosave'   => true,
	//         'fields'     => [
	//             [
	//                 'type' 			   => 'single_image',
	//                 'name'             => esc_html__( 'Hover Image for "Young & Dynamic"', 'english' ),
	//                 'id'               => $prefix . 'hover_image_hero_1',
	//             ],
	//             [
	//                 'type'             => 'image_advanced',
	//                 'name'             => esc_html__( 'Hover Image for "Creative Studio"', 'english' ),
	//                 'id'               => $prefix . 'hover_image_hero_2',
	//                 'max_file_uploads' => 1,
	//                 'force_delete'     => true,
	//             ],
	//         ],
	//     ];

	//     return $meta_boxes;

	// }

	// add_filter( 'rwmb_meta_boxes', 'meta_admin' );

?>