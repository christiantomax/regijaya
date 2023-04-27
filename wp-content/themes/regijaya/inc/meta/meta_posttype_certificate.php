<?php
add_filter( 'rwmb_meta_boxes', 'certificate_register_meta_boxes' );

function certificate_register_meta_boxes( $meta_boxes ) {
    $prefix = 'certificate_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Certificate Section', 'online-generator' ),
        'id'         => 'certificate_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
            [
				'type' 			   => 'single_image',
				'name'             => esc_html__( 'Header Image', 'online-generator' ),
				'id'               => $prefix . 'header_image',
			],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title1 ID', 'online-generator' ),
                'id'   => $prefix . 'title1_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title1 ENG', 'online-generator' ),
                'id'   => $prefix . 'title1_eng',
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
                'name' => esc_html__( 'Title2 ID', 'online-generator' ),
                'id'   => $prefix . 'title2_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title2 ENG', 'online-generator' ),
                'id'   => $prefix . 'title2_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title3 ID', 'online-generator' ),
                'id'   => $prefix . 'title3_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title3 ENG', 'online-generator' ),
                'id'   => $prefix . 'title3_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title4 ID', 'online-generator' ),
                'id'   => $prefix . 'title4_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title4 ENG', 'online-generator' ),
                'id'   => $prefix . 'title4_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title Sertifikat ID', 'online-generator' ),
                'id'   => $prefix . 'title_sertifikat_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title Sertifikat ENG', 'online-generator' ),
                'id'   => $prefix . 'title_sertifikat_eng',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title Penghargaan ID', 'online-generator' ),
                'id'   => $prefix . 'title_penghargaan_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title Penghargaan ENG', 'online-generator' ),
                'id'   => $prefix . 'title_penghargaan_eng',
            ],
        ],
    ];

    return $meta_boxes;
}
?>