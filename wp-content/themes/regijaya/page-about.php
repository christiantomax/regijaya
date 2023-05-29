<?php get_header();

$prefix = 'certificate_award_';

//About Section
$about_us_about_title1 = rwmb_meta('about_us_about_title1_id');
$about_us_about_title2 = rwmb_meta('about_us_about_title2_id');
$about_us_about_description1 = rwmb_meta('about_us_about_description1_id');
$about_us_about_description2 = rwmb_meta('about_us_about_description2_id');
$about_us_about_image = rwmb_meta('about_us_about_image')['full_url'];

//Visi Section
$about_us_visi_title = rwmb_meta('about_us_visi_title_id');
$about_us_visi_description = rwmb_meta('about_us_visi_description_id');
$about_us_visi_image = rwmb_meta('about_us_visi_image')['full_url'];

//Misi Section
$about_us_misi_title = rwmb_meta('about_us_misi_title_id');
$about_us_misi_misi = rwmb_meta('about_us_misi_misi');
$about_us_misi_image = rwmb_meta('about_us_misi_image')['full_url'];

//Prioritas Section
$about_us_prioritas_title = rwmb_meta('about_us_prioritas_title_id');
$about_us_prioritas_description1 = rwmb_meta('about_us_prioritas_description1_id');
$about_us_prioritas_description2 = rwmb_meta('about_us_prioritas_description2_id');
$about_us_prioritas_image = rwmb_meta('about_us_prioritas_image')['full_url'];

//Proyek Section
$about_us_proyek_title = rwmb_meta('about_us_proyek_title_id');
$about_us_proyek_description = rwmb_meta('about_us_proyek_description_id');
$about_us_proyek_image = rwmb_meta('about_us_proyek_image')['full_url'];

//Pekerja Section
$about_us_pekerja_title = rwmb_meta('about_us_pekerja_title_id');
$about_us_pekerja_description = rwmb_meta('about_us_pekerja_description_id');
$about_us_pekerja_image = rwmb_meta('about_us_pekerja_image')['full_url'];

//Sertifikat Section
$about_us_sertifikat_title = rwmb_meta('about_us_sertifikat_title_id');
// $about_us_sertifikat_image = rwmb_meta('about_us_sertifikat_image')['full_url'];
$about_us_sertifikat_image_sertifikat_penghargaan = rwmb_meta('about_us_sertifikat_image_sertifikat_penghargaan');

$index_misi = 'misi_id';
$index_description = 'description_id';

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $index_misi = 'misi_eng';
        $index_description = 'description_eng';

        //About Section
        $about_us_about_title1 = rwmb_meta('about_us_about_title1_eng');
        $about_us_about_title2 = rwmb_meta('about_us_about_title2_eng');
        $about_us_about_description1 = rwmb_meta('about_us_about_description1_eng');
        $about_us_about_description2 = rwmb_meta('about_us_about_description2_eng');

        //Visi Section
        $about_us_visi_title = rwmb_meta('about_us_visi_title_eng');
        $about_us_visi_description1 = rwmb_meta('about_us_visi_description_eng');

        //Misi Section
        $about_us_misi_title = rwmb_meta('about_us_misi_title_eng');

        //Prioritas Section
        $about_us_prioritas_title = rwmb_meta('about_us_prioritas_title_eng');
        $about_us_prioritas_description1 = rwmb_meta('about_us_prioritas_description1_eng');
        $about_us_prioritas_description2 = rwmb_meta('about_us_prioritas_description2_eng');

        //Pekerja Section
        $about_us_proyek_title = rwmb_meta('about_us_proyek_title_eng');
        $about_us_proyek_description1 = rwmb_meta('about_us_proyek_description_eng');

        //Proyek Section
        $about_us_pekerja_title = rwmb_meta('about_us_pekerja_title_eng');
        $about_us_pekerja_description1 = rwmb_meta('about_us_pekerja_description_eng');

        //Sertifikat Section
        $about_us_sertifikat_title = rwmb_meta('about_us_sertifikat_title_eng');
    }
}

?>

