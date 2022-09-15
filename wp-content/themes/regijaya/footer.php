        <!-- FOOTER START -->
        <footer class="footer">
		   
            <div class="footer-content">
                <div class="container-fluid">
                    <div class="row px-5">

                        <div class="col-lg-3 col-md-12 my-3">
                            <img src="<?= get_template_directory_uri();?>/assets/img/logo-full.png" alt="logo" class="mb-4 logo-footer" >
                            <p>
                                Regi Jaya adalah PT yang telah terbentuk sejak 2004 serta memiliki keahlian khusus di bidang Unit Maintaining, Unit Refining dan Unit Engineering.
                            </p>
                        </div>
                        <div class="col-lg-1 col-md-12"></div>
                        <div class="col-lg-5 col-md-12 my-3">
                           <div class="row">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'regijaya_footer1',
                                            'container' => 'div',
                                            'container_class' => 'col-lg-5 fw-bold',
                                            'menu_class' => 'list-unstyled list-footer',
                                            'add_li_class' => 'mb-4 me-5'
                                        )
                                    );
                                ?>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'regijaya_footer2',
                                            'container' => 'div',
                                            'container_class' => 'col-lg-7 fw-bold',
                                            'menu_class' => 'list-unstyled list-footer',
                                            'add_li_class' => 'mb-4 me-5'
                                        )
                                    );
                                ?>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-12 footer-contact my-3">
                            <p><b>Contact</b></p>
                            <p>For further information please contact us through this following channels:</p>
                            <p>(031) 8943277<br>0812 5291 9997</p>
                            <p>regi.jaya@gmail.com</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="legal">
                <div class="container-fluid px-5 footer-legal" >
                    <div class="design my-3">
                        <div class="credits1 me-5">
                            Design by <b>atdawn</b></a>
                        </div>
                        <div class="credits2">
                            Code by <b>Qubick</b></a>
                        </div>
                    </div>
                    <div class="copyright  my-3">
                        Copyright &copy; 2022 Regi Jaya.All Rights Reserved.
                    </div>

                </div>
            </div>
            
	    </footer>
        <!-- FOOTER END -->
    
    </div>

    <!-- Javascript -->          
	<?php wp_footer(); ?>

</body>
</html> 