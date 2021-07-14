<?php
/**
 * Header file for the wp-boilerplate.
 */

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header navbar-dark d-flex flex-column fixed-top" role="header">
      
    <?php anbColourBar(); ?>
    
    <div class="header-contact">
        <p class="header-contact-info mb-0"><span>Property Services</span> | <span><strong>Ashford</strong> +44 (0) 17233 690 799</span> <span><strong>Winchester</strong> +44 (0) 1962 920 082</span></p>
    </div>

      <div class="container">

  
        <nav class="navbar navbar-expand-lg" role="navigation">
          <a class="navbar-brand logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php anbLogo( 225 ); ?>
          </a>
          <a class="navbar-brand mobile-logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php anbMLogo( 64 ); ?>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php
                wp_nav_menu(
                  array(
                    'theme_location'  => 'headerMenu',
                    'menu_id'         => 'primary-menu',
                    'menu_class'      => 'navbar-nav',
                    'before'          => '<div class="menu-primary-menu-container">',
                    'after'           => '</div>',
                    'walker'          => new wp_bootstrap_navwalker()
                  )
                );
            ?>
          </div>

        </nav>

      </div>

    </header>
