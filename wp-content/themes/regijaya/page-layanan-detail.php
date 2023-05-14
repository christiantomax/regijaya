<?php get_header();

//Title
$service_title = rwmb_meta('service_detail_title_id');

//Service1
$service1_title = rwmb_meta('service_detail_service1_title_id');
$service1_desc_kiri = rwmb_meta('service_detail_service1_desc_kiri_id');
$service1_desc_kanan = rwmb_meta('service_detail_service1_desc_kanan_id');
$service1_image = rwmb_meta('service_detail_image_service1');
$service1_subtitle_array = rwmb_meta('service_detail_subtitle_img_service1');

//Service2
$service2_title = rwmb_meta('service_detail_service2_title_id');
$service2_desc_kiri = rwmb_meta('service_detail_service2_desc_kiri_id');
$service2_desc_kanan = rwmb_meta('service_detail_service2_desc_kanan_id');
$service2_image = rwmb_meta('service_detail_image_service2');
$service2_subtitle_array = rwmb_meta('service_detail_subtitle_img_service2');

//Service3
$service3_title = rwmb_meta('service_detail_service3_title_id');
$service3_desc_kiri = rwmb_meta('service_detail_service3_desc_kiri_id');
$service3_desc_kanan = rwmb_meta('service_detail_service3_desc_kanan_id');
$service3_image = rwmb_meta('service_detail_image_service3');
$service3_subtitle_array = rwmb_meta('service_detail_subtitle_img_service3');

// Footer
$service_footer = rwmb_meta('service_detail_service_footer_id');
$service_button = rwmb_meta('service_detail_service_button_id');
$service_url_button = rwmb_meta('service_detail_service_url_button');

$index_subtitle = 'subtitle_id';

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        //Title
        $service_title = rwmb_meta('service_detail_title_eng');

        //Service1
        $service1_title = rwmb_meta('service_detail_service1_title_eng');
        $service1_desc_kiri = rwmb_meta('service_detail_service1_desc_kiri_eng');
        $service1_desc_kanan = rwmb_meta('service_detail_service1_desc_kanan_eng');

        //Service2
        $service2_title = rwmb_meta('service_detail_service2_title_eng');
        $service2_desc_kiri = rwmb_meta('service_detail_service2_desc_kiri_eng');
        $service2_desc_kanan = rwmb_meta('service_detail_service2_desc_kanan_eng');

        //Service3
        $service3_title = rwmb_meta('service_detail_service3_title_eng');
        $service3_desc_kiri = rwmb_meta('service_detail_service3_desc_kiri_eng');
        $service3_desc_kanan = rwmb_meta('service_detail_service3_desc_kanan_eng');

        // Footer
        $service_footer = rwmb_meta('service_detail_service_footer_eng');
        $service_button = rwmb_meta('service_detail_service_button_eng');

        $index_subtitle = 'subtitle_eng';
    }
}

?>

<!-- SECTION START -->
<section class="my-5">
    <div class="container-fluid">
        <!-- Title Section -->
        <div class="row" data-aos="fade-up">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="section-header">
                    <h2><?= $service_title; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<!-- SECTION START -->
<section class="my-5">
    <div class="container-fluid">
        <!-- Layanan 1 Section -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row mt-4" data-aos="fade-up">
                    <div class="col-1"><p class="service-number">1</p></div>
                    <div class="col-11">
                        <h2 class="service-title"><?= $service1_title; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <p><?= $service1_desc_kiri; ?></p>
                            </div>
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <p><?= $service1_desc_kanan; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section data-aos="fade-up">
    <!-- Layanan 1 Swipper Section -->
    <div class="container-fluid service-slider-section">
        <div class="service-slider swiper-container">
            <div class="swiper service1-swipper">

                <div class="swiper-wrapper">
                    <?php $i=0; foreach ( $service1_image as $value ) : ?>
                        <div class="swiper-slide grab service-slide">
                            <div class="service-img-container">
                                <img src="<?= $value['full_url'];?>" class="service-img-fluid">
                            </div>
                            
                            <p class="service-subtitle-img mt-3"><?= $service1_subtitle_array[$i][$index_subtitle]?></p>
                        </div>
                    <?php $i++; endforeach ?>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section class="my-5">
    <div class="container-fluid">
        <!-- Layanan 2 Section -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row mt-4" data-aos="fade-up">
                    <div class="col-1"><p class="service-number">2</p></div>
                    <div class="col-11">
                        <h2 class="service-title"><?= $service2_title; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <p><?= $service2_desc_kiri; ?></p>
                            </div>
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <p><?= $service2_desc_kanan; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section data-aos="fade-up">
    <!-- Layanan 2 Swipper Section -->
    <div class="container-fluid service-slider-section">
        <div class="service-slider swiper-container">
            <div class="swiper service1-swipper">
                <div class="swiper-wrapper">
                    <?php $i=0; foreach ( $service2_image as $value ) : ?>
                        <div class="swiper-slide grab">
                            <div class="service-img-container">
                                <img src="<?= $value['full_url'];?>" class="service-img-fluid">
                            </div>
                            
                            <p class="service-subtitle-img mt-3"><?= $service2_subtitle_array[$i][$index_subtitle]?></p>
                        </div>
                    <?php $i++; endforeach ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section class="my-5">
    <div class="container-fluid">
        <!-- Layanan 3 Section -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row mt-4" data-aos="fade-up">
                    <div class="col-1"><p class="service-number">3</p></div>
                    <div class="col-11">
                        <h2 class="service-title"><?= $service3_title; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <p><?= $service3_desc_kiri; ?></p>
                            </div>
                            <div class="col-lg-6 col-md-6" data-aos="fade-up">
                                <p><?= $service3_desc_kanan; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section data-aos="fade-up">
    <!-- Layanan 3 Swipper Section -->
    <div class="container-fluid service-slider-section">
        <div class="service-slider swiper-container">
            <div class="swiper service1-swipper">
                <div class="swiper-wrapper">
                    <?php $i=0; foreach ( $service3_image as $value ) : ?>
                        <div class="swiper-slide grab">
                            <div class="service-img-container">
                                <img src="<?= $value['full_url'];?>" class="service-img-fluid">
                            </div>
                            
                            <p class="service-subtitle-img mt-3"><?= $service3_subtitle_array[$i][$index_subtitle]?></p>
                        </div>
                    <?php $i++; endforeach ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START --> 
<section class="my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
            <div class="col-lg-8 col-md-2 col-sm-10 col-xs-10 text-center my-4" data-aos="fade-up">
                <p class="mb-5"><?= $service_footer; ?>
                </p>

                <div data-aos="fade-up">
                    <a href="<?= $service_url_button; ?>" class="btn btn-primary-dark text-uppercase"><?= $service_button; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END --> 

<?php get_footer() ?>