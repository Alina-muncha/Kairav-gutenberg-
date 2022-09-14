<?php 
/**
 * Block Name: Blog listing
 *
 * This is the template that displays the blog-listing block.
 */
$enable_section= get_field('enable_section');
 if($enable_section){
?> 
 
 <div class="block-wrappers">
    <div class="container">
        <div class="row">

        <?php 
                    $args = array( 
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        'order' => 'ASC',
                       );

                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>" ><img src="<?php the_post_thumbnail_url(); ?>" class="fund-image image-center"/></a>                 
                <h5 class="fund-heading"> <a href="<?php the_permalink(); ?>" class=""> <?php the_title(); ?></a></h5>
                <p><?php the_excerpt(); ?></p>
                <hr class="seperator">
            </div>

            <?php endwhile; 
            wp_reset_postdata(); ?>
           
        </div>
    </div>
</div>

<?php }