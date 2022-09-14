<?php 
/**
 * Block Name: Two column section
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){ ?>

<div class="inner-page-container">
    <div class="container clearfix">
        <div class="left-container">
            <div class="inner-page-title">
                <h1 class="h"><?php the_field('title'); ?></h1>
            </div>
            <div class="page-desp">
            <?php 
                if( have_rows('left_paragraph') ):
                    while( have_rows('left_paragraph') ) : the_row();
            ?>
                <p><?php the_sub_field('description'); ?></p>
                    <?php endwhile; endif; ?>
            </div>
        </div>
        <div id="sidebar" class="right-container">
            <?php 
                if( have_rows('right_image') ):
                    while( have_rows('right_image') ) : the_row();
            ?>
            <p class="simple-image"> <img src="<?php the_sub_field('image'); ?>" class="attachment-full size-full img-responsive"></p>

            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

  <?php }