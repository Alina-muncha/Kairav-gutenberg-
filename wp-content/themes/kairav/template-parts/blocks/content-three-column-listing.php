<?php 
/**
 * Block Name: Three column listing
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){
     ?>

<div class="block-wrappers">
    <div class="container">
        <div class="row">
        <?php 
                if( have_rows('listing') ):
                    while( have_rows('listing') ) : the_row();
            ?>
            <div class="col-lg-4">
                <img href="" src="<?php the_sub_field('image');?>" class="fund-image image-center"></a>                 
                <h5 class="fund-heading"> <a href="<?php the_sub_field('image-title_link');?>" class=""> <?php the_sub_field('title');?></a></h5>
                <hr class="seperator">
            </div>

            <?php endwhile;  endif; ?>
           
        </div>
    </div>
</div>

<?php }