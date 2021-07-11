<?php
/**
 * Front page file for the wp-boilerplate.
 */

    get_header();

    echo '<main id="main">';
    
    while( have_posts() ) :
        the_post();
        echo '
        <h1>' . get_the_title() . '</h1>
        <p>' . get_the_content() . '</p>
        '; 
    endwhile;
    wp_reset_postdata();
    
    echo '</main>';

    get_footer();
?>