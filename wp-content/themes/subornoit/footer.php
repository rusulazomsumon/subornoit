<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- company logo, activate from acf  -->
                            <!-- dynamic top header content -->
                            <?php 
                                $footer_logo = get_field('footer_logo', 'option');
                                $footer_description = get_field('footer_description', 'option');
                            ?>
                            <div class="footer-logo">
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo $footer_logo['url']; ?>" 
                                    alt="<?php echo $footer_logo['title']; ?>" width="130" height="auto"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $footer_description ?></p>
                               </div>
                            </div>
                            <!-- social icon Dynamicfication , its followed by the header menu -->
                            <div class="footer-social">
                                <?php 
                                    $header_socials = get_field('header_socials', 'option');
                                    foreach($header_socials as $header_social){
                                ?>
                                <a href="<?php echo $header_social['header_social_link']; ?>" target="_blank">
                                    <i class="<?php echo $header_social['header_social_icon']['value']; ?>"></i>
                                </a>
                                <!-- rest of loop -->
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <?php 
                                    // if user active footer then he/she will see content
                                    if(is_active_sidebar('footer-2')){
                                        dynamic_sidebar('footer-2');
                                    }  
                               ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                                <?php 
                                    // if user active footer then he/she will see content
                                    if(is_active_sidebar('footer-3')){
                                        dynamic_sidebar('footer-3');
                                    }  
                               ?>
                           </div>
                       </div>
                   </div>

                   <!-- footer column 4 -->
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                            <!-- dinamic col4 title form ACM -->
                                <?php 
                                    $col4_title = get_field('col4_title', 'option');
                                ?>
                                <!-- Columb 4 title heading -->                
                               <h4><?php echo $col4_title; ?></h4>
                                <!-- list items -->
                                <ul>
                                    <!-- company logo, activate from acf  -->
                                    <!-- dynamic top header content -->
                                    <?php 
                                        $col4_content = get_field('col4_content', 'option');
                                        foreach($col4_content as $col4_cont){
                                            ?>
                                                <li>
                                                    <!-- link from dynamic -->
                                                    <a href="<?php echo $col4_cont['link_url']; ?>" target="_blank">
                                                        <!-- Text for dynamic content -->
                                                        <i><?php echo $col4_cont['link_text']; ?></i>
                                                    </a>
                                                </li>
                                        <?php
                                            }
                                    ?>
                                </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> 
                                    All rights reserved | Developed by 
                                        <i class="ti-heart" aria-hidden="true"></i> by 
                                        <a href="https://github.com/rusulazomsumon" target="_blank">Rusul Azom Sumon</a>
                                </p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
    <!-- Back To Top -->
        <!-- for showing wp admint ber in the top -->
        <?php wp_footer(); ?>
    </body>

    <!-- back to top button -->
    <div class="bk_top bg-dark">
        <a class="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

</html>
