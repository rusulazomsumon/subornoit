<!-- connection Header -->
<?php get_header(); ?>

<!-- PAGE TITILE: showing form the template part -->
<?php get_template_part('template-parts/pertials/content','breadcumb'); ?>

<!-- custom page design -->
<section class="custom-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                </h4>
            </div>
        </div>
    </div>
</section>

<!-- page sideber -->

<!-- connection Header -->
<?php get_footer(); ?> 