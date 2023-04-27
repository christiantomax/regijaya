<!-- FOOTER TOP START -->

<?php 

global $post;

$post_slug = $post->post_name;


//local
// $header_footer_post_id = 11;
// $contact_us_post_id = 19;

//cloud
$header_footer_post_id = 48;
$contact_us_post_id = 60;

$logo = wp_get_attachment_image_url(get_post_meta($header_footer_post_id,'header_logo_light_theme', true));

$header = 'regijaya_header_id';

$footer = 'regijaya_footer_id';



//Top Section

$footer_top_title = get_post_meta($header_footer_post_id,'footer_top_title_id', true);

$footer_top_button = get_post_meta($header_footer_post_id,'footer_top_button_id', true);

$footer_top_url_button = get_post_meta($header_footer_post_id,'footer_top_url_button', true);

$footer_top_image = wp_get_attachment_image_url(get_post_meta($header_footer_post_id,'footer_top_image', true));



//Bottom Section

$footer_bottom_description = get_post_meta($header_footer_post_id,'footer_bottom_description_id', true);

$footer_bottom_contact_title = get_post_meta($header_footer_post_id,'footer_bottom_contact_title_id', true);

$footer_bottom_contact_description = get_post_meta($header_footer_post_id,'footer_bottom_contact_description_id', true);



//Contact

$contact_us_telepon_array = get_post_meta($contact_us_post_id,'contact_us_telepon', true);

$contact_us_email = get_post_meta($contact_us_post_id,'contact_us_email', true);

if (isset($_SESSION['lang'])) {

    if($_SESSION['lang'] == 'eng'){

        $header = 'regijaya_header_eng';

        $footer = 'regijaya_footer_eng';



        //Top Section

        $footer_top_title = get_post_meta($header_footer_post_id,'footer_top_title_eng', true);

        $footer_top_button = get_post_meta($header_footer_post_id,'footer_top_button_eng', true);



        //Bottom Section

        $footer_bottom_description = get_post_meta($header_footer_post_id,'footer_bottom_description_eng', true);

        $footer_bottom_contact_title = get_post_meta($header_footer_post_id,'footer_bottom_contact_title_eng', true);

        $footer_bottom_contact_description = get_post_meta($header_footer_post_id,'footer_bottom_contact_description_eng', true);

    }

}



if($post_slug != "home" || $post_slug != "about") {?>

<section id="footer-top" class="footer-top d-flex align-items-center text-center" data-aos="fade-up" style="background:linear-gradient(rgba(var(--color-black-rgb), 0.7), rgba(var(--color-black-rgb), 0.7)), url(<?= $footer_top_image;?>);">

    <div class="container">

        <h1 class="color-white font-sm"><?= $footer_top_title; ?></h1>

        <a href="<?= $footer_top_url_button; ?>" class="btn btn-white text-center mt-5 text-uppercase" type="submit"><?= $footer_top_button; ?></a>

    </div>

</section>

<?php } ?>

<!-- FOOTER TOP END -->   



<!-- FOOTER START -->

<footer class="footer">

    <div class="footer-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-1 col-md-1 col-sm-1"></div>

                <div class="col-lg-10 col-md-10 col-sm-10">

                    <div class="row">

                        <div class="col-lg-3 col-md-12 my-3">

                            <img src="<?= $logo;?>" alt="logo" class="mb-4 logo-footer" >

                            <p>

                                <?= $footer_bottom_description; ?>

                            </p>

                        </div>

                        <div class="col-lg-6 col-md-12 my-3">

                            <div class="row">

                                    <?php

                                        wp_nav_menu(

                                            array(

                                                'theme_location' => $header,

                                                'container' => 'div',

                                                'container_class' => 'col-lg-5 fw-bold',

                                                'menu_class' => 'list-unstyled list-footer',

                                                'add_li_class' => 'nav-footer mb-4 me-5'

                                            )

                                        );

                                    ?>

                                    <?php

                                        wp_nav_menu(

                                            array(

                                                'theme_location' => $footer,

                                                'container' => 'div',

                                                'container_class' => 'col-lg-7 fw-bold',

                                                'menu_class' => 'list-unstyled list-footer',

                                                'add_li_class' => 'nav-footer mb-4 me-5'

                                            )

                                        );

                                    ?>

                            </div>

                        </div>

                        <div class="col-lg-2 col-md-12 footer-contact my-3">

                            <p><b>Contact</b></p>

                            <p><?= $footer_bottom_contact_description; ?></p>

                            <p>
                                <?php $i = 0; foreach ( $contact_us_telepon_array as $value ) : 
                                    if($i > 0) echo "<br>";
                                    if($value['url'] != "") {
                                ?>
                                    <a class="u-footer" href="<?= $value['url'] ?>"><?= $value['telepon'] ?><a/>
                                <?php } else {?>
                                    <?= $value['telepon'] ?>
                                <?php 
                                    }
                                    $i++;
                                endforeach ?>
                            </p>

                            <p><a class="u-footer" href="mailto:<?= $contact_us_email; ?>"><?= $contact_us_email; ?></a></p>



                        </div>

                    </div>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1"></div>

            </div>

        </div>

    </div>

    <div class="legal">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-1 col-md-1 col-sm-1"></div>

                <div class="col-lg-10 col-md-10 col-sm-10  footer-legal">

                    <div class="design my-3">

                        <div class="credits me-5">
                                            
                            Design by <a class="u-footer" href="https://ideas-atdawn.com" target="_blank"><b>atdawn</b></a>

                        </div>

                        <div class="credits">

                            Code by <a class="u-footer" href="https://qubick.id/" target="_blank"><b>Qubick</b></a>

                        </div>

                    </div>

                    <div class="copyright  my-3">

                        Copyright &copy; 2022 Regi Jaya.All Rights Reserved.

                    </div>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1"></div>

            </div>

            

        </div>

    </div>

    

</footer>

<!-- FOOTER END -->



</div>



<!-- Javascript -->  

<script>

var logo_dark = "<?php echo wp_get_attachment_image_url(get_post_meta($header_footer_post_id,'header_logo_dark_theme', true)); ?>";

var logo_light = "<?php echo wp_get_attachment_image_url(get_post_meta($header_footer_post_id,'header_logo_light_theme', true)); ?>";

var slug = "<?php echo $post->post_name; ?>"

var lang = "<?php echo $_SESSION['lang']; ?>"

var mode = "<?php echo $_SESSION['mode']; ?>"

</script>



<?php wp_footer(); ?>



</body>

</html> 