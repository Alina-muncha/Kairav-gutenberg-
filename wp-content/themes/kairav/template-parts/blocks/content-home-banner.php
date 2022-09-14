<?php 
/**
 * Block Name: Home banner
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){
     ?>
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-inner" role="listbox">
            <?php 
                if( have_rows('banner') ):
                    $counter= 1;
                    while( have_rows('banner') ) : the_row();
            ?>
            <a class="item <?php if ($counter==1) echo 'active'; ?>" style="background-image:url(<?php the_sub_field('image'); ?>)">
                <div class="item-wrap">
                    <div class="container">
                        <div class="carousel-caption p"><?php the_sub_field('banner_text'); ?>
                        </div>
                    </div>
                </div>
            </a>
            <?php $counter++; endwhile;  endif; ?>
           
        </div>
        <div class="control-arrow"> <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-caret-left"></i></a> <a class="right carousel-control" href="#myCarousel" role="button"
                data-slide="next"> <i class="fa fa-caret-right"></i></a></div>
    </div>
</div>
     <?php
 }
