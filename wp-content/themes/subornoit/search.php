<!-- connection Header -->
<?php get_header(); ?>

    <!-- 404 content -->
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h4> 
                        <?php printf(
                             // transalators: %s: Search term 
                             esc_html__('Result for "%s"','subornoit'),
                             '<span class="page-description search-term">'.esc_html(get_search_query() ) . '</span>'
                        );
                        ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- search result area  -->
    <section class="search-result">
        <div class="container">
            <div class="row">
                <!-- loop for showing search result -->
                <?php 
                    while(have_posts()){
                        the_post();
                    ?>
                    <!-- script code for showing articles-->
                        <div class="col-md-4">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                 <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" 
                                    alt=""><?php the_post_thumbnail('', array('class' => 'card-img rounded-0')); ?>
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo get_the_date('j'); ?></h3>
                                    <p><?php echo get_the_date('M'); ?></p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink() ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                                <ul class="blog-info-link">
                                    <li><i class="fa fa-user"></i> <?php the_category(' '); ?></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        </div>

                    <!-- end of loop and php bloc -->
                    <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

<!-- connection Header -->
<?php get_footer(); ?>