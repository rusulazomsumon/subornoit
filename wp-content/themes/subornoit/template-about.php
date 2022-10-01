    <!-- including footer -->
    <?php
        /* 
        Template Name: About Page
        */
        get_header();
    ?>
   

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" 
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- ********************** About Area ******************* -->
        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/pertials/content','about'); ?>
        <!-- We Trusted End-->
      
         <!-- **********************   Area ******************* -->
        <!-- testimonial showing from template part -->
        <?php get_template_part('template-parts/pertials/content','testimonial'); ?>

        <!-- blog showing from template part -->
        <?php get_template_part('template-parts/pertials/content','blog'); ?>

    </main>
   <!-- including footer -->
   <?php
        get_footer();
    ?>