<?php 
/**
 * Block Name: Faq page
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){ ?>

<div class="accordion-body">
  <div class="container accordion">
    <h1><?php the_field('faq_title'); ?></h1>
    <br>
    <br>

    <?php if( have_rows('faqs_repeater') ):
    $counter = 1; 
    while( have_rows('faqs_repeater') ) : the_row(); ?>

    <div class="container faq-container <?php if($counter==1){ echo "active"; }?>">
      <div class="label"><?php the_sub_field('questions'); ?></div>
      <div class="content"><?php the_sub_field('answers'); ?></div>
    </div>
    <hr>
    <?php $counter++; endwhile; endif; ?>
    
    
  </div>
  </div>

 <?php }