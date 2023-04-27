<?php get_header();

$contact_us_title = rwmb_meta('contact_us_title_id');
$contact_us_description = rwmb_meta('contact_us_description_id');
$contact_us_subtitle1 = rwmb_meta('contact_us_subtitle1_id');
$contact_us_subtitle2 = rwmb_meta('contact_us_subtitle2_id');
$contact_us_alamat = rwmb_meta('contact_us_alamat');
$contact_us_telepon_array = rwmb_meta('contact_us_telepon');
$contact_us_email = rwmb_meta('contact_us_email');
$contact_us_button1 = rwmb_meta('contact_us_button1_id');
$contact_us_url_maps = rwmb_meta('contact_us_url_maps');
$contact_us_image1 = rwmb_meta('contact_us_image1')['full_url'];
$contact_us_image2 = rwmb_meta('contact_us_image2')['full_url'];
$contact_us_input1 = rwmb_meta('contact_us_input1_id');
$contact_us_input2 = rwmb_meta('contact_us_input2_id');
$contact_us_input3 = rwmb_meta('contact_us_input3_id');
$contact_us_input4 = rwmb_meta('contact_us_input4_id');
$contact_us_input5 = rwmb_meta('contact_us_input5_id');
$contact_us_button_sumbit = rwmb_meta('contact_us_button_submit_id');

$email_contact_us_to = rwmb_meta('contact_us_email_contact_us_to');
$email_contact_us_from = rwmb_meta('contact_us_email_contact_us_from');

$index_alamat = 'alamat_id';

if (isset($_SESSION['lang'])) {
    if($_SESSION['lang'] == 'eng'){
        $contact_us_title = rwmb_meta('contact_us_title_eng');
        $contact_us_description = rwmb_meta('contact_us_description_eng');
        $contact_us_subtitle1 = rwmb_meta('contact_us_subtitle1_eng');
        $contact_us_subtitle2 = rwmb_meta('contact_us_subtitle2_eng');
        $contact_us_button1 = rwmb_meta('contact_us_button1_eng');
        $contact_us_input1 = rwmb_meta('contact_us_input1_eng');
        $contact_us_input2 = rwmb_meta('contact_us_input2_eng');
        $contact_us_input3 = rwmb_meta('contact_us_input3_eng');
        $contact_us_input4 = rwmb_meta('contact_us_input4_eng');
        $contact_us_input5 = rwmb_meta('contact_us_input5_eng');
        $contact_us_button_sumbit = rwmb_meta('contact_us_button_submit_eng');

        $index_alamat = 'alamat_eng';
    }
}
if(isset($_POST["btn-submit"])){

    if($_POST["btn-submit"]){

        $to = $email_contact_us_to;
        $nama = "Nama : ".$_POST["inputNama"]."<br/>";
        $telp = "Phone Number : ".$_POST["inputTelp"]."<br/>";
        $subject = $_POST["inputSubjek"];
        $from="Email : ".$_POST["inputEmail"]."<br/><br/>";
        $msg= $_POST["inputPesan"];
        $headers[]= "From: " . $email_contact_us_from;
        $headers[]= "Reply-To: " . $_POST["inputEmail"];
        $headers[]= 'content-type: text/html';
        
        $full_msg = $nama.$telp.$from.$msg;
    
        $sent = wp_mail( $to, $subject, $full_msg, $headers);
        if($sent) {
            echo "<script>console.log('SUCCESS SENT EMAIL!!');</script>";      
          }
          else  {
            //message wasn't sent 
            echo "<script>console.log('FAILED TO SENT EMAIL!!');</script>";      
          }
    }
}


?>

<!-- SECTION START -->
<section class="kontak">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-5 col-md-10 col-sm-10">
                <div class="section-header">
                    <h2 class="kontak-header"><?= $contact_us_title; ?></h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-1 col-sm-1"></div>   
        </div>

        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-5 col-md-10 col-sm-10 mb-4">
                <img src="<?= $contact_us_image1;?>" class="img-fluid">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-md-1 col-sm-1 mobile"></div>
            <div class="col-lg-4 col-md-10 col-sm-10 kotak-content">
                <p class="color-secondary mb-4">
                    <?= $contact_us_description?> 
                    <a href="mailto:<?= $contact_us_email; ?>"><span class="email color-primary-dark"><?= $contact_us_email; ?></span></a>
                </p>

                <h6 class="color-primary-dark"><?= $contact_us_subtitle1; ?></h6>
                <p class="mb-4 color-secondary">
                <?php foreach ( $contact_us_alamat as $value ) : ?>
                    <?= $value[$index_alamat] ?><br>
                <?php endforeach ?>
                </p>

                <h6 class="color-primary-dark">Hubungi Kami</h6>
                <p class="mb-4 color-secondary">
                    <?php $i = 0; foreach ( $contact_us_telepon_array as $value ) : 
                        if($i > 0) echo " / ";
                        if($value['url'] != "") {
                    ?>
                        <a class="color-secondary" href="<?= $value['url'] ?>"><?= $value['telepon'] ?><a/>
                    <?php } else {?>
                        <?= $value['telepon'] ?>
                    <?php 
                        }
                        $i++;
                    endforeach ?>
                </p>

                <a href="<?= $contact_us_url_maps; ?>" class="btn btn-primary-dark text-center btn-map text-uppercase" target="_blank"><?= $contact_us_button1; ?></a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
        </div>
    </div>
</section>

<section class="kontak-img my-5">
    <div class="container-fluid px-0"  data-aos="zoom-in">
        <img src="<?= $contact_us_image2;?>" class="img-fluid" width="100%">
    </div>
</section>

<section class="my-5">
    <div class="container-fluid"  data-aos="fade-up">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form method="post">
                    <div class="row">
                        <div class="form-group col-lg-6 my-3">
                            <label class="kontak-label" for="inputNama"><?= $contact_us_input1; ?></label>
                            <input type="text" class="form-control kontak-input" id="inputNama" name="inputNama">
                        </div>
                        <div class="form-group col-lg-6 my-3">
                            <label class="kontak-label" for="inputEmail"><?= $contact_us_input2; ?></label>
                            <input type="email" class="form-control kontak-input" id="inputEmail" name="inputEmail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 my-3">
                            <label class="kontak-label" for="inputTelp"><?= $contact_us_input3; ?></label>
                            <input type="text" class="form-control kontak-input" id="inputTelp" name="inputTelp">
                        </div>
                        <div class="form-group col-lg-6 my-3">
                            <label class="kontak-label" for="inputSubjek"><?= $contact_us_input4; ?></label>
                            <input type="text" class="form-control kontak-input" id="inputSubjek" name="inputSubjek">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="kontak-label" for="inputPesan"><?= $contact_us_input5; ?></label>
                        <textarea class="form-control kontak-input" id="inputPesan" rows="5" name="inputPesan"></textarea>
                        </div>
                    <div class="text-center my-5">
                        <input type="submit" name="btn-submit" id="btn-submit" class="btn btn-primary-dark btn-submit-kotak text-uppercase" value="<?= $contact_us_button_sumbit; ?>"></input>
                    </div>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>

<?php get_footer() ?>