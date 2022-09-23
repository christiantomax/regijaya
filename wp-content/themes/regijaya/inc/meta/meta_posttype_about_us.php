<?php

// About Section
add_filter( 'rwmb_meta_boxes', 'about_us_about_register_meta_boxes' );

function about_us_about_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_about_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us About Section', 'online-generator' ),
        'id'         => 'about_us_about_section',
        'post_types' => ['page'],
        'context'    => 'normal',
        'autosave'   => true,
        'fields'     => [
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
                'name' => esc_html__( 'Title2 ID', 'online-generator' ),
                'id'   => $prefix . 'title2_id',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Title2 ENG', 'online-generator' ),
                'id'   => $prefix . 'title2_eng',
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
        ],
    ];

    return $meta_boxes;
}

//Visi Section
add_filter( 'rwmb_meta_boxes', 'about_us_visi_register_meta_boxes' );

function about_us_visi_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_visi_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us Visi Section', 'online-generator' ),
        'id'         => 'about_us_visi_section',
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
        ],
    ];

    return $meta_boxes;
}

//Misi Section
add_filter( 'rwmb_meta_boxes', 'about_us_misi_register_meta_boxes' );

function about_us_misi_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_misi_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us Misi Section', 'online-generator' ),
        'id'         => 'about_us_misi_section',
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
                'type'    => 'fieldset_text',
                'name'    => esc_html__( 'Misi', 'online-generator' ),
                'id'      => $prefix . 'misi',
                'options' => [
                    'number'  => 'Number',
                    'misi_id'  => 'Misi ID',
                    'misi_eng' => 'Misi ENG',
                    'description_id'  => 'Description ID',
                    'description_eng' => 'Description ENG',
                ],
                'clone'   => true,
            ],
            [
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
        ],
    ];

    return $meta_boxes;
}

//Prioritas Section
add_filter( 'rwmb_meta_boxes', 'about_us_prioritas_register_meta_boxes' );

function about_us_prioritas_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_prioritas_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us Prioritas Section', 'online-generator' ),
        'id'         => 'about_us_prioritas_section',
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
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
        ],
    ];

    return $meta_boxes;
}

//Pekerja Section
add_filter( 'rwmb_meta_boxes', 'about_us_pekerja_register_meta_boxes' );

function about_us_pekerja_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_pekerja_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us Pekerja Section', 'online-generator' ),
        'id'         => 'about_us_pekerja_section',
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
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
        ],
    ];

    return $meta_boxes;
}

//Proyek Section
add_filter( 'rwmb_meta_boxes', 'about_us_proyek_register_meta_boxes' );

function about_us_proyek_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_proyek_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us Proyek Section', 'online-generator' ),
        'id'         => 'about_us_proyek_section',
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
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
        ],
    ];

    return $meta_boxes;
}

//Sertifikat Section
add_filter( 'rwmb_meta_boxes', 'about_us_sertifikat_register_meta_boxes' );

function about_us_sertifikat_register_meta_boxes( $meta_boxes ) {
    $prefix = 'about_us_sertifikat_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'About Us Setifikat Penghargaan Section', 'online-generator' ),
        'id'         => 'about_us_sertifikat_section',
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
                'type' 			   => 'single_image',
                'name' => esc_html__( 'Image', 'online-generator' ),
                'id'   => $prefix . 'image',
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Image Sertifikat Penghargaan', 'online-generator' ),
                'id'               => $prefix . 'image_sertifikat_penghargaan',
                'max_file_uploads' => 4,
            ],
        ],
    ];

    return $meta_boxes;
}

?>