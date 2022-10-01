<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- title will show dynamically -->
        <!-- <title>Consulting HTML-5 Template </title> -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

		<!-- CSS here: linked in the functions.php -->
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/style.css"> -->
        <!-- for showing wp admint ber in the top -->
        <?php wp_head(); ?>
   </head>
<!-- ************************************************************************************************************
    **********************************************Main Body ********************************************** -->
   <body <?php body_class(); ?>>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/sbitlogo.png" alt="suborno it logo">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <!-- dynamic top header content -->
                                    <?php 
                                        $header_address = get_field('header_address', 'option');
                                        $header_email = get_field('header_mail', 'option');
                                    ?>
                                    <ul>     
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i><?php echo $header_address; ?> 
                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i><?php echo $header_email; ?> 
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <!-- header socila linkin area, activate form ACM  -->
                                        <?php 
                                            $header_socials = get_field('header_socials', 'option');
                                            foreach($header_socials as $header_social){
                                        ?>
                                            <li>
                                                <!-- link from dynamic -->
                                                <a href="<?php echo $header_social['header_social_link']; ?>" target="_blank">
                                                    <!-- Icon from dynamic content -->
                                                    <i class="<?php echo $header_social['header_social_icon']['value']; ?>"></i>
                                                </a>
                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/sbitlogo.png" alt="suborno IT logo" width="120px" height="auto"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <!-- by defult: menu class main-menu, dropdown class: sub-menu -->
                                    <nav>
                                        <?php 
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary-menu'
                                            ));
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>