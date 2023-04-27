<?php get_header();

$prefix = 'certificate_award_';

$certificate_title1 = rwmb_meta('certificate_title1_id');
$certificate_header_image = rwmb_meta('certificate_header_image')['full_url'];
$certificate_subtitle1 = rwmb_meta('certificate_subtitle1_id');
$certificate_title2 = rwmb_meta('certificate_title2_id');
$certificate_title3 = rwmb_meta('certificate_title3_id');
$certificate_title4 = rwmb_meta('certificate_title4_id');
$certificate_title_sertifikat = rwmb_meta('certificate_title_sertifikat_id');
$certificate_title_penghargaan = rwmb_meta('certificate_title_penghargaan_id');


if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $certificate_title1 = rwmb_meta('certificate_title1_eng');
        $certificate_subtitle1 = rwmb_meta('certificate_subtitle1_eng');
        $certificate_title2 = rwmb_meta('certificate_title2_eng');
        $certificate_title3 = rwmb_meta('certificate_title3_eng');
        $certificate_title4 = rwmb_meta('certificate_title4_eng');
        $certificate_title_sertifikat = rwmb_meta('certificate_title_sertifikat_eng');
        $certificate_title_penghargaan = rwmb_meta('certificate_title_penghargaan_eng');
    }
}
?>

<!-- SECTION START -->
<section class="my-6 pt-5">
    <div class="sertif-header-section container-fluid px-0 py-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h1 class="mb-4 font-sm" data-aos="fade-up"><?= $certificate_title1; ?><span class="h3 color-primary"><?= $certificate_subtitle1; ?></span></h1>
                <div class="row mb-4">
                    <div class="col-7 sertifikat-img-container">
                        <div class="sertifikat-img parallax" style="background:linear-gradient(rgba(var(--color-black-rgb), 0.5), rgba(var(--color-black-rgb), 0.5)), url(<?= $certificate_header_image;?>);"></div>
                    </div>
                    <div class="col-5 font-sm" data-aos="fade-up"><h1 class="text-center font-sm"><?= $certificate_title2; ?></h1></div>
                </div>
                <div class="row">
                    <div class="col-11">
                        <h1 class="text-end mb-4 font-sm" data-aos="fade-up"><?= $certificate_title3; ?></h1>
                        <div class="d-flex justify-content-between" data-aos="fade-up">
                            <h1 class="color-primary font-sm"><?= $certificate_title4; ?></h1>
                            <button class="sertif-button me-5 mt-2"></button>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
   </div>   
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section class="sertif-award-section" id="sertif-swiper-section" data-aos="fade-up">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h3><?= $certificate_title_sertifikat; ?></h3>
                <div class="certificate-awards-slider swiper-container-sertif mt-4">
                    <div class="swiper-wrapper">
                        <?php
                            $args = array( 
                                'post_type'     => 'certificate_award',
                                'category_name'           => 'Certificate'
                            );

                            $query = new WP_Query($args);

                            foreach($query->posts as $post_item){
                                $post_id = $post_item->ID;

                                $image = get_post_meta($post_id, $prefix . 'image',true);


                                echo '
                                    <div class="swiper-slide">
                                        <img src="'.wp_get_attachment_image_url($image, 'large').'" class="slider-img">
                                    </div>
                                ';
                            }

                        ?>
                        
                    </div>
                    <div class="swiper-scrollbar mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->  

<!-- SECTION START -->
<section class="sertif-award-section" data-aos="fade-up">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h3><?= $certificate_title_penghargaan; ?></h3>
                <div class="certificate-awards-slider swiper-container-sertif mt-4">
                    <div class="swiper-wrapper">
                    <?php
                        $args = array( 
                            'post_type'     => 'certificate_award',
                            'category_name' => 'Award'
                        );

                        $query = new WP_Query($args);

                        foreach($query->posts as $post_item){
                            $post_id = $post_item->ID;

                            $image = get_post_meta($post_id, $prefix . 'image',true);


                            echo '
                                <div class="swiper-slide">
                                    <img src="'.wp_get_attachment_image_url($image, 'large').'" class="slider-img">
                                </div>
                            ';
                        }

                        ?>
                    </div>
                    <div class="swiper-scrollbar mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END --> 

<?php get_footer() ?>