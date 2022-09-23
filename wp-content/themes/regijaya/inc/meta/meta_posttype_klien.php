<?php
add_filter( 'rwmb_meta_boxes', 'klien_register_meta_boxes' );

function klien_register_meta_boxes( $meta_boxes ) {
    $prefix = 'klien_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Klien Section', 'online-generator' ),
        'id'         => 'klien_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Header Image', 'online-generator' ),
				'id'               => $prefix . 'image',
			],
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
                'type' => 'text',
                'name' => esc_html__( 'Subtitle ID', 'online-generator' ),
                'id'   => $prefix . 'subtitle_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Subtitle ENG', 'online-generator' ),
                'id'   => $prefix . 'subtitle_eng',
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Kiri', 'online-generator' ),
                'id'               => $prefix . 'image_kiri',
                'max_file_uploads' => 6,
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Kanan', 'online-generator' ),
                'id'               => $prefix . 'image_kanan',
                'max_file_uploads' => 6,
            ],
        ],
    ];

    return $meta_boxes;
}
?>