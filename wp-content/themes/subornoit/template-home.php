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
        <!-- ********************** About Area ******************* -->
        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/pertials/content','about'); ?>
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
                        <!-- dynamic Request Callback Content -->
                        <?php 
                            $home_request_call_back = get_field('home_request_call_back', 'option');
                            $request_cb_content = get_field('request_cb_content', 'option');
                            $rcb_button_text = get_field('rcb_button_text', 'option');
                            $rcb_button_url = get_field('rcb_button_url', 'option');
                        ?>
                        <div class="request-content">
                            <h3><?php echo $home_request_call_back; ?></h3>
                            <p><?php echo $request_cb_content; ?></p>
                            <a href="<?php echo $rcb_button_url; ?>" class="btn trusted-btn"><?php echo $rcb_button_text; ?></a>
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
                        <!-- dynamic Request Cases Content -->
                        <?php 
                            $ca_titile = get_field('ca_titile', 'option');
                            $ca_content = get_field('ca_content', 'option');
                            $ca_button_text = get_field('ca_button_text', 'option');
                            $ca_button_url = get_field('ca_button_url', 'option');
                        ?>
                        <div class="single-cases-info mb-30">
                            <h3><?php echo $ca_titile; ?></h3>
                            <p><?php echo $ca_content; ?></p>
                            <a href="<?php echo $ca_button_url; ?>" class="border-btn border-btn2"><?php echo $ca_button_text; ?></a>
                        </div>
                    </div>
                    <!-- OwL -->
                    <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                        <div class=" completed-active owl-carousel"> 
                            <!-- dynamic caces query -->
                            <?php 
                            $args = array(
                                'post_type' => 'cases',
                                'posts_per_page' => 3,
                                'order' => 'ASC'
                            );
                            $query = new WP_Query($args);
                            while($query -> have_posts()){
                                $query->the_post();
                                ?>
                                <!-- cases content -->
                                <div class="single-cases-img">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        <!-- img hover caption -->
                                    <div class="single-cases-cap">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <?php the_excerpt(); ?>
                                            <span>Advisory</span>
                                    </div>
                                </div>
                                <!-- cases content End -->
                                <!-- rest of loop -->
                            <?php
                                }
                                wp_reset_postdata();
                            ?>
                            
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
   