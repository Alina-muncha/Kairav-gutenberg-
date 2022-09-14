<?php 
/**
 * Block Name: Default banner
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){ ?>

<section class="footer-img" style="background-image: url(<?php the_field('default_banner_image'); ?>)">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-img-title p"><?php the_field('default_banner_title'); ?></div>
                <div class="footer-img-text p"><?php the_field('default_banner_text'); ?></div>
            </div>            
        </div>    
</section>

<?php }