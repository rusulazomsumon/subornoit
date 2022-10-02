    <!-- including header -->
    <?php
        /* 
        Template Name:  Service Page
        */
        get_header();
    ?>

    <main>

        <!-- PAGE TITILE: showing form the template part -->
        <?php get_template_part('template-parts/pertials/content','breadcumb'); ?>

        <!-- services Area Start-->
        <!-- Services showing from template part -->
        <?php get_template_part('template-parts/pertials/content','services'); ?>
        <!-- services Area End-->
        

        <!-- blog showing from template part -->
        <?php get_template_part('template-parts/pertials/content','blog'); ?>

    </main>
   <!-- including footer -->
   <?php
        get_footer();
    ?>