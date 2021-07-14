<?php
/**
 * Footer file for the wp-boilerplate.
 */

 ?>
        <footer class="footer" role="contentinfo">

            <?php anbColourBar(); ?>

            <div class="container">

                <div class="row">

                    <div class="footer-content footer-content-menu col-md-12 col-lg-1 mb-3 mb-lg-0 px-0 text-center text-lg-left">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php anbMLogo(56); ?>
                        </a>
                    </div>


                    <div class="footer-content footer-content-details col-md-3 col-lg-1 mb-3 mb-lg-0 px-0 text-center text-lg-left d-flex flex-column justify-content-between ml-lg-auto">
                        <p>Managing Director</p>
                        <p>samuel@above&beyond.co.uk</p>
                        <p>+44 (0) 1962 920 082</p>
                    </div>
                    <div class="footer-content footer-content-menu col-md-3 col-lg-1 mb-3 mb-lg-0 px-0 text-center text-lg-left">
                        <?php dynamic_sidebar( 'footer_menu_left' ); ?>
                    </div>
                    <div class="footer-content footer-content-menu col-md-3 col-lg-1 mb-3 mb-lg-0 px-0 text-center text-lg-left">
                        <?php dynamic_sidebar( 'footer_menu_right' ); ?>
                    </div>
                    <div class="footer-content col-md-3 col-lg-1 mb-3 mb-lg-0 px-0 text-center text-lg-left d-flex flex-column justify-content-between">
                    <p>Follow us</p>

                        <ul class="footer-content-social mb-0">
                            <a href="#">
                                <li class="footer-content-social-instagram">
                                </li>
                            </a>
                            <a href="#">
                                <li class="footer-content-social-linkedin">
                                </li>
                            </a>
                            <a href="#">
                                <li class="footer-content-social-facebook">
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
            
            
            <?php wp_footer(); ?>  
        
        </body>
    </html>
