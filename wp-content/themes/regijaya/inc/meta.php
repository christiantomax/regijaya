<?php
	global $post;

	// METABOX GENERATE - START
	require_once get_template_directory().'/inc/meta/meta_posttype_header_footer.php';
	require_once get_template_directory().'/inc/meta/meta_posttype_home.php';
	require_once get_template_directory().'/inc/meta/meta_posttype_about_us.php';
	require_once get_template_directory().'/inc/meta/meta_posttype_klien.php';
	require_once get_template_directory().'/inc/meta/meta_posttype_contact_us.php';
	require_once get_template_directory().'/inc/meta/meta_posttype_kebijakan.php';
	// METABOX GENERATE - END

	// METABOX FILTER - START
	add_filter( 'rwmb_meta_boxes',function ( $meta_boxes ) {

		foreach ($meta_boxes as $k => $meta_box) {
			//Header Footer
			if( $meta_box['id'] === 'header_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'header-footer') {
						unset( $meta_boxes[$k] );
						echo $meta_boxes[$k];
					}
				}
			}
			if( $meta_box['id'] === 'footer_top_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'header-footer') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'footer_bottom_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'header-footer') {
						unset( $meta_boxes[$k] );
					}
				}
			}

			//Home
			if( $meta_box['id'] === 'home_slider1_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'home_about_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'home_service_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'home_slider2_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'home_product_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'home_caption_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'home_client_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'home') {
						unset( $meta_boxes[$k] );
					}
				}
			}

			//About Us
			if( $meta_box['id'] === 'about_us_about_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'about_us_visi_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'about_us_misi_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'about_us_prioritas_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'about_us_pekerja_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'about_us_proyek_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			if( $meta_box['id'] === 'about_us_sertifikat_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'about') {
						unset( $meta_boxes[$k] );
					}
				}
			}

			//Client
			if( $meta_box['id'] === 'klien_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'klien') {
						unset( $meta_boxes[$k] );
					}
				}
			}

			//Contact Us
			if( $meta_box['id'] === 'contact_us_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'kontak') {
						unset( $meta_boxes[$k] );
					}
				}
			}

			//Kebijakan
			if( $meta_box['id'] === 'kebijakan_section' ) {
				if(isset($_GET['post'])) {
					if (strtolower(get_the_title($_GET['post'])) != 'kebijakan') {
						unset( $meta_boxes[$k] );
					}
				}
			}
			

		}
		return $meta_boxes;
	}) ;
	// METABOX FILTER - END

?>