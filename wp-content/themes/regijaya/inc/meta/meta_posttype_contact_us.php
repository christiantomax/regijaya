<?php
add_filter( 'rwmb_meta_boxes', 'contact_us_register_meta_boxes' );

function contact_us_register_meta_boxes( $meta_boxes ) {
    $prefix = 'contact_us_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Contact Us Section', 'online-generator' ),
        'id'         => 'contact_us_section',
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
                'type' => 'text',
                'name' => esc_html__( 'Subtitle1 ID', 'online-generator' ),
                'id'   => $prefix . 'subtitle1_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Subtitle1 ENG', 'online-generator' ),
                'id'   => $prefix . 'subtitle1_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Subtitle2 ID', 'online-generator' ),
                'id'   => $prefix . 'subtitle2_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Subtitle2 ENG', 'online-generator' ),
                'id'   => $prefix . 'subtitle2_eng',
            ],
            [
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Alamat', 'online-generator' ),
                'id'      => $prefix . 'alamat',
                'options' => [
                    'alamat_id'  => 'Alamat ID',
                    'alamat_eng' => 'Alamat ENG',
                ],
                'clone'   => true,
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Email', 'online-generator' ),
                'id'   => $prefix . 'email',
            ],
            [
                'type'    => 'text_list',
                'name'    => esc_html__( 'Telepon', 'online-generator' ),
                'id'      => $prefix . 'telepon',
                'clone' => true,
                'options' => [
                    '' => 'Telepon',
                ],
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button1 ID', 'online-generator' ),
                'id'   => $prefix . 'button1_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button1 ENG', 'online-generator' ),
                'id'   => $prefix . 'button1_eng',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Url Maps', 'online-generator' ),
                'id'   => $prefix . 'url_maps',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Image1', 'online-generator' ),
                'id'   => $prefix . 'image1',
            ],
            [
                'type' => 'single_image',
                'name' => esc_html__( 'Image2', 'online-generator' ),
                'id'   => $prefix . 'image2',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input1 ID', 'online-generator' ),
                'id'   => $prefix . 'input1_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input1 ENG', 'online-generator' ),
                'id'   => $prefix . 'input1_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input2 ID', 'online-generator' ),
                'id'   => $prefix . 'input2_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input2 ENG', 'online-generator' ),
                'id'   => $prefix . 'input2_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input3 ID', 'online-generator' ),
                'id'   => $prefix . 'input3_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input3 ENG', 'online-generator' ),
                'id'   => $prefix . 'input3_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input4 ID', 'online-generator' ),
                'id'   => $prefix . 'input4_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input4 ENG', 'online-generator' ),
                'id'   => $prefix . 'input4_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input5 ID', 'online-generator' ),
                'id'   => $prefix . 'input5_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Input5 ENG', 'online-generator' ),
                'id'   => $prefix . 'input5_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button Submit ID', 'online-generator' ),
                'id'   => $prefix . 'button_submit_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Button Submit ENG', 'online-generator' ),
                'id'   => $prefix . 'button_submit_eng',
            ],
        ],
    ];

    return $meta_boxes;
}
?>