<!-- SECTION START -->
<section class="about mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-4 col-md-10 col-sm-10" data-aos="fade-up">
                <div class="section-header mt-0">
                    <h2 class="section-title-mobile"><?= $about_us_about_title1; ?><br><?= $about_us_about_title2; ?></h2>
                </div>
                <img src="<?= $about_us_about_image; ?>" class="img-fluid mobile mb-4">
                <div class="section-content">
                    <p class="color-secondary">
                        <?= $about_us_about_description1; ?>

                        <?= $about_us_about_description2; ?>

                    </p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-6 px-0 desktop" data-aos="zoom-in">
                <img src="<?= $about_us_about_image; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="my-6" id="visi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-3 col-sm-3"></div>
            <div class="col-lg-6 col-md-8 col-sm-8">  
                <div class="section-header mt-0 mb-0" data-aos="fade-up">
                    <h1><?= $about_us_visi_title; ?></h1>
                </div>
                <p class="color-secondary mobile" data-aos="fade-up">
                    <?= $about_us_visi_description; ?></b>
                </p>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
        <div class="row mt-3 mobile">
            <div class="col-1"></div>
            <div class="col-10 map-about" data-aos="fade-up">
                <img src="<?= $about_us_visi_image;?>" class="img-fluid">
            </div>
            <div class="col-1"></div>
        </div>
        <div class="section-content mt-3 desktop">
            <div class="row">
                <div class="col-lg-6 px-0 map-about" data-aos="zoom-in">
                    <img src="<?= $about_us_visi_image;?>" class="img-fluid">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 mb-5">
                    <p class="color-secondary" data-aos="fade-up">
                        <?= $about_us_visi_description; ?>
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
</section>

<section class="my-6">
    <div class="container-fluid mb-5" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-6 col-md-7 col-sm-7">
                <div class="section-header mt-0">
                    <h1><?= $about_us_misi_title; ?></h1>
                </div>
                <div class="section-content">
                    <?php foreach ( $about_us_misi_misi as $value ) : ?>
                        <div class="row">
                            <div class="col-lg-1">
                                <h6 class="about-section-header"><?= $value['number'] ?></h6>
                            </div>
                            <div class="col-lg-10">
                                <h6 class="about-section-header"><?= $value[$index_misi] ?></h6>
                                <p class="color-secondary misi-desc"><?= $value[$index_description] ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                    
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-4 px-0 img-misi">
                <img src="<?= $about_us_misi_image;?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="prioritas">
    <div class="container-fluid">
        <div class="row desktop">
            <div class="col-3 px-0">
                <div class="square-wrapper bg-primary d-flex align-items-center" data-aos="fade-up">
                    <div class="square-content h1">
                        <?= $about_us_prioritas_title; ?>
                    </div>
                </div>
            </div>
            <div class="col-9" data-aos="fade-up">
                <div class="row my-4">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <p class="color-secondary"><?=$about_us_prioritas_description1?></p>
                    </div>
                    <div class="col-1"></div>
                </div>

                <div class="row">
                    <div class="col-4 px-0">
                        <div class="square-img-wrapper" style="background-image: url(<?= $about_us_prioritas_image; ?>);" data-aos="zoom-in"><div class="square-content-img h1">AA</div></div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6 d-flex align-items-center">
                        <p class="color-secondary" data-aos="fade-up"><?=$about_us_prioritas_description2?></p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        
        <div class="row mobile mb-5">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 px-0">
                <div class="square-wrapper bg-primary d-flex align-items-center" data-aos="fade-up">
                    <div class="square-content h1">
                        <?= $about_us_prioritas_title; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 px-0">
                <div class="square-img-wrapper" style="background-image: url(<?= $about_us_prioritas_image; ?>);" data-aos="zoom-in"><div class="square-content-img h1">AA</div></div>
            </div>
        </div>
        <div class="row mobile mb-5">
            <div class="col-1"></div>
            <div class="col-10" data-aos="fade-up">
                <p class="color-secondary mb-3"><?= $about_us_prioritas_description1; ?></p>
                <p class="color-secondary"><?= $about_us_prioritas_description2; ?></p>
            </div>
            <div class="col-1"></div>
        </div>
    </div> 
</section>

