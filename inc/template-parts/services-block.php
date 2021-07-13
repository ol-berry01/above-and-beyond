<section id="services" class="services">

    <?php if( have_rows('services_block') ): ?>
        <?php while( have_rows('services_block') ): the_row(); 
            
            $service_image          = get_sub_field( 'service_image' );
            $service_title          = get_sub_field( 'service_title' );
            $service_description    = get_sub_field( 'service_description' );
            $service_button         = get_sub_field( 'service_button' );
            $service_link           = get_sub_field( 'service_link' );
            $service_colour         = get_sub_field( 'service_colour' );
        
                echo '
                    <div class="service ' . ( $service_colour ? $service_colour : 'anb-orange' ) . '-bg">
                        <div class="service-img">
                            <img src="' . $service_image['url'] . '" alt="' . $service_image['alt'] . '">
                        </div>
                        <div class="service-content">
                            <div class="service-content-wrapper">
                                <h2 class="service-content-title">' . $service_title . '</h2>
                                <p class="service-content-description">' . $service_description . '</p>
                                <a href="' . $service_link . '" class="anb-button-alt">' . $service_button . '</a>
                            </div>
                        </div>
                    </div>
                ';
            endwhile;
        endif;
    ?>
    
</section>