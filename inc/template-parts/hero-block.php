<?php 
    $hero_image = get_field('hero_image');
    $hero_title = get_field('hero_title');
    $hero_subtitle = get_field('hero_subtitle');
    $hero_buttons = get_field('hero_buttons');
    $hero_image = get_field('hero_image');
?>

<section id="hero" class="hero" style="background: url(<?php echo $hero_image['url']; ?>); background-position: bottom;
    background-size: cover;">

<div class="hero-wrapper">

        <div class="hero-content">
            <h1 class="hero-content-title"><?php echo $hero_title; ?></h1>
            <p class="lead hero-content-subtitle"><?php echo $hero_subtitle; ?></p>
            <div class="hero-content-buttons">
            <?php 
                if( have_rows( 'hero_buttons' ) ):
                    while( have_rows( 'hero_buttons' ) ): the_row(); 
            
                    $hero_button    = get_sub_field( 'hero_button' );
                    $hero_link      = get_sub_field( 'hero_link' );
                    $hero_colour    = get_sub_field( 'hero_colour' );
        
                echo '
                    <a href="' . $hero_link . '" class="anb-button-alt ' . $hero_colour . '-bg">' . $hero_button . '</a>
                ';

            endwhile;
        endif;
    ?>
            </div>
        </div>

    </div>

</section>