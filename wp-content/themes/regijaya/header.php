<?php

    if (isset($_POST['options'])) {
        $_SESSION['lang'] = $_POST['options'];
    }

    if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];
    else $_SESSION['lang'] = 'id';

    global $post;

    $post_slug = $post->post_name;

    //local
    // $header_footer_post_id = 10;

    //cloud
    $header_footer_post_id = 48;

    $header = 'regijaya_header_id';

    $_SESSION['mode'] = 'dark';

    $logo = wp_get_attachment_image_url(get_post_meta($header_footer_post_id,'header_logo_dark_theme', true));

    if($post_slug == "home" || $post_slug == "klien") {

        $_SESSION['mode'] = 'light';

        $logo = wp_get_attachment_image_url(get_post_meta($header_footer_post_id,'header_logo_light_theme', true));

    }

    if (isset($_SESSION['lang'])) {
        if($_SESSION['lang'] == 'eng'){
            $header = 'regijaya_header_eng';
        }
    }

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <!-- Meta -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Regi Jaya">

    <meta name="author" content="Qubick">    

    <link rel="shortcut icon" href="/wp-content/themes/regijaya/assets/images/logo.png"> 

    <!-- CSS -->

    <?php wp_head(); ?>

</head> 

<body>

    <!-- HEADER START -->

    <header id="header" class="header fixed-top">

        <div class="container-fluid d-flex align-items-center justify-content-between navbar-mobile">

            <a href="<?= get_home_url()?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">

                <img id="logo" src="<?= $logo; ?>">

            </a>

            <nav id="navbar" class="navbar <?= $_SESSION['mode']; ?>">

                <?php

                    wp_nav_menu(
                        array(
                            'theme_location' => $header,
                            'add_li_class' => $_SESSION['mode'].'-mode',
                        )

                    );

                ?>

                <i class="bi bi-grid-3x3-gap-fill mobile-nav-toggle d-none"></i> 

            </nav> 

        </div>

    </header>

    <!-- HEADER END -->
