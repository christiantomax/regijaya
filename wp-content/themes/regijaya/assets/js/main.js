document.addEventListener('DOMContentLoaded', () => {

    var scrollLimit = 50;
    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
        document.addEventListener('scroll', () => {
            window.scrollY > scrollLimit ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
        });
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

        this.classList.toggle('bi-grid-3x3-gap-fill');
        this.classList.toggle('bi-x');
        });
    }

    /**
     * Moving Text on scroll (Page Client)
     */
    $(document).on('scroll', function() {
            $('#klien-header-text').css({'transform' : 'translateY(' + window.scrollY + 'px)'});
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