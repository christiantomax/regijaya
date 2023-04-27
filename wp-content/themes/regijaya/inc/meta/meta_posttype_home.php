<?php

//Slider 1 Section
add_filter( 'rwmb_meta_boxes', 'home_slider1_register_meta_boxes' );

function home_slider1_register_meta_boxes( $meta_boxes ) {
    $prefix = 'home_slider1_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Home Slider1 Section', 'online-generator' ),
        'id'         => 'home_slider1_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Slider', 'online-generator' ),
                'id'               => $prefix . 'image_slider',
                'max_file_uploads' => 6,
            ],
        ],
    ];

    return $meta_boxes;
}

//About Section
add_filter( 'rwmb_meta_boxes', 'home_about_register_meta_boxes' );

function home_about_register_meta_boxes( $meta_boxes ) {
    $prefix = 'home_about_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Home About Section', 'online-generator' ),
        'id'         => 'home_about_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image1', 'online-generator' ),
                'id'   => $prefix . 'image1',
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
                'type' => 'text',
                'name' => esc_html__( 'Button ID', 'online-generator' ),
                'id'   => $prefix . 'button_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button ENG', 'online-generator' ),
                'id'   => $prefix . 'button_eng',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Url Button', 'online-generator' ),
                'id'   => $prefix . 'url_button',
            ],
            [
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image2', 'online-generator' ),
                'id'   => $prefix . 'image2',
            ],
        ],
    ];

    return $meta_boxes;
}

//Service Section
add_filter( 'rwmb_meta_boxes', 'home_service_register_meta_boxes' );

function home_service_register_meta_boxes( $meta_boxes ) {
    $prefix = 'home_service_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Home Service Section', 'online-generator' ),
        'id'         => 'home_service_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
            [
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Service', 'online-generator' ),
                'id'      => $prefix . 'service',
                'options' => [
                    'number'  => 'Number',
                    'service_atas_id'  => 'Service Name Atas ID',
                    'service_atas_eng' => 'Service Name Atas ENG',
                    'service_bawah_id'  => 'Service Name Bawah ID',
                    'service_bawah_eng' => 'Service Name Bawah ENG',
                ],
                'clone'   => true,
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
                'type' => 'text',
                'name' => esc_html__( 'Button ID', 'online-generator' ),
                'id'   => $prefix . 'button_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button ENG', 'online-generator' ),
                'id'   => $prefix . 'button_eng',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Url Button', 'online-generator' ),
                'id'   => $prefix . 'url_button',
            ],
        ],
    ];

    return $meta_boxes;
}

//Slider 2 Section
add_filter( 'rwmb_meta_boxes', 'home_slider2_register_meta_boxes' );

function home_slider2_register_meta_boxes( $meta_boxes ) {
    $prefix = 'home_slider2_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Home Slider2 Section', 'online-generator' ),
        'id'         => 'home_slider2_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Slider', 'online-generator' ),
                'id'               => $prefix . 'image_slider',
                'max_file_uploads' => 6,
            ],
        ],
    ];

    return $meta_boxes;
}

//Caption Section
add_filter( 'rwmb_meta_boxes', 'home_caption_register_meta_boxes' );

function home_caption_register_meta_boxes( $meta_boxes ) {
    $prefix = 'home_caption_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Home Caption Section', 'online-generator' ),
        'id'         => 'home_caption_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Caption1 ID', 'online-generator' ),
                'id'   => $prefix . 'caption1_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Caption1 ENG', 'online-generator' ),
                'id'   => $prefix . 'caption1_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Caption2 ID', 'online-generator' ),
                'id'   => $prefix . 'caption2_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Caption2 ENG', 'online-generator' ),
                'id'   => $prefix . 'caption2_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Caption3 ID', 'online-generator' ),
                'id'   => $prefix . 'caption3_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Caption3 ENG', 'online-generator' ),
                'id'   => $prefix . 'caption3_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Author', 'online-generator' ),
                'id'   => $prefix . 'author',
            ],
            [
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image Background', 'online-generator' ),
                'id'   => $prefix . 'image_background',
            ],
        ],
    ];

    return $meta_boxes;
}

?>