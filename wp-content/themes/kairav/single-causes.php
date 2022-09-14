<?php get_header(); ?>

<section class="footer-img" style="background-image: url(<?php the_field('banner_image'); ?>)">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-img-title p">The Cause</div>
                <div class="footer-img-text p"><?php the_title(); ?></div>
            </div>            
        </div>    
</section>

<section>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="">
                        <div class="blog-item blog-single">
                            <div class="blog-media">
                                <img src="<?php the_field('thumbnail_image'); ?>" alt="" />
                            </div>
                            <div class="blog-content">
                                <h3 class="h"><?php the_title(); ?></h3>
                                <h1 class="amount">Amount to be raised: <?php the_field('amount_to_be_raised'); ?></h1>
                                
                                <div class= "page-desp">

                                    <?php the_field('description'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               

            </div>

            <div class="row cause-background">
                <div class="col-lg-6 column1" style="background-image: url(<?php the_field('left_image'); ?>)">

                </div>
                <div class="col-lg-6" style="padding-left: 50px; padding-right:50px; padding-top: 25px;">
                    <h2 class="h"><?php the_field('left_image_title'); ?></h2>
                    <p class=" donate1 page-desp"><?php the_field('left_image_description'); ?></p>
                   <?php 
                   $title = get_the_title(); 
                   echo do_shortcode( '[wp_paypal button="donate" name="'. $title . '"]' ) ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); 