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
    if (window.innerWidth <= 991) {
        var html = '<li>' +
            '<div class="d-flex align-items-left navbar-lang-menu">' +
                '<form method="post" class="me-3">' +
                    '<input type="hidden" name="options" value="id">' +
                    '<input class="nav-lang-button" type="submit" value="ID">' +
                '</form> <span class="delimeter"> | </span>' +
                '<form method="post" class="ms-3">' +
                    '<input type="hidden" name="options" value="eng">' +
                    '<input class="nav-lang-button" type="submit" value="EN">' +
                '</form>' + 
            '</div>' +
        '</li>';
        
        $( "#menu-navbar-"+lang ).append( html );
    }else {
        var html = '<li>' +
           '<div class="d-flex align-items-left navbar-lang-menu ' + mode + '">' +
                '<form method="post" class="me-1">' +
                    '<input type="hidden" name="options" value="id">' +
                    '<input class="nav-lang-button" type="submit" value="ID">' +
                '</form> <span class="delimeter">|</span> ' +
                '<form method="post" class="ms-1">' +
                    '<input type="hidden" name="options" value="eng">' +
                    '<input class="nav-lang-button" type="submit" value="EN">' +
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
    

    /**
     * Home Slider
     */
    let homeSwipper = new Swiper('.home-slider', {
        direction: 'vertical',
        speed: 300,
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 9000,
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
            delay: 9000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            clickable: true
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
});