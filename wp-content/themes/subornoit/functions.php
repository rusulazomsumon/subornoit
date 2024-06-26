<?php
    // language transalation setup 
    load_theme_textdomain('subornoit', get_template_directory().'/languages');

    // dynamic site/page title
    function subornoit_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails',array('post','slider','service','teams','testimonial','cases','madicine'));

        // registering manu
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'subornoit'),
            'footer-menu' => __('Footer Menu', 'subornoit'),
            'top-menu' => __('Topber Menu', 'subornoit')

        ));

        /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 150;
		$logo_height = 50;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);


    }
    // hocks for title
    add_action('after_setup_theme','subornoit_setup');

    // custom login page redirect
    function custom_login_url() {
        return home_url('/my-login/');
    }
    add_filter('login_url', 'custom_login_url');



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

    // *********************************************************************************************************
    // dynamic  madicine  using custom post 
    function subornoit_madicine(){
        $labels = array(
            'name'                  => _x( 'Madicine', 'Post type general name', 'subornoit' ),
            'subornoit'         => _x( 'Madicine', 'Post type singular name', 'subornoit' ),
            'menu_name'             => _x( 'Madicine', 'Admin Menu text', 'subornoit' ),
            'name_admin_bar'        => _x( 'Madicine', 'Add New on Toolbar', 'subornoit' ),
            'add_new'               => __( 'Add Madicine', 'subornoit' ),
            'add_new_item'          => __( 'Add New Madicine', 'subornoit' ),
            'new_item'              => __( 'New Madicine', 'subornoit' ),
            'edit_item'             => __( 'Edit Madicine', 'subornoit' ),
            'view_item'             => __( 'View Madicine', 'subornoit' ),
            'all_items'             => __( 'All Madicine', 'subornoit' ),
            'search_items'          => __( 'Search Madicine', 'subornoit' ),
            'parent_item_colon'     => __( 'Parent Madicine:', 'subornoit' ),
            'not_found'             => __( 'No Madicine found.', 'subornoit' ),
            'not_found_in_trash'    => __( 'No Madicine  found in Trash.', 'subornoit' ),
            'featured_image'        => _x( 'Madiciner Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,   
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'madicine' ),
                'capability_type'    => 'post',
                'menu_position'       => 11,
                'menu_icon'           => 'dashicons-plus-alt',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array('title', 'editor', 'thumbnail','excerpt'),
                // to enable gutenburg editor this code need, without by defult clasic activate
                'show_in_rest'       => true
                
            );
        
            register_post_type( 'madicine', $args );
    }
    add_action('init','subornoit_madicine');

    // *********************************************************************************************************

    // theme option with ACF 
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> __('Theme General Settings','subornoit'),
            'menu_title'	=> __('Theme Settings','subornoit'),
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
        // for  Home  page 
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Home Areas Settings','subornoit'),
            'menu_title'	=> __('Home Areas','subornoit'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        // for  Home  page 
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme  Contact  Page Settings','subornoit'),
            'menu_title'	=> __('Contact Page','subornoit'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        // for header section
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Header Settings','subornoit'),
            'menu_title'	=> __('Header','subornoit'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        // for footer section
        acf_add_options_sub_page(array(
            'page_title' 	=> __('Theme Footer Settings','subornoit'),
            'menu_title'	=> __('Footer','subornoit'),
            'parent_slug'	=> 'theme-general-settings',
        ));
        
    }

    // register sideber 
    // footer2
    function subornoit_sidebar(){
        // main sidebar
        register_sidebar(array(
            'name' 	        => __('Theme Main Sidebar','subornoit'),
            'id'	        => 'sidebar',
            'description'	=> __('Sidebar will show blog/post/category and others requred pages', 'subornoit'),
            'before_widget'  => '<li id="%1$s" class="widget %2$s">',
            'after_widget'   => "</li>\n",
            'before_title'   => '<h4">',
            'after_title'    => "</h4>\n",
        ));
        // footer 2 area 
        register_sidebar(array(
            'name' 	        => __('Theme Footer Widget 2','subornoit'),
            'id'	        => 'footer-2',
            'description'	=> __('Widgets in this area will be shown on footer.', 'subornoit'),
            'before_widget'  => '<li id="%1$s" class="widget %2$s">',
            'after_widget'   => "</li>\n",
            'before_title'   => '<h4">',
            'after_title'    => "</h4>\n",
        ));
        // footer 3
        register_sidebar(array(
            'name' 	        => __('Theme Footer Widget 3','subornoit'),
            'id'	        => 'footer-3',
            'description'	=> __('Widgets in this area will be shown on footer.', 'subornoit'),
            'before_widget'  => '<li id="%1$s" class="widget %2$s">',
            'after_widget'   => "</li>\n",
            'before_title'   => '<h4">',
            'after_title'    => "</h4>\n",
        ));
    }
    add_action('widgets_init', 'subornoit_sidebar');



    // end of funtion area
?>