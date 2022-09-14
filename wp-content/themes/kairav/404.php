<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kairav
 */

get_header();
?>

        <section class="footer-img" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/banner2.jpg)">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-img-title p">404 Error</div>
                        <div class="footer-img-text p">Page Not Found</div>
                    </div>            
                </div>    
        </section>
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kairav' ); ?></h1>
				
			</header><!-- .page-header -->

		
		</section><!-- .error-404 -->



<?php
get_footer();
