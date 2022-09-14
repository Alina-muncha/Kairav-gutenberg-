<?php 
/**
 * Block Name: Certification section
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){ ?>

<div class="certification-section">
    <div class="certification-section__text"><?php the_field('left_text'); ?></div>
    <div class="certification-section__divider"></div>
    <a href="<?php the_field('link_for_logo'); ?>" target="_blank">
        <img class="certification-section__logo" draggable="false" src="<?php the_field('logo'); ?>"> </a>
</div>

 <?php }