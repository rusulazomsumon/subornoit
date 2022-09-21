<?php
    // dynamic site/page title
    function subornoit_setup(){
        add_theme_support('title-tag');
    }
    // hocks for title
    add_action('after_setup_theme','subornoit_setup');

    // activing assects style and js
    function subornoit_assets() {
        // css files
        wp_enqueue_style( 'stylesheet', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'owl_carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'fontawesome-all', get_template_directory_uri().'/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'main', get_stylesheet_uri() );

        // js files 
        wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/bootstrap.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'jquery_slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'owl_carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'slick_min', get_template_directory_uri().'/assets/js/slick.min.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'jquery_sticky', get_template_directory_uri().'/assets/js/jquery.sticky.js', 
        array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'mainJs', get_template_directory_uri().'/assets/js/main.js', 
        array('jquery'), '1.0.0', true);    

    }
    add_action( 'wp_enqueue_scripts', 'subornoit_assets' );
?>