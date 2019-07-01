    <div id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 tac">
                    <!-- footer content -->
                    <?php dynamic_sidebar('footer-content-widget'); ?>


                </div>
            </div>
            <div class="row">
                
                <!-- footer widget -->
                    <?php dynamic_sidebar('footer-widget'); ?>
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Get In Tuch</h2>
                        <form id="footer-contact-form-us" name="footer-contact-form-us" class="" method="post" action="contact.php">
                            <div class="form-group">
                                <input type="text" class="form-control required name" name="name" placeholder="Name" aria-required="true" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control required name" name="email" placeholder="Email" aria-required="true" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control required" rows="3" placeholder="Message" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer  -->

    <!-- copyright
    ============================================= -->
    <div id="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="copyright">
                        <p>&copy; Copyright 2017, All Rights Reserved. <span> A Product Design by <a href="http://thememoor.com"> Theme Moor</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copyright   -->
    <a href="#" id="scrollTopButton">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- Footer Scripts Area -->
    <!-- All JS File Here -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
    <!-- Bootstrap Min Js File -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!--  wow Js File  -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- jquery ui -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
    <!-- jquery Counter -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>
    <!-- hero menu -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordian-a2r.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.meanmenu.js"></script>
    <!-- Skillbar -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/skill.bars.jquery.js"></script>
    <!-- mixit-up -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.filterizr.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/filterize-controls.js"></script>
    <!-- magnific-popup -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom JS File -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>


<?php wp_footer(); ?>
</body>

</html>
