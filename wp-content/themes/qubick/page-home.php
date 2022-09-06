<?php get_header();?>
    <div class="container-fluid">
        <div class="row" id="home-banner">
            <div class="col-12" id="home-banner-content">
                <div id="home-banner-mouse">
                </div>
                <div id="home-banner-qubick">
                    <div id="home-banner-image">
                        <img src="<?= get_template_directory_uri();?>/assets/img/home-banner.png" alt="home-banner">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="font-thousand" id="home-banner-qubick-text">
                    QUBICK
                </p>
            </div>
        </div>
    </div>
    
    <div class="container-fluid index-2">
        <div class="row" id="home-section-2">
            <div class="col-12 running-text-container">
                <h1 class="font-abril running-text-1">
                DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN 
                </h1>
                <h1 class="font-abril running-text-2">
                BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN - BUILD - APP - DESIGN 
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid index-2">
        <div class="row padding"  id="home-section-3">
            <div class="col-12 display-flex justify-space-between" id="home-our-mission">
                <h3 class="font-poppins">
                    Our mission is to put<br/>
                    creativity and innovation at<br/>
                    the service of your digital<br/>
                    communication strategy.<br/>
                </h3>
                <div class="circle display-flex justify-center">
                    <h2 class="font-poppins center margin-zero">
                        EXPLORE<br/>MORE
                    </h2>
                </div>
            </div>
            <div class="col-12" id="home-image-collection">
                <div class="home-image-collection-container" id="img-0" onmouseenter="setHoverNumber(0)">
                    <div class="home-image-collection-card">
                        <img src="https://picsum.photos/200/300"/>
                    </div>
                </div>
                <div class="home-image-collection-container" id="img-1" onmouseenter="setHoverNumber(1)">
                    <div class="home-image-collection-card">
                        <img src="https://picsum.photos/200/300"/>
                    </div>
                </div>
                <div class="home-image-collection-container" id="img-2" onmouseenter="setHoverNumber(2)">
                    <div class="home-image-collection-card">
                        <img src="https://picsum.photos/200/300"/>
                    </div>
                </div>
                <div class="home-image-collection-container" id="img-3" onmouseenter="setHoverNumber(3)">
                    <div class="home-image-collection-card">
                        <img src="https://picsum.photos/200/300"/>
                    </div>
                </div>
                <div class="home-image-collection-container" id="img-4" onmouseenter="setHoverNumber(4)">
                    <div class="home-image-collection-card">
                        <img src="https://picsum.photos/200/300"/>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row padding" id="home-section-4">
            <div class="col-4 swiper-number-container" >
                <div class="swiper swiper-number display-flex">
                    <div class="swiper-wrapper swiper-number-wrapper font-abril">
                        <div class="swiper-slide">01</div>
                        <div class="swiper-slide">02</div>
                        <div class="swiper-slide">03</div>
                        <div class="swiper-slide">04</div>
                        <div class="swiper-slide">05</div>
                        <div class="swiper-slide">06</div>
                        <div class="swiper-slide">07</div>
                        <div class="swiper-slide">08</div>
                        <div class="swiper-slide">09</div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="swiper swiper-text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-text">
                            <div class="swiper-text-container">
                                <h2 class="font-abril">
                                    FROM START TO FINISH
                                </h2>
                                <p class="font-poppins">
                                    We provide value to our clients through design thinking and<br/>
                                    customized tech stacks. Our designers, full-stack developers,<br/>
                                    project managers and strategists are working in closely-knit<br/>
                                    teams throughout every project.<br/>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-text">
                            <div class="swiper-text-container">
                                <h2 class="font-abril">
                                    START
                                </h2>
                                <p class="font-poppins">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-text">
                            <div class="swiper-text-container">
                                <h2 class="font-abril">
                                    TO FINISH
                                </h2>
                                <p class="font-poppins">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>

<script>
    $("#home-banner-mouse").mousemove(function(e) {
        parallaxIt(e, ".slide", -100)
        parallaxIt(e, "img", -30)
        });

        function parallaxIt(e, target, movement) {
        var $this = $("#home-banner-image img")
        var relX = e.pageX - $this.offset().left
        var relY = e.pageY - $this.offset().top

        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
            y: (relY - $this.height() / 2) / $this.height() * movement
        });
    }

    var swiperNumber = new Swiper(".swiper-number", {
        direction: "vertical",
    })

    var swiperText = new Swiper(".swiper-text", {
        effect: "fade",
        speed: 0,
        fadeEffect: {
            crossFade: true
        },
    })
    
    let countImageContainer = 5
    gsap.to("#img-4", { duration: 1, width: "82%" })
    function setHoverNumber(number){
        gsap.to("#img-"+number, { duration: 1, width: "82%" })
        for (let i = 0; i < countImageContainer; i++) {
            if(i !== number){
                gsap.to("#img-"+i, { duration: 1, width: "3.5%" })
            }
        }
    }
</script>