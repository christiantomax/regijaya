<?php get_header();?>

<!-- SECTION START -->
<section class="home">
    <div class="container-fluid px-0">
        <div class="home-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="home-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider1.jpg">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="home-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider2.jpg">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="home-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider1.jpg">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="home-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider2.jpg">
                </div>
                </div>
            </div>
    
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="d-flex align-items-center">
    <div class="container px-5">
        <img src="<?= get_template_directory_uri();?>/assets/img/dummy.jpg" class="img-fluid">
    </div>
    <div class="container px-5">
        <p class="color-secondary">
            Regi Jaya adalah PT yang telah terbentuk sejak 2004 serta memiliki keahlian khusus di bidang Unit Maintaing, Unit Refining, dan Unti Engineering.<br><br>

            Dengan tergabungnya para tenaga kerja Ahli yang handal dengan berbagai pengalaman yang ebragam dan kemitraan yang kuat dengan berbagai partner terkenal di bidangnya untuk memberikan komitment kuat terhadap kualitas terbaik dan solusi tercepat untuk Unit-Unit yang bekerja sama denga PT Regi Jaya.

        </p>
    </div>
</section>

<section>
    GAMBAR + KETERANGAN
</section>

<section>
    LAYANAN KAMI
</section>

<section class="home-bridge">
    <div class="container-fluid px-0">
        <div class="home-bridge-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="home-bridge-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider1.jpg">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="home-bridge-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider2.jpg">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="home-bridge-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider1.jpg">
                </div>
                </div>
                <div class="swiper-slide">
                <div class="home-bridge-item">
                    <img src="<?= get_template_directory_uri();?>/assets/img/slider2.jpg">
                </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="home-product">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <p class="color-secondary my-0">PRODUK KAMI</p>
                <h1 class="color-primary-dark text-sm-start my-0">Trusted Tools</h1>
                <h1 class="color-primary-dark text-sm-end ">We usually use</h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-3">
                <div class="home-product-img">
                    <img src="<?= get_template_directory_uri();?>/assets/img/item.png">
                </div>
                <div class="home-product-title"><h6 class="my-1">Rust Remover</h6></div>
                <div class="home-product-subtitle"><p>Hesco 610</p>

                </div>
            </div>
            <div class="col-3">
                <div class="home-product-img">
                    <img src="<?= get_template_directory_uri();?>/assets/img/item.png">
                </div>
                <div class="home-product-title"><h6 class="my-1">Rust Remover</h6></div>
                <div class="home-product-subtitle"><p>Hesco 610</p>

                </div>
            </div>
            <div class="col-3">
                <div class="home-product-img">
                    <img src="<?= get_template_directory_uri();?>/assets/img/item.png">
                </div>
                <div class="home-product-title"><h6 class="my-1">Rust Remover</h6></div>
                <div class="home-product-subtitle"><p>Hesco 610</p>

                </div>
            </div>
            <div class="col-3">
                <div class="home-product-img">
                    <img src="<?= get_template_directory_uri();?>/assets/img/item.png">
                </div>
                <div class="home-product-title"><h6 class="my-1">Rust Remover</h6></div>
                <div class="home-product-subtitle"><p>Hesco 610</p>

                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary-dark text-center mx-5">SELENGKAPNYA</a>
        </div>
    </div>
</section>

<section class="d-flex align-items-center home-caption">
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <h3 class="caption-title1">Coming Together is the Beginning,</h3>
                    <h3 class="caption-title2">Keeping Together is Progress,</h3>
                    <h3 class="caption-title3">Working Together is Success</h3>
                <p class="caption-writer">Henry Ford</p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</section>
<!-- SECTION END -->

<?php get_footer() ?>