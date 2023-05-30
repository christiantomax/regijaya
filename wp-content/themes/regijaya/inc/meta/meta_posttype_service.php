<?php

//Service Home Section
add_filter( 'rwmb_meta_boxes', 'service__register_meta_boxes' );

function service__register_meta_boxes( $meta_boxes ) {
    $prefix = 'service_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Service  Section', 'online-generator' ),
        'id'         => 'service_section',
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
                'type' => 'textarea',
                'name' => esc_html__( 'Description ID', 'online-generator' ),
                'id'   => $prefix . 'description_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description ENG', 'online-generator' ),
                'id'   => $prefix . 'description_eng',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
        ],
    ];

    return $meta_boxes;
}

//Service1 Section
add_filter( 'rwmb_meta_boxes', 'service1__register_meta_boxes' );

function service1__register_meta_boxes( $meta_boxes ) {
    $prefix = 'service1_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Service1  Section', 'online-generator' ),
        'id'         => 'service1_section',
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
                'type' => 'textarea',
                'name' => esc_html__( 'Description ID', 'online-generator' ),
                'id'   => $prefix . 'description_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description ENG', 'online-generator' ),
                'id'   => $prefix . 'description_eng',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
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
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Service', 'online-generator' ),
                'id'      => $prefix . 'service_detail',
                'options' => [
                    'title_id'  => 'Service Title ID',
                    'title_eng' => 'Service Title ENG',
                    'desc_id'  => 'Service Description ID',
                    'desc_eng' => 'Service Description ENG',
                ],
                'clone'   => true,
            ],
        ],
    ];

    return $meta_boxes;
}

//Service1 Section
add_filter( 'rwmb_meta_boxes', 'service2__register_meta_boxes' );

function service2__register_meta_boxes( $meta_boxes ) {
    $prefix = 'service2_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Service2  Section', 'online-generator' ),
        'id'         => 'service2_section',
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
                'type' => 'textarea',
                'name' => esc_html__( 'Description ID', 'online-generator' ),
                'id'   => $prefix . 'description_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description ENG', 'online-generator' ),
                'id'   => $prefix . 'description_eng',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
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
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Service', 'online-generator' ),
                'id'      => $prefix . 'service_detail',
                'options' => [
                    'title_id'  => 'Service Title ID',
                    'title_eng' => 'Service Title ENG',
                    'desc_id'  => 'Service Description ID',
                    'desc_eng' => 'Service Description ENG',
                ],
                'clone'   => true,
            ],
        ],
    ];

    return $meta_boxes;
}

?>