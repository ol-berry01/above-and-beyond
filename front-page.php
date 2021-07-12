<?php
/**
 * Front page file for the wp-boilerplate.
 */

    get_header();

        echo '<main id="main">';
        
            get_header();

                while( have_posts() ) :
                    the_post();    
                        the_content();                    
                endwhile;

            wp_reset_postdata();
        
        echo '</main>';

    get_footer();
?>