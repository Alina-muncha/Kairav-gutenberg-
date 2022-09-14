<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kairav
 */

?>

<section class="footer-img" style="background-image: url(<?php the_field('footer_background_image', 'option'); ?>)">
        <div class="row">
            <div class="col-lg-6 col-xs-6">
                <div class="footer-img-title p"><?php the_field('footer_title', 'option'); ?></div>
                <div class="footer-img-text p"><?php the_field('footer_text', 'option'); ?></div>
            </div>
            <div class="col-lg-6 col-xs-6 play-icon flex-container center">
            <a href="<?php the_field('footer_video_link'); ?>" class="flex-item play-button"><i class="fa fa-play-circle fa-5x"></i></a>            
            </div>
        </div>
    
</section>
<div class="footer">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-3">
                <h2><?php the_field('column1_title','option'); ?></h2>
                    <ul>
                        <?php if( have_rows('column_1','option') ):
                        while( have_rows('column_1','option') ) : the_row(); ?>
                            <li><?php the_sub_field('list'); ?></li>
                        <?php endwhile; endif; ?>
                    </ul>                
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <h2><?php the_field('column2_title','option'); ?></h2>
                <ul>
                <?php if( have_rows('column_2','option') ):
                        while( have_rows('column_2','option') ) : the_row(); ?>
                    <li><a href="<?php the_sub_field('list_link'); ?>"><?php the_sub_field('list'); ?></a></li>
                <?php endwhile; endif; ?>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <h2><?php the_field('column3_title','option'); ?></h2>
                <ul>
                <?php if( have_rows('column_3','option') ):
                        while( have_rows('column_3','option') ) : the_row(); ?>
                    <li><a href="<?php the_sub_field('list_link'); ?>"><?php the_sub_field('list'); ?></a></li>
                <?php endwhile; endif; ?>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <h2><?php the_field('column4_title','option'); ?></h2>
                <div class="social-icon-wrapper">
                    <a href="<?php the_field('facebook_link'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a> 
                    <a href="<?php the_field('insta_link'); ?>" target="_blank" title="Flickr"><i class="fa fa-instagram"></i></a> 
                    <a href="<?php the_field('twitter_link'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a> 
                    <a href="<?php the_field('youtube_link'); ?>" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
/*<div class="donation-btn"> <a href="#"> <img src="<?php the_field('side_give_logo','option'); ?>" alt="Give"> </a></div> */
?>

<a href="#" id="scrollToTop"><i class="fa fa-angle-up"></i></a>
</div>
<script defer src="./js/jquery-migrate.js"></script>
<script src="./js/index.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>
</html>
