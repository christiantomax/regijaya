<?php

//Header
add_filter( 'rwmb_meta_boxes', 'header_register_meta_boxes' );

function header_register_meta_boxes( $meta_boxes ) {
    $prefix = 'header_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Header', 'online-generator' ),
        'id'         => 'header_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
                'type' => 'single image',
                'name' => esc_html__( 'Logo Light Theme', 'online-generator' ),
                'id'   => $prefix . 'logo_light_theme',
            ],
            [
                'type' => 'single image',
                'name' => esc_html__( 'Logo Dark Theme', 'online-generator' ),
                'id'   => $prefix . 'logo_dark_theme',
            ],
        ],
    ];

    return $meta_boxes;
}

//Top Section
add_filter( 'rwmb_meta_boxes', 'footer_top_register_meta_boxes' );

function footer_top_register_meta_boxes( $meta_boxes ) {
    $prefix = 'footer_top_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Footer Top', 'online-generator' ),
        'id'         => 'footer_top_section',
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
                'name' => esc_html__( 'Button ID', 'online-generator' ),
                'id'   => $prefix . 'button_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button ENG', 'online-generator' ),
                'id'   => $prefix . 'button_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'URL Button', 'online-generator' ),
                'id'   => $prefix . 'url_button',
            ],
            [
                'type' => 'single image',
                'name' => esc_html__( 'Image Backgound', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
        ],
    ];

    return $meta_boxes;
}

//Bottom Section
add_filter( 'rwmb_meta_boxes', 'footer_bottom_register_meta_boxes' );

function footer_bottom_register_meta_boxes( $meta_boxes ) {
    $prefix = 'footer_bottom_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Footer Bottom', 'online-generator' ),
        'id'         => 'footer_bottom_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
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
                'type' => 'textarea',
                'name' => esc_html__( 'Contact Title ID', 'online-generator' ),
                'id'   => $prefix . 'contact_title_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Contact Title ENG', 'online-generator' ),
                'id'   => $prefix . 'contact_title_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Contact Description ID', 'online-generator' ),
                'id'   => $prefix . 'contact_description_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Contact Description ENG', 'online-generator' ),
                'id'   => $prefix . 'contact_description_eng',
            ],
        ],
    ];

    return $meta_boxes;
}

?>