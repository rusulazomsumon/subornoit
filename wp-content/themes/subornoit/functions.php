<?php
    // dynamic site/page title
    function subornoit_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails',array('slider'));

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

    // dynamic slider using custom post 
    function subornoit_cpt(){
        $labels = array(
            'name'                  => _x( 'Sliders', 'Post type general name', 'subornoit' ),
            'subornoit'         => _x( 'Slider', 'Post type singular name', 'subornoit' ),
            'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'subornoit' ),
            'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'subornoit' ),
            'add_new'               => __( 'Add Slider', 'subornoit' ),
            'add_new_item'          => __( 'Add New Slider', 'subornoit' ),
            'new_item'              => __( 'New Slider', 'subornoit' ),
            'edit_item'             => __( 'Edit Slider', 'subornoit' ),
            'view_item'             => __( 'View Slider', 'subornoit' ),
            'all_items'             => __( 'All Slider', 'subornoit' ),
            'search_items'          => __( 'Search Slider', 'subornoit' ),
            'parent_item_colon'     => __( 'Parent Slider:', 'subornoit' ),
            'not_found'             => __( 'No Sliders found.', 'subornoit' ),
            'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'subornoit' ),
            'featured_image'        => _x( 'Sliders Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'slider' ),
                'capability_type'    => 'post',
                'menu_position'       => 2,
                'menu_icon'           => 'dashicons-slides',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'thumbnail', 'excerpt', ),
                'show_in_rest'       => true
                
            );
        
            register_post_type( 'slider', $args );
    }
    add_action('init','subornoit_cpt');


    // end of funtion area
?>