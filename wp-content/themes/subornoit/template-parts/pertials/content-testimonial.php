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