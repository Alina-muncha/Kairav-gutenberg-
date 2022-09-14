<?php 
/**
 * Block Name: Title with description
 *
 * This is the template that displays the testimonial block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){ ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="">
                        <div class="blog-item blog-single">
                            <div class="blog-media">
                                <img src="<?php the_field('full_width_image'); ?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php }