<section class="pekerja">
    <div class="container-fluid">
        <div class="row desktop">
            <div class="col-9">
                <div class="row mt-6">
                    <div class="col-4 px-0 mt-5">
                        <div class="square-wrapper" data-aos="zoom-in">
                            <div class="square-img-wrapper" style="background-image: url(<?= $about_us_pekerja_image;?>);"><div class="square-content-img h1">AA</div></div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6 mt-6" data-aos="fade-up">
                        <p class="color-secondary">
                            <?= $about_us_pekerja_description; ?>
                        </p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="col-3 px-0">
                <div class="square-wrapper bg-primary d-flex align-items-center" data-aos="fade-up">
                    <div class="square-content h1">
                        <?= $about_us_pekerja_title; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mobile mb-5">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 px-0">
                <div class="square-img-wrapper" style="background-image: url(<?= $about_us_pekerja_image; ?>);" data-aos="zoom-in"><div class="square-content-img h1">AA</div></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 px-0">
                <div class="square-wrapper bg-primary d-flex align-items-center" data-aos="fade-up">
                    <div class="square-content h1">
                        <?= $about_us_pekerja_title; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mobile mb-5">
            <div class="col-1"></div>
            <div class="col-10">
            <p class="color-secondary" data-aos="fade-up">
                <?= $about_us_pekerja_description; ?>
            </p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>

<section class="proyek mb-6">
    <div class="container-fluid">
        <div class="row desktop">
            <div class="col-1"></div>
            <div class="col-4 d-flex align-items-center" data-aos="fade-up">
                <p class="color-secondary"><?= $about_us_proyek_description; ?></p>
            </div>
            <div class="col-1"></div>
            <div class="col-3 px-0">
                <div class="square-wrapper bg-primary d-flex align-items-center" data-aos="fade-up">
                    <div class="square-content h1">
                        <?= $about_us_proyek_title; ?>
                    </div>
                </div>
            </div>
            <div class="col-3 px-0 mt-10" data-aos="zoom-in">
                <div class="square-img-wrapper" style="background-image: url(<?= $about_us_proyek_image; ?>);"><div class="square-content-img h1">AA</div></div>
            </div>
        </div>

        <div class="row mobile mb-5">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 px-0">
                <div class="square-wrapper bg-primary d-flex align-items-center" data-aos="fade-up">
                    <div class="square-content h1">
                        <?= $about_us_proyek_title; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 px-0">
                <div class="square-img-wrapper" style="background-image: url(<?= $about_us_proyek_image; ?>);" data-aos="zoom-in"><div class="square-content-img h1">AA</div></div>
            </div>
        </div>
        <div class="row mobile mb-5">
            <div class="col-1"></div>
            <div class="col-10">
                <p class="color-secondary" data-aos="fade-up"><?= $about_us_proyek_description; ?></p>
            </div>
            <div class="col-1"></div>
        </div>
    </div> 
</section>

<section class="penghargaan bg-primary mt-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 desktop"></div>
            <div class="col-10">
                <div class="row py-3">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 up-5 px-0">
                        <!-- <div class="penghargaan-img-wrapper" data-aos="zoom-in">
                            <img src="<?php //$about_us_sertifikat_image;?>" class="img-fluid">
                        </div> -->
                    </div>
                    <div class="col-1 desktop"></div>
                    <div class="col-6 d-flex align-items-center" data-aos="fade-up">
                        <h1 class="font-sm color-white"><?= $about_us_sertifikat_title; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="row py-5 about-certif" data-aos="fade-up">
                    <?php
                        $args = array( 
                            'post_type'     => 'certificate_award',
                            'category_name' => 'Certificate',
                            'posts_per_page' => '4'
                        );

                        $query = new WP_Query($args);
                        $i = 0;
                        foreach($query->posts as $post_item){
                            $post_id = $post_item->ID;

                            $image = get_post_meta($post_id, $prefix . 'image',true);

                            if($i % 2 == 0) {
                                echo '
                                    <div class="col-md-1 col-sm-1 mobile"></div>
                                    <div class="col-lg-3 col-md-5 col-sm-5 col-xs-6 mb-3">
                                        <img src="'.wp_get_attachment_image_url($image, 'large').'" class="img-fluid">
                                    </div>
                                ';
                            } else {
                                echo '
                                    <div class="col-lg-3 col-md-5 col-sm-5 col-xs-6 mb-3">
                                        <img src="'.wp_get_attachment_image_url($image, 'large').'" class="img-fluid">
                                    </div>
                                    <div class="col-md-1 col-sm-1 mobile"></div>
                                ';
                            }
                            $i++;
                        }

                    ?>

                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>

<!-- SECTION END -->

<?php get_footer() ?>