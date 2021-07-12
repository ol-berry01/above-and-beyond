<?php
/**
 * Index file for the wp-boilerplate.
 */

    get_header();

    while( have_posts() ) :
        the_post();
    endwhile;
    wp_reset_postdata();

    get_footer();
?>