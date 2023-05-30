<?php get_header();

$kebijakan_title = rwmb_meta('kebijakan_title_id');
$kebijakan_description1 = rwmb_meta('kebijakan_description1_id');
$kebijakan_description2 = rwmb_meta('kebijakan_description2_id');
$kebijakan_description3 = rwmb_meta('kebijakan_description3_id');
$kebijakan_description4 = rwmb_meta('kebijakan_description4_id');
$kebijakan_description5 = rwmb_meta('kebijakan_description5_id');
$kebijakan_description6 = rwmb_meta('kebijakan_description6_id');
$kebijakan_image = rwmb_meta('kebijakan_image')['full_url'];

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $kebijakan_title = rwmb_meta('kebijakan_title_eng');
        $kebijakan_description1 = rwmb_meta('kebijakan_description1_eng');
        $kebijakan_description2 = rwmb_meta('kebijakan_description2_eng');
        $kebijakan_description3 = rwmb_meta('kebijakan_description3_eng');
        $kebijakan_description4 = rwmb_meta('kebijakan_description4_eng');
        $kebijakan_description5 = rwmb_meta('kebijakan_description5_eng');
        $kebijakan_description6 = rwmb_meta('kebijakan_description6_eng');
    }
}

?>

<!-- SECTION START -->
<section class="kebijakan">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="section-header">
                    <h1 class="text-center kebijakan-title"><?=$kebijakan_title;?></h1>
                </div>
                <div id="kebijakan-logo" class="section-content mx-5" style="background:linear-gradient(rgba(var(--color-white-rgb), 0.9), rgba(var(--color-white-rgb), 0.9)), url(<?= $kebijakan_image;?>);">
                    <p><?= $kebijakan_description1; ?></p>
                    <p><?= $kebijakan_description2; ?></p>
                    <p><?= $kebijakan_description3; ?></p>
                    <p><?= $kebijakan_description4; ?></p>
                    <p><?= $kebijakan_description5; ?></p>
                    <p><?= $kebijakan_description6; ?></p>
                        
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<?php get_footer() ?>