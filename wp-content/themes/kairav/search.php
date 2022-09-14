<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kairav
 */

get_header();
?>

<section class="footer-img" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/banner2.jpg)">
        <div class="row">
            <div class="col-lg-12">
				<div class="footer-img-title p"></div>
                <div class="footer-img-text p"><?php  printf( esc_html__( 'Search Results for: %s', 'kairav' ), '' . get_search_query() . '' );  ?></div>
            </div>            
        </div>    
</section>

<div class="block-wrappers">
    <div class="container">
        <div class="row">

		<?php
			if ( have_posts() ) :
				$count=0;
            while (have_posts()) : the_post(); 
			
			if ( get_post_type( get_the_ID() ) == 'post' ) {

            ?>
            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>" ><img src="<?php the_post_thumbnail_url(); ?>" class="fund-image image-center"/></a>                 
                <h5 class="fund-heading"> <a href="<?php the_permalink(); ?>" class=""> <?php the_title(); ?></a></h5>
                <p><?php the_excerpt(); ?></p>
                <hr class="seperator">
            </div>

            <?php $count++; 
			} endwhile; 
			if($count < 1 ):
				echo '<h3>Sorry, nothing was found.</h3>';
				endif;
			
			else :

			// get_template_part( 'template-parts/content', 'none' );
			?>
			<h3>Sorry, nothing was found</h3>
			<?php

			endif;
			?>
           
        </div>
    </div>
</div>

	

<?php

get_footer();
