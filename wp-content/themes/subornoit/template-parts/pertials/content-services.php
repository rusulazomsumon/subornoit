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