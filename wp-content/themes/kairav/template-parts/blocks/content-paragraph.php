<?php 
/**
 * Block Name: Paragraph
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){ ?>

<div class="inner-page-container">
    <div class="container clearfix">
        <div class="">
            <div class="inner-page-title">
                <h1 class="h"><?php the_field('contact_title');  ?></h1>
            </div>
            <div class="page-desp">
                <?php the_field('content'); ?>
            </div>
        </div>
    </div>
</div>

 <?php }