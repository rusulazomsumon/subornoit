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
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team/wetrusted.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2>We are more trusted then 5000 clients</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru  dolor sit amet, consectetur adipn.</p>
                            <a href="#" class="btn trusted-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- We Trusted End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- dynamic service query -->
                    <?php 
                        $args = array(
                            'post_type' => 'service',
                            'posts_per_page' => 6
                        );
                        $query = new WP_Query($args);
                        while($query -> have_posts()){
                            $query->the_post();
                            ?>
                            <!-- services content -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-services text-center">
                                    <div class="services-icon">
                                        <img src="<?php the_post_thumbnail_url(); ?>">
                                    </div>
                                    <div class="services-caption">
                                        <h4><?php the_title(); ?></h4>
                                        <!-- service description: no need <p> beacuse its come with the_content() auto <p> -->
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- serveice content End -->
                            <!-- rest of loop -->
                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                
                </div>
            </div>
        </div>
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

        <!-- Testimonial Start -->
        <div class="testimonial-area fix">
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- php code for single testimonial and sql query -->
                            <!-- dynamic testimonial  query -->
                            <?php 
                                $args = array(
                                    'post_type' => 'testimonial',
                                    'order' => 'ASC',
                                    'posts_per_page' => 3
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query->the_post();
                                    ?>
                                    <!-- Single Testimonial scripts -->
                                    <div class="single-testimonial pt-65">
                                        <!-- Testimonial tittle -->
                                        <div class="testimonial-icon mb-45">
                                            <img src="<?php the_post_thumbnail_url() ?>" class="ani-btn " alt=" clints of suborno it">
                                        </div>
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-caption text-center">
                                            <p><?php the_field('quotes'); ?></p>
                                            <!-- Rattion -->
                                            <div class="testimonial-ratting">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rattiong-caption">
                                                <span><?php the_field('clints_name'); ?><span> - <?php the_field('degignations'); ?></span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single testimonials end -->
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
        <!-- Testimonial End -->

        <!-- Recent News Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- php code for single testimonial and sql query -->
                    <!-- dynamic testimonial  query -->
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'order' => 'DSC',
                            'posts_per_page' => 3
                        );
                        $query = new WP_Query($args);
                        while($query -> have_posts()){
                            $query->the_post();
                            ?>
                            <!-- Single News  scripts -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-recent-cap mb-30">
                                    <div class="recent-img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption($post); ?>">
                                    </div>
                                    <div class="recent-cap">
                                        <span>
                                            <?php  
                                                $catgs = get_the_category();
                                                foreach($catgs as $catg){
                                                    echo $catg -> name.", ";
                                                }
                                            ?>
                                        </span>
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <p><?php the_date(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- single News script  end -->
                        <!-- rest of loop -->
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                    <!-- recent single news end -->
                </div>
            </div>
        </div>
        <!-- TODO:see all pagignation  -->
        <!-- Recent Area End-->

        

    </main>
<!-- including footer -->
    <?php
        get_footer();
    ?>
   