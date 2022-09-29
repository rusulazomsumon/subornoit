    <!-- including header -->
    <?php
        /*
        Template Name: Home Page
        */
        get_header();
    ?>
    <main >

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <!-- dynamic slider query -->
                <?php 
                    $args = array(
                        'post_type' => 'slider',
                        'posts_per_page' => 3,
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                        $query->the_post();
                ?>
                        <!-- slider scripts  -->
                        <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php 
                        the_post_thumbnail_url(); ?>')">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10 mx-auto">
                                        <div class="hero__caption">
                                            <p><?php the_field('sub_heading'); ?></p>
                                            <h1><?php the_title(); ?></h1>
                                            <!-- Hero-btn -->
                                            <div class="hero__btn">
                                                <a href="<?php the_field('button_url'); ?>" class="btn hero-btn"><?php the_field('button_text'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rest of loop -->
                <?php
                    }
                    wp_reset_postdata();
                ?>

                
            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <!-- dynamic about content -->
                    <?php 
                        $about_image = get_field('about_image', 'option');
                        $about_title = get_field('about_title', 'option');
                        $company_description = get_field('company_description', 'option');
                        $button_text = get_field('button_text', 'option');
                        $button_link = get_field('button_link', 'option');
                    ?>
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['title']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2><?php echo $about_title; ?></h2>
                           <p><?php echo $company_description; ?></p>
                            <a href="<?php echo $button_link ?>" class="btn trusted-btn"><?php echo $button_text; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <!-- Services showing from template part -->
        <?php get_template_part('template-parts/pertials/content','services'); ?>
        <!-- services Area End-->

        <!-- Request Back Start -->
        <div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3>Request for  Call Back</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                            <a href="#" class="btn trusted-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- slider Heading -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Completed Cases</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                                quUt enim ad minim veniam.
                                quis nostrud exercitation ullamco laboris 
                                nierci si ut.</p>
                            <a href="gallery.html" class="border-btn border-btn2">See more</a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                            <div class="single-cases-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/completed_case_1.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                    <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                            <div class="single-cases-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/completed_case_2.png" alt="">
                                <!-- img hover caption -->
                               <div class="single-cases-cap">
                                   <h4><a href="case_details.html">Marketing Strategy</a></h4>
                                    <p>Completely impact synergistic mindshare whereas premium services.</p>
                                    <span>Advisory</span>
                               </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Completed Cases end -->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Teams</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- dynamic member  query -->
                    <?php 
                        $args = array(
                            'post_type' => 'teams',
                            'order' => 'ASC',
                            'posts_per_page' => 6
                        );
                        $query = new WP_Query($args);
                        while($query -> have_posts()){
                            $query->the_post();
                            ?>
                            <!-- teams content -->
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <div class="single-profile mb-30">
                                    <!-- Front -->
                                    <div class="single-profile-front">
                                        <div class="profile-img">
                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                        <div class="profile-caption">
                                            <h4><?php the_title(); ?><span><?php the_content(); ?></span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- team member content End -->
                            <!-- rest of loop -->
                            <?php
                                }
                                wp_reset_postdata();
                            ?>
                    <!-- members end -->
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- testimonial showing from template part -->
        <?php get_template_part('template-parts/pertials/content','testimonial'); ?>

        <!-- blog showing from template part -->
        <?php get_template_part('template-parts/pertials/content','blog'); ?>
        

    </main>
<!-- including footer -->
    <?php
        get_footer();
    ?>
   