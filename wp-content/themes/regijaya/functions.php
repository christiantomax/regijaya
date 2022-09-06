<?php

//REGIJAYA SETUP - START
if(! function_exists( 'regijaya_setup' )) : 

    function regijaya_setup() {

        // WORDPRESS CORE - START
        function regijaya_theme_support() {

            //Adds dynamic title tag support
            add_theme_support('title-tag');
            //Adds dynamic logo support
            add_theme_support('custom-logo');
            //Adds feature image at post -> resize at settings > media
            add_theme_support('post-thumbnails');

        }

        add_action('after_setup_theme', 'regijaya_theme_support');
        // WORDPRESS CORE - END

        // REGISTER STYLES - START
        function regijaya_register_styles() {

            $version = wp_get_theme() -> get('Version');

            wp_enqueue_style('regijaya-bootstrap',  get_template_directory_uri().'/inc/cdn/bootstrap/css/bootstrap.min.css', array(), '5.1.3', 'all');
            wp_enqueue_style('regijaya-bootstrap-icon', get_template_directory_uri().'/inc/cdn/bootstrap-icons/bootstrap-icons.css', array(), $version, 'all');
            wp_enqueue_style('regijaya-aos', get_template_directory_uri().'/inc/cdn/aos/aos.css', array(), $version, 'all');
            wp_enqueue_style('regijaya-swiper', get_template_directory_uri().'/inc/cdn/swiper/swiper-bundle.min.css', array(), '8.3.1', 'all');
            wp_enqueue_style('regijaya-variables', get_template_directory_uri()."/assets/css/variables.css", array(), $version, 'all');
            wp_enqueue_style('regijaya-style', get_template_directory_uri()."/assets/css/main.css", array(), $version, 'all');
        
        }

        add_action('wp_enqueue_scripts', 'regijaya_register_styles');
        // REGISTER STYLES - END

        // REGISTER SCRIPTS - START
        function regijaya_register_script() {
            $version = wp_get_theme() -> get('Version');

            wp_enqueue_script('regijaya-jquery', get_template_directory_uri().'/inc/cdn/jquery/jquery-3.6.0.js', array(), '3.6.0', false);
            wp_enqueue_script('regijaya-bootstrap-js', get_template_directory_uri().'/inc/cdn/bootstrap/js/bootstrap.bundle.min.js', array(), '5.1.3', false);
            wp_enqueue_script('regijaya-aos', get_template_directory_uri().'/inc/cdn/aos/aos.js', array(), $version, false);
            wp_enqueue_script('regijaya-swiper', get_template_directory_uri().'/inc/cdn/swiper/swiper-bundle.min.js', array(), '8.3.1', false);
            wp_enqueue_script('regijaya-js', get_template_directory_uri().'/assets/js/main.js', array(), '5.1.3', false);
        
        }

        add_action('wp_enqueue_scripts', 'regijaya_register_script');
        // REGISTER SCRIPTS - END

        // REGISTER NAV - START
        // REGISTER NAV - END

        //GUTTENBERG - START
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', ) );
        add_theme_support( 'automatic-feed-links' );
        add_filter('use_block_editor_for_post', '__return_false', 10); // Remove Guttenberg

        add_action('admin_init', 'remove_editor');
        function remove_editor() {
                remove_post_type_support( 'page', 'editor' );
        }
        //GUTTENBERG - END

        require_once get_template_directory().'/inc/meta.php';
        
    }
endif;
    //REGIJAYA SETUP - END

add_action( 'after_setup_theme', 'regijaya_setup' );


?>