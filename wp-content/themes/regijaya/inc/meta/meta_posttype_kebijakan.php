<?php 

add_filter( 'rwmb_meta_boxes', 'kebijakan_register_meta_boxes' );
function kebijakan_register_meta_boxes( $meta_boxes ) {
    $prefix = 'kebijakan_';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Kebijakan Mutu Section', 'online-generator' ),
        'id'      => 'kebijakan_section',
        'context' => 'normal',
        'post_types' => ['page'],
        'autosave'   => true,
        'fields'  => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Title ID', 'online-generator' ),
                'id'   => $prefix . 'title_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title ENG', 'online-generator' ),
                'id'   => $prefix . 'title_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description1 ID', 'online-generator' ),
                'id'   => $prefix . 'description1_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description1 ENG', 'online-generator' ),
                'id'   => $prefix . 'description1_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description2 ID', 'online-generator' ),
                'id'   => $prefix . 'description2_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description2 ENG', 'online-generator' ),
                'id'   => $prefix . 'description2_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description3 ID', 'online-generator' ),
                'id'   => $prefix . 'description3_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description3 ENG', 'online-generator' ),
                'id'   => $prefix . 'description3_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description4 ID', 'online-generator' ),
                'id'   => $prefix . 'description4_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description4 ENG', 'online-generator' ),
                'id'   => $prefix . 'description4_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description5 ID', 'online-generator' ),
                'id'   => $prefix . 'description5_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description5 ENG', 'online-generator' ),
                'id'   => $prefix . 'description5_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description6 ID', 'online-generator' ),
                'id'   => $prefix . 'description6_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description6 ENG', 'online-generator' ),
                'id'   => $prefix . 'description6_eng',
            ],
            [
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Image', 'online-generator' ),
				'id'               => $prefix . 'image',
			],
        ],
    ];

    return $meta_boxes;
}

?>