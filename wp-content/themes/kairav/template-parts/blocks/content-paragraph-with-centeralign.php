<?php 
/**
 * Block Name: Home banner
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){
     $section_btn = get_field('section_button_link'); 
     ?>
     <div class="page-container">
    <div class="container">
        <div class="page-title">
            <h1 class="h"><?php the_field('section_header'); ?></h1>
        </div>
        <div class="page-desp">
            <?php the_field('section_paragraph'); ?>
        </div>
        <?php if(!empty($section_btn)){
            ?>
        <a href="<?php echo $section_btn['url']; ?>" class="readmore"><?php echo $section_btn['title']; ?></a>
        <?php } ?>
    </div>
</div>

     <?php }
    

     