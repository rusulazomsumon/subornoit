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
                               <h4>Company</h4>
                               <ul>
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="about.html">About Us</a></li>
                                   <li><a href="single-blog.html">Services</a></li>
                                   <li><a href="#">Cases</a></li>
                                   <li><a href="contact.html">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Services</h4>
                               <ul>
                                   <li><a href="#">Commercial Cleaning</a></li>
                                   <li><a href="#">Office Cleaning</a></li>
                                   <li><a href="#">Building Cleaning</a></li>
                                   <li><a href="#">Floor Cleaning</a></li>
                                   <li><a href="#">Apartment Cleaning</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Get in Touch</h4>
                               <ul>
                                <li><a href="#">152-515-6565</a></li>
                                <li><a href="#"> Demomail@gmail.com</a></li>
                                <li><a href="#">New Orleans, USA</a></li>
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
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
        <!-- for showing wp admint ber in the top -->
        <?php wp_footer(); ?>
    </body>
</html>
