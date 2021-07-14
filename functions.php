<?php

    function anb_resources() {
        // Scripts
        wp_enqueue_script( 'anb_dist_vendors', get_template_directory_uri() . '/dist/js/vendors.js', array(), false, true  );
        wp_enqueue_script( 'anb_dist_scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), false, true  );
        wp_enqueue_script( 'anb_dist_main', get_template_directory_uri() . '/dist/js/main.js', array(), false, true  );
        // Stylesheets
        wp_enqueue_style( 'anb_fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', NULL, microtime() );
        wp_enqueue_style( 'anb_bootstrap_icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', NULL, microtime() );
        wp_enqueue_style( 'anb_bootstrap_styles', get_template_directory_uri() . '/dist/css/bootstrap.css', NULL, microtime() );
        wp_enqueue_style( 'anb_main_styles', get_template_directory_uri() . '/dist/css/main.css', NULL, microtime() );
        wp_enqueue_style( 'anb_styles', get_stylesheet_uri(), NULL, microtime() );
    }

    add_action( 'wp_enqueue_scripts', 'anb_resources' );

    function anb_features() {
        add_theme_support( 'title-tag' );
        register_nav_menu( 'headerMenu', 'Header Menu' );
    }

    add_action( 'after_setup_theme', 'anb_features' );

    /**
     * Register Widgets
     */

    function anb_widgets() {

        register_sidebar( array(
            'name'          => 'Footer Left',
            'id'            => 'footer_menu_left',
            'before_title'  => '',
            'after_title'   => ''
        ) );

        register_sidebar( array(
            'name'          => 'Footer Right',
            'id'            => 'footer_menu_right',
            'before_title'  => '',
            'after_title'   => ''
        ) );
    
    }
    add_action( 'widgets_init', 'anb_widgets' );

    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker(){
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }

    add_action( 'after_setup_theme', 'register_navwalker' );

    /**
     *  Check if ACF is activated
     */
    if ( function_exists( 'acf_register_block_type' ) ) {
        /**
         * Adding specific ACF action
         */
        add_action( 'acf/init', 'register_acf_block_types' );
    }

    function register_acf_block_types() {

    /**
     * Content Blocks
     */

        /**
         * About Block
         */
        acf_register_block_type(
            array(
                'name'              => 'about',
                'title'             => __( 'About' ),
                'description'       => __( 'About block' ),
                'render_template'   => 'inc/template-parts/about-block.php',
                'icon'              => 'info',
                'keywords'          => array(
                                        'about',
                                        'about us'
                                    )
                )
        );

        /**
         * Hero Block
         */
        acf_register_block_type(
            array(
                'name'              => 'hero',
                'title'             => __( 'Hero' ),
                'description'       => __( 'Hero block' ),
                'render_template'   => 'inc/template-parts/hero-block.php',
                'icon'              => 'info',
                'keywords'          => array(
                                        'hero'
                                    )
                )
        );

        /**
         * Services Block
         */
        acf_register_block_type(
            array(
                'name'              => 'services',
                'title'             => __( 'Services' ),
                'description'       => __( 'Services block' ),
                'render_template'   => 'inc/template-parts/services-block.php',
                'icon'              => 'admin-customizer',
                'keywords'          => array(
                                        'services'
                                    )
                )
        );

        /**
         * Portfolio Block
         */
        acf_register_block_type(
            array(
                'name'              => 'portfolio',
                'title'             => __( 'Portfolio' ),
                'description'       => __( 'Portfolio block' ),
                'render_template'   => 'inc/template-parts/portfolio-block.php',
                'icon'              => 'images-alt',
                'keywords'          => array(
                                        'portfolio'
                                    )
                )
        );

        /**
         * Contact Block
         */
        acf_register_block_type(
            array(
                'name'              => 'contact',
                'title'             => __( 'Contact' ),
                'description'       => __( 'Contact block' ),
                'render_template'   => 'inc/template-parts/contact-block.php',
                'icon'              => 'email-alt2',
                'keywords'          => array(
                                        'contact'
                                    )
                )
        );
    }