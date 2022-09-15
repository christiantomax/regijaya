<?php
    global $post;
    $post_slug = $post->post_name;
?>

<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Meta -->
    <meta charset="utf-8">
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
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <?php if($post_slug == "home" || $post_slug == "klien") { ?>
                <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                    <img src="<?= get_template_directory_uri();?>/assets/img/logo-full.png">
                </a>
                <nav id="navbar" class="navbar light">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'regijaya_header',
                            'add_li_class' => 'light-mode',
                        )
                    );
                ?>
                    <i class="bi bi-grid-3x3-gap-fill mobile-nav-toggle d-none"></i> 
                </nav>

            <?php } else {?>
                <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                    <img src="<?= get_template_directory_uri();?>/assets/img/logo-full.png">
                </a>
                <nav id="navbar" class="navbar dark">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'regijaya_header',
                                'add_li_class' => 'dark-mode',
                            )
                        );
                    ?>
                    <i class="bi bi-grid-3x3-gap-fill mobile-nav-toggle d-none"></i> 
                </nav>
            <?php }?>
                
        </div>
    </header>
    <!-- HEADER END -->  
