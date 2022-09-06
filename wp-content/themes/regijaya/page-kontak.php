<?php get_header();?>

<!-- SECTION START -->
<section class="kontak">
    <div class="container-fluid px-0"  data-aos="fade-up">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                <div class="section-header">
                    <h2 class="text-sm-end">Hubungi kami mengenai Proyek Anda berikutnya</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <img src="<?= get_template_directory_uri();?>/assets/img/dummy.jpg" class="img-fluid">
            </div>
            <div class="col-5">
                <p class="mb-5 color-secondary px-5">
                    Jika Anda ingin mendiskusikan proyek Anda berikutnya atau memiliki pertanyaan mengenai pekerjaan di masa mendatang, jangan ragu untuk mengisi formulir pertanyaan (dibawah) atau kirimkan email kepada kami di <span class="color-primary-dark"><u>regi.jaya@gmail.com</u></a>
                </p>

                <h6 class="color-primary-dark  px-5">Temukan Kami</h6>
                <p class="mb-4 color-secondary  px-5">
                    Jl. Pondok Mutiara Blok BL-16 Sidoarjo (Head Office)<br>
                    Jl. Pondok Mutiara Blok T-16 Sidoarjo (Branch Office)
                </p>

                <h6 class="color-primary-dark px-5">Hubungi Kami</h6>
                <p class="mb-5 color-secondary px-5">
                    (031) 8943277 / 0812 5291 9997)
                </p>

                <a class="btn btn-primary-dark text-center mx-5">TEMUKAN KAMI DI GOOGLE MAPS</a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>

<section class="kontak-img">
    <div class="container-fluid px-0"  data-aos="zoom-in">
        <img src="assets/img/blog-post-banner.jpg" class="img-fluid" width="100%">
    </div>
</section>

<section class="my-5">
    <div class="container-fluid px-0"  data-aos="fade-up">
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8">
                <form>
                    <div class="row my-5">
                        <div class="form-group col-6">
                        <label class="kontak-label" for="inputNama">Nama</label>
                        <input type="text" class="form-control kontak-input" id="inputNama">
                        </div>
                        <div class="form-group col-6">
                        <label class="kontak-label" for="inputEmail">Email</label>
                        <input type="email" class="form-control kontak-input" id="inputEmail" >
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="form-group col-6">
                            <label class="kontak-label" for="inputTelp">Nomor Telp</label>
                            <input type="text" class="form-control kontak-input" id="inputTelp">
                        </div>
                        <div class="form-group col-6">
                            <label class="kontak-label" for="inputSubjek">Subjek</label>
                            <input type="text" class="form-control kontak-input" id="inputSubjek">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="kontak-label" for="inputPesan">Pesan</label>
                        <textarea class="form-control kontak-input" id="inputPesan" rows="5"></textarea>
                        </div>
                    <div class="text-center my-5">
                        <button type="submit" class="btn btn-primary-dark">SUBMIT</button>
                    </div>
                </form>
            </div>

            <div class="col-2"></div>
        </div>
    </div>
</section>

<!-- SECTION END -->

<?php include('templates/footer-top.php') ?>

<?php get_footer() ?>