document.addEventListener('DOMContentLoaded', () => {

    var scrollLimit = 50;

    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
        document.addEventListener('scroll', () => {
            if(window.scrollY > scrollLimit) {
                selectHeader.classList.add('sticked');
                $('#logo').attr("src", logo_light);
            }else {
                var url = "";

                selectHeader.classList.remove('sticked');
                slug == "home" || slug == "klien" ? url = logo_light : url = logo_dark;
                
                $('#logo').attr("src", url);

            }
        });
    }

    /**
     * Apppend Language to Navbar Mobile
     */
    var btn_lang_id = '<input id="lang-id" class="nav-lang-button" type="submit" value="ID">';
    var btn_lang_eng = '<input id="lang-eng" class="nav-lang-button" type="submit" value="EN">';

    if(lang == "id") btn_lang_id = '<input id="lang-id" class="nav-lang-button active-lang" type="submit" value="ID">';
    else btn_lang_eng = '<input id="lang-eng" class="nav-lang-button active-lang" type="submit" value="EN">';

    if (window.innerWidth <= 991) {
        var html = '<li>' +
            '<div class="d-flex align-items-left navbar-lang-menu">' +
                '<form method="post" class="me-3">' +
                    '<input type="hidden" name="options" value="id">' +
                    btn_lang_id +
                '</form> <span class="delimeter"> | </span>' +
                '<form method="post" class="ms-3">' +
                    '<input type="hidden" name="options" value="eng">' +
                    btn_lang_eng +
                '</form>' + 
            '</div>' +
        '</li>';
        
        $( "#menu-navbar-"+lang ).append( html );
    }else {
        var html = '<li>' +
           '<div class="d-flex align-items-left navbar-lang-menu ' + mode + '">' +
                '<form method="post" class="me-1">' +
                    '<input type="hidden" name="options" value="id">' +
                    btn_lang_id +
                '</form> <span class="delimeter">|</span> ' +
                '<form method="post" class="ms-1">' +
                    '<input type="hidden" name="options" value="eng">' +
                    btn_lang_eng +
                '</form>' +
            '</div>' +
        '</li>';
        
        $( "#menu-navbar-"+lang ).append( html );
    }
    

    /**
     * Change Text Color When Header Sticky (Dark Mode)
     */
     const selectNav = document.querySelector('#nav');
     if (selectNav) {
         document.addEventListener('scroll', () => {
             window.scrollY > scrollLimit ? selectNav.classList.add('sticky') : selectNav.classList.remove('sticky');
         });
    }

    /**
     * Mobile nav toggle
     */
    const mobileNavToogle = document.querySelector('.mobile-nav-toggle');
    if (mobileNavToogle) {
        mobileNavToogle.addEventListener('click', function(event) {
            event.preventDefault();

            document.querySelector('body').classList.toggle('mobile-nav-active');

            const mobileNavActive = document.getElementsByClassName('mobile-nav-active');;
            if(mobileNavActive) $('#logo').attr("src", logo_light);
            else {
                slug == "home" || slug == "klien" ? url = logo_light : url = logo_dark;
                        
                $('#logo').attr("src", url);
            }
        });
    }
    
    /**
     * Moving Text on scroll (Page Client)
     */
    if(slug == 'klien'){
        $(document).on('scroll', function() {
            if (window.innerWidth > 991) {
                $('.klien-header-container').css({'transform' : 'translateY(' + window.scrollY + 'px)'});
            }else {
                var header = document.getElementById("klien-header-text-mobile");
                var sticky = header.offsetTop - 40;
    
                if (window.pageYOffset >= sticky) {
                    header.classList.add("klien-header-text-mobile");
                } else {
                    header.classList.remove("klien-header-text-mobile");
                }
            }
        });
    }

    $('#sertif-button').on("click",function(){
        document.getElementById("sertif-swiper-section").scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    });
    
    $('#service-button').on("click",function(){
        document.getElementById("service1-section").scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    });

    /**
     * Home Slider
     */
    let homeSwipper = new Swiper('.home-slider', {
        direction: 'vertical',
        speed: 300,
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

    /**
     * Home Brige Slider
     */
     let brigeSwipper = new Swiper('.home-bridge-slider', {
        direction: 'horizontal',
        speed: 300,
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

    let service1Swipper = new Swiper(".service1-swipper", {
        direction: 'horizontal',
        slidesPerView : 1.75,
        speed: 500,
        spaceBetween: 50,
        centeredSlides: true,
        loop:true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
              slidesPerView: 1,
            },
            426: {
                slidesPerView: 1.75,
            }
        }       
    });


    /**
     * Sertifikat & Penghargaan Slider
     */
    let certificateSwipper = new Swiper('.certificate-awards-slider', {
        slidesPerView: 2,
        spaceBetween: 20,
        grabCursor: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        scrollbar: {
            el: ".swiper-scrollbar"
        },
        breakpoints: {
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
        }        
    });

    /**
     * Animation on scroll function and init
     */
    function aos_init() {
        AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
        });
    }
    window.addEventListener('load', () => {
        aos_init();
    });

    /**
     * GSAP function Home Image 1
     */
    gsap.registerPlugin(ScrollTrigger);

    let movementFactor = 0.8; // controls how much the backgrounds move. It's a percentage of the section's height. This can be negative if you want to move in the other direction.
    let backgrounds = gsap.utils.toArray(".img-home1");

    backgrounds.forEach((img, i) => {
    
        img.addEventListener("load", () => { // wait until the image loads because we need to ascertain the naturalWidth/naturalHeight
                fitImageWithoutTop(img, movementFactor);

                // the first image (i === 0) should be handled differently because it should start at the very top.
                // use function-based values in order to keep things responsive
                gsap.fromTo(img, {
                y: () => i ? -movementFactor * 0.5 * img.parentNode.offsetHeight : 0
                }, {
                y: () => movementFactor * 0.5 * img.parentNode.offsetHeight,
                ease: "none",
                scrollTrigger: {
                    trigger: img.parentNode,
                    start: () => i ? "top bottom" : "-1px top", 
                    end: "bottom top",
                    scrub: true,
                    invalidateOnRefresh: true // to make it responsive
                }
            });
        })
    
    });

    // whenever the window resizes, we should adjust the backgrounds to fit properly.
    window.addEventListener("resize", () => backgrounds.forEach(img => fitImage(img, movementFactor)));

    // fits the image into the parent proportionally while ensuring there's enough of a margin for the vertical movement.
    function fitImageWithoutTop(img, marginFactor) {
        let sx = img.parentNode.offsetWidth / img.naturalWidth,
            sy = img.parentNode.offsetHeight * (1 + Math.abs(marginFactor)) / img.naturalHeight,
            scale = Math.max(sx, sy),
            w = Math.ceil(img.naturalWidth * scale),
            h = Math.ceil(img.naturalHeight * scale);
        gsap.set(img, {width: w, height: h, left: Math.ceil((img.parentNode.offsetWidth - w) / 2), position: "absolute"});
    }

    /**
     * GSAP function Home Image 2
     */
    let backgrounds2 = gsap.utils.toArray(".img-home2");

    backgrounds2.forEach((img, i) => {
    
        img.addEventListener("load", () => { // wait until the image loads because we need to ascertain the naturalWidth/naturalHeight
                fitImage(img, movementFactor);

                // the first image (i === 0) should be handled differently because it should start at the very top.
                // use function-based values in order to keep things responsive
                gsap.fromTo(img, {
                y: () => i ? -movementFactor * 0.5 * img.parentNode.offsetHeight : 0
                }, {
                y: () => movementFactor * 0.5 * img.parentNode.offsetHeight,
                ease: "none",
                scrollTrigger: {
                    trigger: img.parentNode,
                    start: () => i ? "top bottom" : "-1px top", 
                    end: "bottom top",
                    scrub: true,
                    invalidateOnRefresh: true // to make it responsive
                }
            });
        })
    
    });

    // whenever the window resizes, we should adjust the backgrounds to fit properly.
    window.addEventListener("resize", () => backgrounds.forEach(img => fitImage(img, movementFactor)));

    // fits the image into the parent proportionally while ensuring there's enough of a margin for the vertical movement.
    function fitImage(img, marginFactor) {
        let sx = img.parentNode.offsetWidth / img.naturalWidth,
            sy = img.parentNode.offsetHeight * (1 + Math.abs(marginFactor)) / img.naturalHeight,
            scale = Math.max(sx, sy),
            w = Math.ceil(img.naturalWidth * scale),
            h = Math.ceil(img.naturalHeight * scale);
        gsap.set(img, {width: w, height: h, top: Math.ceil((img.parentNode.offsetHeight - h) / 2), left: Math.ceil((img.parentNode.offsetWidth - w) / 2), position: "absolute"});
    }

});