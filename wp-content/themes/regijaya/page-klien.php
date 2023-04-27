<?php get_header();

$lang = '_id';
$prefix = 'client_';

$klien_title = rwmb_meta('klien_title_id');
$klien_subtitle = rwmb_meta('klien_subtitle_id');
$klien_image = rwmb_meta('klien_image')['full_url'];

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $lang = '_eng';
        $klien_title = rwmb_meta('klien_title_eng');
        $klien_subtitle = rwmb_meta('klien_subtitle_eng');
    }
}

?>

<!-- SECTION START -->
<section class="klien-header" style="background:linear-gradient(rgba(var(--color-primary-dark-rgb), 0.5), rgba(var(--color-primary-dark-rgb), 0.5)), url(<?= $klien_image; ?>)">
    <div class="container-fluid  px-0"></div>
</section>

<section class="py-5">
    <div class="container-fluid" id="klien-header-text-mobile">
        <div class="row mobile">
            <div class="col-md-1 col-sm-1"></div>
            <div class="col-md-10 col-sm-1">
                <div class="section-header">
                    <h2><?= $klien_title; ?></h2>
                </div>
                <div class="klien-header-container">
                    <h1 id="klien-header-text" class="klien-header-text"><?= $klien_subtitle; ?></h1>
                </div>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-10 desktop">
                <div class="section-header">
                    <h2><?= $klien_title; ?></h2>
                </div>
                <div class="klien-header-container">
                    <h1 id="klien-header-text" class="klien-header-text"><?= $klien_subtitle; ?></h1>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2"></div>
            <div class="col-lg-5 col-md-8">
                <div class="row">

                    <?php

                        $args = array( 
                            'post_type'             => 'client',
                        );

                        $query = new WP_Query($args);
                        $i = 1;
                        foreach($query->posts as $post_item){
                            $post_id = $post_item->ID;

                            $image = get_post_meta($post_id, $prefix . 'image_client',true);
                            $title = get_post_meta($post_id, $prefix . 'title'.$lang,true);
                            $subtitle = get_post_meta($post_id, $prefix . 'subtitle'.$lang,true);
                            
                            if($i % 2 == 0 ) {
                                echo ' <div class="col-2"></div>';
                            }

                            echo '
                                <div class="col-5">
                                    <div class="klien-content">
                                        <img src="'.wp_get_attachment_image_url($image, 'large').'" class="img-fluid klien-img">
                                        <p class="klien-content-header">'.$title.'</p>
                                        <p class="klien-content-footer">'.$subtitle.'</p>
                                    </div>
                                </div>
                            ';

                            $i++;
                        }

                    ?>

                </div>
            </div>
            <div class="col-md-2 col-sm-2 mobile"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<?php get_footer() ?>