<?php
	session_start();
	if(isset($_SESSION['VERSION'])){
		$_SESSION['VERSION'] = $_SESSION['VERSION'] + 1;
	}else{
		$_SESSION['VERSION'] = 0;
	}
	//ACTIVE PLUGIN REQUIRED
	// require_once get_template_directory().'/inc/required-plugins.php';

	/**
	 * First, let's set the maximum content width based on the theme's design and stylesheet.
	 * This will limit the width of all uploaded images and embeds.
	 */
	// if ( ! isset( $content_width ) )
 //    $content_width = 800; /* pixels */
	
	if ( ! function_exists( 'qubick_setup' ) ) :
	
	function qubick_setup() {

		/**
	     * Make theme available for translation.
	     * Translations can be placed in the /languages/ directory.
	     */

	    // load_theme_textdomain( 'qubick', get_template_directory().'/languages' );

		// WORDPRESS CORE - START
		add_theme_support( 'custom-logo' );
		// WORDPRESS CORE - END



	    // REGISTER STYLES - START
	    function qubick_register_styles(){
	        $version = wp_get_theme()->get('Version');
	        wp_enqueue_style('qubick-style', get_template_directory_uri().'/assets/style/min-992px.css?v='.$_SESSION['VERSION'], array(), $version, 'all');
	        wp_enqueue_style('qubick-style-general', get_template_directory_uri().'/assets/style/general.css?v='.$_SESSION['VERSION'], array(), $version, 'all');
	        wp_enqueue_style('qubick-bootstrap', get_template_directory_uri().'/inc/cdn/bootstrap/css/bootstrap.min.css', array(), '5.1.3', 'all');
	        wp_enqueue_style('qubick-fontawesome',  get_template_directory_uri().'/inc/cdn/fontawesome/all.min.css', array(), '6.1.1', 'all');

	        wp_enqueue_style('qubick-slick', get_template_directory_uri().'/inc/cdn/slick/slick.css', array());
	        wp_enqueue_style('qubick-slick-theme', get_template_directory_uri().'/inc/cdn/slick/slick-theme.css', array());
	    }
	    
	    add_action('wp_enqueue_scripts', 'qubick_register_styles');
	    // REGISTER STYLES - END


		function add_new_menu_item( $nav, $args ) {
			return $nav;
		}


	    // REGISTER SCRIPTS - START
	    function qubick_register_scripts(){
	        wp_enqueue_script('qubick-ajax', get_template_directory_uri().'/inc/cdn/ajax/jquery.min.js', array(), '3.6.0', false);
	        wp_enqueue_script('qubick-jquery', get_template_directory_uri().'/inc/cdn/jquery/jquery-3.6.0.js', array(), '3.6.0', false);	
	        wp_enqueue_script('qubick-bootstrap-js', get_template_directory_uri().'/inc/cdn/bootstrap/js/bootstrap.bundle.min.js', array(), '5.1.3', false);
	        wp_enqueue_script('qubick-slick', get_template_directory_uri().'/inc/cdn/slick/slick.min.js', array(), false);
	    }
	    
	    add_action('wp_enqueue_scripts', 'qubick_register_scripts');
	    // REGISTER SCRIPTS - END





	    // REGISTER NAV - START
	    function elnura_nav(){
	        register_nav_menu('elnura', 'Theme Menu Top');
	    }

	    add_action('init', 'elnura_nav');
	    // REGISTER NAV - START



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
	endif; // qubick_setup
	add_action( 'after_setup_theme', 'qubick_setup' );


?>