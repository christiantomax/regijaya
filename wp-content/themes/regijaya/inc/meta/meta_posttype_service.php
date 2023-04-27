<?php
add_filter( 'rwmb_meta_boxes', 'service_register_meta_boxes' );

function service_register_meta_boxes( $meta_boxes ) {
    $prefix = 'service_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Service Section', 'online-generator' ),
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
                'type' => 'text',
                'name' => esc_html__( 'Service1 Title ID', 'online-generator' ),
                'id'   => $prefix . 'service1_title_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service1 Title ENG', 'online-generator' ),
                'id'   => $prefix . 'service1_title_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service1 Description Kiri ID', 'online-generator' ),
                'id'   => $prefix . 'service1_desc_kiri_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service1 Description Kiri ENG', 'online-generator' ),
                'id'   => $prefix . 'service1_desc_kiri_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service1 Description Kanan ID', 'online-generator' ),
                'id'   => $prefix . 'service1_desc_kanan_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service1 Description Kanan ENG', 'online-generator' ),
                'id'   => $prefix . 'service1_desc_kanan_eng',
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Service1', 'online-generator' ),
                'id'               => $prefix . 'image_service1',
            ],
            [
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Subtitle Image Service1', 'online-generator' ),
                'id'      => $prefix . 'subtitle_img_service1',
                'options' => [
                    'subtitle_id'  => 'Subtitle ID',
                    'subtitle_eng' => 'Subtitle ENG',
                ],
                'clone'   => true,
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service2 Title ID', 'online-generator' ),
                'id'   => $prefix . 'service2_title_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service2 Title ENG', 'online-generator' ),
                'id'   => $prefix . 'service2_title_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service2 Description Kiri ID', 'online-generator' ),
                'id'   => $prefix . 'service2_desc_kiri_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service2 Description Kiri ENG', 'online-generator' ),
                'id'   => $prefix . 'service2_desc_kiri_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service2 Description Kanan ID', 'online-generator' ),
                'id'   => $prefix . 'service2_desc_kanan_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service2 Description Kanan ENG', 'online-generator' ),
                'id'   => $prefix . 'service2_desc_kanan_eng',
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Service2', 'online-generator' ),
                'id'               => $prefix . 'image_service2',
            ],
            [
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Subtitle Image Service2', 'online-generator' ),
                'id'      => $prefix . 'subtitle_img_service2',
                'options' => [
                    'subtitle_id'  => 'Subtitle ID',
                    'subtitle_eng' => 'Subtitle ENG',
                ],
                'clone'   => true,
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service3 Title ID', 'online-generator' ),
                'id'   => $prefix . 'service3_title_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service3 Title ENG', 'online-generator' ),
                'id'   => $prefix . 'service3_title_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service3 Description Kiri ID', 'online-generator' ),
                'id'   => $prefix . 'service3_desc_kiri_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service3 Description Kiri ENG', 'online-generator' ),
                'id'   => $prefix . 'service3_desc_kiri_eng',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service3 Description Kanan ID', 'online-generator' ),
                'id'   => $prefix . 'service3_desc_kanan_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service3 Description Kanan ENG', 'online-generator' ),
                'id'   => $prefix . 'service3_desc_kanan_eng',
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Service3', 'online-generator' ),
                'id'               => $prefix . 'image_service3',
            ],
            [
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Subtitle Image Service3', 'online-generator' ),
                'id'      => $prefix . 'subtitle_img_service3',
                'options' => [
                    'subtitle_id'  => 'Subtitle ID',
                    'subtitle_eng' => 'Subtitle ENG',
                ],
                'clone'   => true,
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service Footer ID', 'online-generator' ),
                'id'   => $prefix . 'service_footer_id',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Service Footer ENG', 'online-generator' ),
                'id'   => $prefix . 'service_footer_eng',
            ],
            
            [
                'type' => 'text',
                'name' => esc_html__( 'Service Button ID', 'online-generator' ),
                'id'   => $prefix . 'service_button_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service Button ENG', 'online-generator' ),
                'id'   => $prefix . 'service_button_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Service URL Button', 'online-generator' ),
                'id'   => $prefix . 'service_url_button',
            ],
        ],
    ];

    return $meta_boxes;
}
?>