<?php get_header();

//Slider 1 Section
$home_slider1_image = rwmb_meta('home_slider1_image_slider');

//About Section
$home_about_description1 = rwmb_meta('home_about_description1_id');
$home_about_description2 = rwmb_meta('home_about_description2_id');
$home_about_description3 = rwmb_meta('home_about_description3_id');
$home_about_button = rwmb_meta('home_about_button_id');
$home_about_url_button = rwmb_meta('home_about_url_button');
$home_about_image1 = rwmb_meta('home_about_image1')['full_url'];
$home_about_image2 = rwmb_meta('home_about_image2')['full_url'];

//Service Section
$home_service_title = rwmb_meta('home_service_title_id');
$home_service_subtitle = rwmb_meta('home_service_subtitle_id');
$home_service_image = rwmb_meta('home_service_image')['full_url'];
$home_service_service = rwmb_meta('home_service_service');
$home_service_description1 = rwmb_meta('home_service_description1_id');
$home_service_description2 = rwmb_meta('home_service_description2_id');
$home_service_button = rwmb_meta('home_service_button_id');
$home_service_url_button = rwmb_meta('home_service_url_button');

//Slider 2 Section
$home_slider2_image = rwmb_meta('home_slider2_image_slider');

//Product Section
$home_product_title = rwmb_meta('home_product_title_id');
$home_product_subtitle1 = rwmb_meta('home_product_subtitle1_id');
$home_product_subtitle2 = rwmb_meta('home_product_subtitle2_id');
$home_product_button = rwmb_meta('home_product_button_id');
$home_product_url_button = rwmb_meta('home_product_url_button');

//Caption Section
$home_caption_caption1 = rwmb_meta('home_caption_caption1_id');
$home_caption_caption2 = rwmb_meta('home_caption_caption2_id');
$home_caption_caption3 = rwmb_meta('home_caption_caption3_id');
$home_caption_author = rwmb_meta('home_caption_author');
$home_caption_image = rwmb_meta('home_caption_image_background')['full_url'];

//Client Section
$home_client_title = rwmb_meta('home_client_title_id');
$home_client_subtitle = rwmb_meta('home_client_subtitle_id');

$index_service_atas = 'service_atas_id';
$index_service_bawah = 'service_bawah_id';

$lang = '_id';
$prefix_product = 'product_';
$prefix_client = 'client_';

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $index_service = 'service_eng';
        $lang = '_eng';

        //About Section
        $home_about_description1 = rwmb_meta('home_about_description1_eng');
        $home_about_description2 = rwmb_meta('home_about_description2_eng');
        $home_about_description3 = rwmb_meta('home_about_description3_eng');
        $home_about_button = rwmb_meta('home_about_button_eng');

        //Service Section
        $home_service_title = rwmb_meta('home_service_title_eng');
        $home_service_subtitle = rwmb_meta('home_service_subtitle_eng');
        $home_service_description1 = rwmb_meta('home_service_description1_eng');
        $home_service_description2 = rwmb_meta('home_service_description2_eng');
        $home_service_button = rwmb_meta('home_service_button_eng');

        //Product Section
        $home_product_title1 = rwmb_meta('home_product_title1_eng');
        $home_product_subtitle1 = rwmb_meta('home_product_subtitle1_eng');
        $home_product_title2 = rwmb_meta('home_product_title2_eng');
        $home_product_subtitle2 = rwmb_meta('home_product_subtitle2_eng');
        $home_product_button = rwmb_meta('home_product_button_eng');

        //Caption Section
        $home_caption_caption1 = rwmb_meta('home_caption_caption1_eng');
        $home_caption_caption2 = rwmb_meta('home_caption_caption2_eng');
        $home_caption_caption3 = rwmb_meta('home_caption_caption3_eng');

        //Client Section
        $home_client_title = rwmb_meta('home_client_title_eng');
        $home_client_subtitle = rwmb_meta('home_client_subtitle_eng');
    }
}

?>

