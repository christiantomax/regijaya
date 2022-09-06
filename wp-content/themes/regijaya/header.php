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

            <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">

                <img src="<?= get_template_directory_uri();?>/assets/img/logo-full.png">

            </a>

            <?php if($post_slug == "home" || $post_slug == "klien") { ?>

            <nav id="navbar" class="navbar light">

                <ul>

                    <li><a class="light-mode <?php if($post_slug == "about")  echo "active"; ?>" href="about.html">Tentang Kami</a></li>

                    <li><a class="light-mode <?php if($post_slug == "service")  echo "active"; ?>" href="ourservices.html">Layanan</a></li>

                    <li><a class="light-mode <?php if($post_slug == "produk")  echo "active"; ?>" href="product.html">Produk</a></li>

                    <li><a class="light-mode <?php if($post_slug == "klien")  echo "active"; ?>" href="clients.html">Klien</a></li>

                    <li><a class="light-mode <?php if($post_slug == "sertifikat")  echo "active"; ?>" href="certificate.html">Setifikat & Penghargaan</a></li>

                    <li><a class="light-mode <?php if($post_slug == "kontak")  echo "active"; ?>" href="contact.html">Kontak</a></li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle d-none"></i>

            </nav>



            <?php } else {?>

            <nav id="navbar" class="navbar dark">

                <ul>

                    <li><a class="dark-mode <?php if($post_slug == "about")  echo "active"; ?>" href="aout.html">Tentang Kami</a></li>

                    <li><a class="dark-mode <?php if($post_slug == "service")  echo "active"; ?>" href="ourservices.html">Layanan</a></li>

                    <li><a class="dark-mode <?php if($post_slug == "produk")  echo "active"; ?>" href="product.html">Produk</a></li>

                    <li><a class="dark-mode <?php if($post_slug == "klien")  echo "active"; ?>" href="clients.html">Klien</a></li>

                    <li><a class="dark-mode <?php if($post_slug == "sertifikat")  echo "active"; ?>" href="certificate.html">Setifikat & Penghargaan</a></li>

                    <li><a class="dark-mode <?php if($post_slug == "kontak")  echo "active"; ?>" href="contact.html">Kontak</a></li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle d-none"></i>

            </nav>

            <?php }?>

        </div>

    </header>

    <!-- HEADER END -->  

