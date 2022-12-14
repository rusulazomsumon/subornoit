    <!-- including header -->
    <?php
        /* 
        Template Name:  Cases  Page
        */
        get_header();
    ?>

    <main>

        <!-- PAGE TITILE: showing form the template part -->
            <?php get_template_part('template-parts/pertials/content','breadcumb'); ?>

        <!-- Completed Cases Start -->
        <div class="completed-cases section-padding3">
            <div class="container">
                <div class="row">
                    <!-- dynamic caces query -->
                    <?php 
                    $args = array(
                        'post_type' => 'cases',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                        $query->the_post();
                        ?>
                        <!-- cases content -->
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-cases-img  size mb-30">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <!-- img hover caption -->
                                <div class="single-cases-cap single-cases-cap2">
                                   <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                   <!-- content will take p automatically -->
                                   <?php the_excerpt(); ?>
                                </div>
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
        <!-- Completed Cases end -->

    </main>
   <!-- including footer -->
   <?php
        get_footer();
    ?>