<!-- SECTION START -->
<section class="home">
    <div class="container-fluid px-0">
        <div class="home-slider swiper-container">
            <div class="swiper-wrapper">

                <?php foreach ( $home_slider1_image as $value ) : ?>
                    <div class="swiper-slide pointer" style="background:linear-gradient(rgba(var(--color-black-rgb), 0.5), rgba(var(--color-black-rgb), 0.5)), url(<?= $value['full_url'];?>);">
                        <div class="home-text d-flex align-items-center">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-5">
                                    <h1 class="font-md"><?= $value['caption']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php endforeach ?>
                   
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-4 col-md-10 col-sm-10">
                <div class="home-img-wrapper parallax mb-5" style=" background-image: url(<?= $home_about_image1; ?>);"></div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-md-1 col-sm-1 mobile"></div>
            <div class="col-lg-5 col-md-10 col-sm-10 d-flex align-items-center" data-aos="fade-up">
                <p class="color-secondary">
                    <?= $home_about_description1; ?><br><br>
                    <?= $home_about_description2; ?>
                </p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-6 col-md-5 col-sm-5 d-flex align-items-center">
                <div>
                    <p class="color-secondary" data-aos="fade-up">
                        <?= $home_about_description3; ?>
                    </p>
                    <div class="my-5" data-aos="fade-up">
                        <a href="<?= $home_about_url_button; ?>" class="btn btn-primary-dark text-uppercase"><?= $home_about_button; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 "></div>
            <div class="col-lg-3 col-md-4 col-sm-4">
                <div class="square-wrapper">
                    <div class="square-img-wrapper parallax mb-1" style="background-image: url(<?= $home_about_image2;?>);"><div class="square-content-img h1">AA</div></div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>

<section class="layanan">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-4 col-md-7 col-sm-7" data-aos="fade-up">
                <p class="font-xs color-secondary my-0 text-uppercase"><?= $home_service_title; ?></p>
                <h1 class="font-sm color-primary-dark"><?= $home_service_subtitle; ?></h1>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 up-8 desktop">
                <div class="square-wrapper" data-aos="zoom-in">
                    <img src="<?= $home_service_image;?>" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-5 col-md-1 col-sm-1"></div>
            <div class="col-lg-6 col-md-10 col-sm-10">
                <div class="d-flex justify-content-between">

                    <?php foreach ( $home_service_service as $value ) : ?>
                        <h4 class="font-xs color-primary-dark"><?= $value['number']; ?></h4>
                         <h4 class="font-xs color-primary-dark"><?= $value[$index_service_atas]; ?> <br><?= $value[$index_service_bawah]; ?></h4>
                    <?php endforeach ?>

                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
        <div class="row my-5" data-aos="fade-up">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-6 col-md-10 col-sm-10">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <p class="color-secondary">
                            <?= $home_service_description1; ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <p class="color-secondary">
                            <?= $home_service_description2; ?>
                        </p>
                    </div>
                    <div class="my-6 btn-layanan" data-aos="fade-up">
                        <a href="<?= $home_service_url_button; ?>" class="btn btn-primary-dark text-uppercase"><?= $home_service_button; ?></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-1 col-sm-1 mobile"></div>
        </div>
    </div>
</section>

