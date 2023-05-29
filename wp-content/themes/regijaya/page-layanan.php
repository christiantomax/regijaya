<?php get_header();

$service_title = rwmb_meta('service_title_id');
$service_description = rwmb_meta('service_description_id');
$service_image = rwmb_meta('service_image')['full_url'];

$service1_title = rwmb_meta('service1_title_id');
$service1_description = rwmb_meta('service1_description_id');
$service1_image = rwmb_meta('service1_image')['full_url'];
$service1_button = rwmb_meta('service1_button_id');
$service1_url_button = rwmb_meta('service1_url_button');
$service1_service_detail_array = rwmb_meta('service1_service_detail');

$service2_title = rwmb_meta('service2_title_id');
$service2_description = rwmb_meta('service2_description_id');
$service2_image = rwmb_meta('service2_image')['full_url'];
$service2_button = rwmb_meta('service2_button_id');
$service2_url_button = rwmb_meta('service2_url_button');
$service2_service_detail_array = rwmb_meta('service2_service_detail');

$lang = '_id';

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $lang = '_eng';

        $service_title = rwmb_meta('service_title_id');
        $service_description = rwmb_meta('service_description_id');
        $service_image = rwmb_meta('service_image')['full_url'];

        $service1_title = rwmb_meta('service1_title_id');
        $service1_description = rwmb_meta('service1_description_id');
        $service1_image = rwmb_meta('service1_image')['full_url'];
        $service1_button = rwmb_meta('service1_button_id');

        $service2_title = rwmb_meta('service2_title_id');
        $service2_description = rwmb_meta('service2_description_id');
        $service2_image = rwmb_meta('service2_image')['full_url'];
        $service2_button = rwmb_meta('service2_button_id');
    }
}

?>

<!-- SERVICE HEADER SECTION START -->
<section class="service-section py-5" style="background-image: url(<?= $service_image; ?>);">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
            <div class="col-sm-10 col-md-4 col-lg-4 col-xs-10">
                <div class="service-section-header">
                    <h2><?= $service_title; ?></h2>
                </div>
                <div>
                    <p class="service-section-header-content"><?= $service_description; ?></p>
                    <button id="service-button" class="round-button me-5 mt-2"></button>
                </div>
            </div>
            <div class="col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>
<!-- SERVICE HEADER SECTION END -->

<!-- SERVICE-1 SECTION START -->
<section class="my-4" id="service1-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
            <div class="col-sm-10 col-md-3 col-lg-3 col-xs-10">
                <div class="service-section-header">
                    <h2 class="text-uppercase"><?= $service1_title; ?></h2>
                </div>
                <div>
                    <p><?= $service1_description; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1 mobile"></div>
            <div class="col-lg-4 col-md-4 col-sm-10 col-xs-10 p-0 h-90">
                <div class="square-wrapper image-service-section img-service-section-top">
                    <div class="square-img-wrapper parallax mb-1" style=" background-image: url(<?= $service1_image;?>);"><div class="square-content-img h1">AA</div></div>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1 mobile"></div>
            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
                <div class="accordion">
                    <?php $i = 1; foreach ( $service1_service_detail_array as $value ) : 
                        if($i == 1) {
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                                <span class="me-3"><?= $i ?>.</span> <?= $value['title'.$lang] ?>
                            </button>
                            </h2>
                            <div id="collapse<?= $i ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="ms-4"><?= $value['desc'.$lang]; ?></p>
                            </div>
                            </div>
                        </div>
                    <?php } else {?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                                <span class="me-3"><?= $i ?>.</span> <?= $value['title'.$lang] ?>
                            </button>
                            </h2>
                            <div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="ms-4"><?= $value['desc'.$lang]; ?></p>
                            </div>
                            </div>
                        </div>
                    <?php } $i++; endforeach; ?>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
        </div>
        <div class="row m-service-button">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="text-end" data-aos="fade-up">
                    <a href="<?= $service1_url_button; ?>" class="btn btn-primary-dark text-uppercase"><?= $service1_button; ?> &nbsp; ></a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SERVICE-1 SECTION END -->

<!-- SERVICE-2 SECTION START -->
<section class="mb-7">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
            <div class="col-lg-3 col-md-3 col-sm-10 col-xs-10">
                <div class="service-section-header">
                    <h2 class="text-uppercase"><?= $service2_title; ?></h2>
                </div>
                <div>
                    <p><?= $service2_description; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
                <div class="accordion mt-5">
                    <?php $i = 1; foreach ( $service2_service_detail_array as $value ) : 
                        if($i == 1) {
                    ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                                <span class="me-3"><?= $i ?>.</span> <?= $value['title'.$lang] ?>
                            </button>
                            </h2>
                            <div id="collapse<?= $i ?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="ms-4"><?= $value['desc'.$lang]; ?></p>
                            </div>
                            </div>
                        </div>
                    <?php } else {?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>">
                                <span class="me-3"><?= $i ?>.</span> <?= $value['title'.$lang] ?>
                            </button>
                            </h2>
                            <div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="ms-4"><?= $value['desc'.$lang]; ?></p>
                            </div>
                            </div>
                        </div>
                    <?php } $i++; endforeach; ?>
                </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-1"></div>
            <div class="col-xs-1 mobile"></div>
            <div class="col-lg-4 col-md-4 col-sm-10 col-xs-10 p-0 h-90">
                <div class="square-wrapper image-service-section">
                    <div class="square-img-wrapper parallax mb-1" style=" background-image: url(<?= $service2_image;?>);"><div class="square-content-img h1">AA</div></div>
                </div>
            </div>            
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div data-aos="fade-up">
                    <a href="<?= $service2_url_button; ?>" class="btn btn-primary-dark text-uppercase"><?= $service2_button; ?> &nbsp; ></a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SERVICE-2 SECTION END -->

<?php get_footer() ?>