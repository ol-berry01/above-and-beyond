<?php

    function anb_resources() {
        // Scripts
        wp_enqueue_script( 'anb_dist_vendors', get_template_directory_uri() . '/dist/js/vendors.js', array(), false, true  );
        wp_enqueue_script( 'anb_dist_scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), false, true  );
        wp_enqueue_script( 'anb_dist_main', get_template_directory_uri() . '/dist/js/main.js', array(), false, true  );
        // Stylesheets
        wp_enqueue_style( 'anb_fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css', NULL, microtime() );
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

    function bdac_widgets() {

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
    add_action( 'widgets_init', 'bdac_widgets' );

    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker(){
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }

    add_action( 'after_setup_theme', 'register_navwalker' );