<section class="home-bridge">
    <div class="container-fluid px-0">
        <div class="home-bridge-slider swiper">
            <div class="swiper-wrapper">

                <?php foreach ( $home_slider2_image as $value ) : ?>
                    <div class="swiper-slide" style="background-image: url(<?= $value['full_url']; ?>);"></div>
                <?php endforeach ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="home-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-sm-2 col-xs-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-11" data-aos="fade-up">
                <p class="font-xs color-secondary my-0 text-uppercase"><?= $home_product_title; ?></p>
                <h1 class="font-sm color-primary-dark text-sm-start my-0"><?= $home_product_subtitle1; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9" data-aos="fade-up">
                <h1 class="font-sm color-primary-dark text-sm-end "><?= $home_product_subtitle2; ?></h1>
            </div>
        </div>
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <div class="row mb-5">
                    
                    <?php 
                    $i = 0;
        
                    $args = array( 
                        'posts_per_page'        => '4',
                        'post_type'             => 'product',
                        'paged' => '1'
                    );
        
                    $query = new WP_Query($args);
        
                    foreach($query->posts as $post_item){
                        $post_id = $post_item->ID;
        
                        $product_image = get_post_meta($post_id, $prefix_product . 'image_product',true);
                        $product_name = get_post_meta($post_id, $prefix_product . 'product_name' .$lang,true);
                        $product_subname = get_post_meta($post_id, $prefix_product . 'product_subname' .$lang,true);
                        

                        if($i % 2 == 0) {
                            echo '
                            <div class="col-lg-3 col-md-5 col-sm-5 col-xs-6 mb-2">
                                <div class="home-product-img">
                                    <img src="'.wp_get_attachment_image_url($product_image, 'large').'">
                                </div>
                                <div class="home-product-title"><h6 class="my-1">'.$product_name.'</h6></div>
                                <div class="home-product-subtitle"><p>'.$product_subname.'</p>
                                </div>
                            </div>
                            ';
                        } else {
                            echo '
                            <div class="col-lg-3 col-md-5 col-sm-5 col-xs-6 mb-2">
                                <div class="home-product-img">
                                    <img src="'.wp_get_attachment_image_url($product_image, 'large').'">
                                </div>
                                <div class="home-product-title"><h6 class="my-1">'.$product_name.'</h6></div>
                                <div class="home-product-subtitle"><p>'.$product_subname.'</p>
                                </div>
                            </div>
                            ';
                        }
                        $i++;
                    } 
                    ?>
                </div>
                <div class="text-center" data-aos="fade-up">
                    <a href="<?= $home_product_url_button; ?>" class="btn btn-primary-dark text-uppercase"><?= $home_product_button; ?></a>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>

<section class="d-flex align-items-center home-caption" style="background:linear-gradient(rgba(var(--color-primary-rgb), 0.8), rgba(var(--color-primary-rgb), 0.8)), url(<?= $home_caption_image;?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-1"></div>
            <div class="col-lg-8 col-md-10 col-sm-10">
                <h3 class="caption-title1" data-aos="fade-up"><?= $home_caption_caption1; ?></h3>
                <h3 class="caption-title2" data-aos="fade-up"><?= $home_caption_caption2; ?></h3>
                <h3 class="caption-title3" data-aos="fade-up"><?= $home_caption_caption3; ?></h3>
                <p class="caption-writer" data-aos="fade-up"><?= $home_caption_author; ?></p>
            </div>
            <div class="col-lg-2 col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>

<section class="home-klien">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-4 col-md-10 col-sm-10" data-aos="fade-up">
                <div class="section-header klien-section-header">
                    <h2><?= $home_client_title; ?></h2>
                </div>
                <div class="klien-header-text">
                    <h1><?= $home_client_subtitle; ?></h1>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-md-1 col-sm-1 col-xs-1 mobile"></div>
            <div class="col-lg-5 col-md-10 col-sm-10 col-xs-10">
                <div class="row">

                    <?php
                        $args = array( 
                            'post_type'             => 'client',
                        );

                        $query = new WP_Query($args);
                        $i = 1;
                        foreach($query->posts as $post_item){
                            $post_id = $post_item->ID;

                            $image = get_post_meta($post_id, $prefix_client . 'image_client',true);
                            
                            if($i % 2 == 0 ) {
                                echo '<div class="col-lg-2 col-md-2 col-sm-2 desktop"></div>';
                            }

                            echo '
                                
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="klien-content" data-aos="fade-up">
                                            <img src="'.wp_get_attachment_image_url($image, 'large').'" class="img-fluid klien-img">
                                        </div>
                                </div>
                            ';

                            if($i % 2 != 0 ) {
                                echo '<div class="col-md-2 col-sm-2 col-xs-1 mobile"></div>';
                            }

                            $i++;
                        }

                    ?>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<?php get_footer() ?>