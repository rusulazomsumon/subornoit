    <!-- including footer -->
    <?php
        /* 
        Template Name: About Page
        */
        get_header();
    ?>
   

    <main>

        <!-- PAGE TITILE: showing form the template part -->
        <?php get_template_part('template-parts/pertials/content','breadcumb'); ?>

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