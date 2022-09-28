<?php
    // language transalation setup 
    load_theme_textdomain('subornoit', get_template_directory().'/languages');
    // dynamic site/page title
    function subornoit_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails',array('post','slider','service','teams','testimonial','cases'));

        // registering manu
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'subornoit'),
            'footer-menu' => __('Footer Menu', 'subornoit'),
            'top-menu' => __('Topber Menu', 'subornoit')

        ));

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
    
// *********************************************************************************************************
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
                'supports'           => array( 'title', 'thumbnail', ),
                'show_in_rest'       => true
                
            );
        
            register_post_type( 'slider', $args );
    }
    add_action('init','subornoit_cpt');


    // *********************************************************************************************************
    // dynamic services  using custom post 
    function subornoit_services(){
        $labels = array(
            'name'                  => _x( 'Services', 'Post type general name', 'subornoit' ),
            'subornoit'         => _x( 'service', 'Post type singular name', 'subornoit' ),
            'menu_name'             => _x( 'Services', 'Admin Menu text', 'subornoit' ),
            'name_admin_bar'        => _x( 'service', 'Add New on Toolbar', 'subornoit' ),
            'add_new'               => __( 'Add Service', 'subornoit' ),
            'add_new_item'          => __( 'Add New Service', 'subornoit' ),
            'new_item'              => __( 'New Service', 'subornoit' ),
            'edit_item'             => __( 'Edit Service', 'subornoit' ),
            'view_item'             => __( 'View Service', 'subornoit' ),
            'all_items'             => __( 'All Service', 'subornoit' ),
            'search_items'          => __( 'Search Service', 'subornoit' ),
            'parent_item_colon'     => __( 'Parent Service:', 'subornoit' ),
            'not_found'             => __( 'No Services found.', 'subornoit' ),
            'not_found_in_trash'    => __( 'No Services found in Trash.', 'subornoit' ),
            'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'service' ),
                'capability_type'    => 'post',
                'menu_position'       => 5,
                'menu_icon'           => 'dashicons-analytics',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'thumbnail'),
                // to enable gutenburg editor this code need, without by defult clasic activate
                // 'show_in_rest'       => true
                
            );
        
            register_post_type( 'service', $args );
    }
    add_action('init','subornoit_services');

    // *********************************************************************************************************
    // dynamic tem member  using custom post 
    function subornoit_teams(){
        $labels = array(
            'name'                  => _x( 'teams', 'Post type general name', 'subornoit' ),
            'subornoit'         => _x( 'team', 'Post type singular name', 'subornoit' ),
            'menu_name'             => _x( 'teams', 'Admin Menu text', 'subornoit' ),
            'name_admin_bar'        => _x( 'team', 'Add New on Toolbar', 'subornoit' ),
            'add_new'               => __( 'Add Mmember', 'subornoit' ),
            'add_new_item'          => __( 'Add New Mmember', 'subornoit' ),
            'new_item'              => __( 'New Mmembers', 'subornoit' ),
            'edit_item'             => __( 'Edit Mmembers', 'subornoit' ),
            'view_item'             => __( 'View Teams', 'subornoit' ),
            'all_items'             => __( 'All Members', 'subornoit' ),
            'search_items'          => __( 'Search Member', 'subornoit' ),
            'parent_item_colon'     => __( 'Parent Member:', 'subornoit' ),
            'not_found'             => __( 'No teams found.', 'subornoit' ),
            'not_found_in_trash'    => __( 'No teams found in Trash.', 'subornoit' ),
            'featured_image'        => _x( 'Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,   
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'teams' ),
                'capability_type'    => 'post',
                'menu_position'       => 6,
                'menu_icon'           => 'dashicons-groups',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title', 'editor', 'thumbnail'),
                // to enable gutenburg editor this code need, without by defult clasic activate
                // 'show_in_rest'       => true
                
            );
        
            register_post_type( 'teams', $args );
    }
    add_action('init','subornoit_teams');

    // *********************************************************************************************************
    // dynamic  TESTIMONIALS using custom post 
    function subornoit_ttmls(){
        $labels = array(
            'name'                  => _x( 'Testimonial', 'Post type general name', 'subornoit' ),
            'subornoit'         => _x( 'Testimonial', 'Post type singular name', 'subornoit' ),
            'menu_name'             => _x( 'Testimonial', 'Admin Menu text', 'subornoit' ),
            'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'subornoit' ),
            'add_new'               => __( 'Add Testimonial', 'subornoit' ),
            'add_new_item'          => __( 'Add New Testimonial', 'subornoit' ),
            'new_item'              => __( 'New Testimonials', 'subornoit' ),
            'edit_item'             => __( 'Edit Testimonials', 'subornoit' ),
            'view_item'             => __( 'View Testimonials', 'subornoit' ),
            'all_items'             => __( 'All Testimonials', 'subornoit' ),
            'search_items'          => __( 'Search Testimonial', 'subornoit' ),
            'parent_item_colon'     => __( 'Parent Testimonial:', 'subornoit' ),
            'not_found'             => __( 'No Testimonial found.', 'subornoit' ),
            'not_found_in_trash'    => __( 'No Testimonial found in Trash.', 'subornoit' ),
            'featured_image'        => _x( 'Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,   
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'testimonial' ),
                'capability_type'    => 'post',
                'menu_position'       => 7,
                'menu_icon'           => 'dashicons-editor-quote',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array('thumbnail'),
                // to enable gutenburg editor this code need, without by defult clasic activate
                // 'show_in_rest'       => true
                
            );
        
            register_post_type( 'testimonial', $args );
    }
    add_action('init','subornoit_ttmls');

    // *********************************************************************************************************
    // dynamic  CACSES  using custom post 
    function subornoit_cases(){
        $labels = array(
            'name'                  => _x( 'Cases', 'Post type general name', 'subornoit' ),
            'subornoit'         => _x( 'Cases', 'Post type singular name', 'subornoit' ),
            'menu_name'             => _x( 'Cases', 'Admin Menu text', 'subornoit' ),
            'name_admin_bar'        => _x( 'Cases', 'Add New on Toolbar', 'subornoit' ),
            'add_new'               => __( 'Add Cases', 'subornoit' ),
            'add_new_item'          => __( 'Add New Cases', 'subornoit' ),
            'new_item'              => __( 'New Cases', 'subornoit' ),
            'edit_item'             => __( 'Edit Cases', 'subornoit' ),
            'view_item'             => __( 'View Cases', 'subornoit' ),
            'all_items'             => __( 'All Cases', 'subornoit' ),
            'search_items'          => __( 'Search Cases', 'subornoit' ),
            'parent_item_colon'     => __( 'Parent Cases:', 'subornoit' ),
            'not_found'             => __( 'No Cases found.', 'subornoit' ),
            'not_found_in_trash'    => __( 'No Cases found in Trash.', 'subornoit' ),
            'featured_image'        => _x( 'Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,   
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'cases' ),
                'capability_type'    => 'post',
                'menu_position'       => 8,
                'menu_icon'           => 'dashicons-analytics',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array('title', 'editor', 'thumbnail','excerpt'),
                // to enable gutenburg editor this code need, without by defult clasic activate
                'show_in_rest'       => true
                
            );
        
            register_post_type( 'cases', $args );
    }
    add_action('init','subornoit_cases');


    // end of funtion area
?>