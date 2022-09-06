<?php
    global $post;
?>  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
        const body = document.body,
            scrollWrap = document.getElementsByClassName("smooth-scroll-wrapper")[0],
            speed = 0.045, 
            runningText1 = $(".running-text-1"),
            runningText2 = $(".running-text-2")

            var offset = 0;

            function smoothScroll() {
                body.style.height = Math.floor(window.innerHeight * 5) + "px"
                offset += (window.pageYOffset - offset) * speed

                var scrollRunningText = "translateX(-" + offset + "px)"
                var scrollRunningText2 = "translateX(" + offset + "px)"
                var scroll = "translateY(-" + offset + "px) translateZ(0)"
                scrollWrap.style.transform = scroll
                runningText1.css("transform",scrollRunningText)
                runningText2.css("transform",scrollRunningText2)

                callScroll = requestAnimationFrame(smoothScroll)
            }

            smoothScroll()
    </script>
    </main>
    </body>
</html>