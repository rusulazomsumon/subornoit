<!-- **************************** About Area ******************************************** -->
        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <!-- dynamic about content -->
                    <?php 
                        $about_image = get_field('about_image', 'option');
                        $about_title = get_field('about_title', 'option');
                        $company_description = get_field('company_description', 'option');
                        $button_text = get_field('button_text', 'option');
                        $button_link = get_field('button_link', 'option');
                    ?>
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['title']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                           <h2><?php echo $about_title; ?></h2>
                           <p><?php echo $company_description; ?></p>
                            <a href="<?php echo $button_link ?>" class="btn trusted-btn"><?php echo $button_text; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- We Trusted End-->