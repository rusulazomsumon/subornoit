<!-- Recent News Area Start -->
<div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <!-- Title Transalate Activision and sec for security (hardcode hiding) -->
                            <h2><?php echo esc_html__('Our Letest News', 'subornoit'); ?></h2>
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
        