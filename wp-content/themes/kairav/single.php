<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kairav
 */

get_header();
?>

<section class="footer-img" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2022/03/banner2.jpg)">
        <div class="row">
            <div class="col-lg-12">
            <div class="footer-img-title p">BLOG</div>
                <div class="footer-img-text p"><?php the_title(); ?></div>
            </div>            
        </div>    
</section>
<section>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <div class="">
                        <div class="blog-item blog-single">
                            <div class="blog-media">
                                
                                <?php $product_image = get_the_post_thumbnail_url();
                                    if($product_image){ ?>  
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                    <?php  }
                                else{ ?>
                                <img src="<?php echo DEFAULT_IMAGE; ?>" alt="" />
                                
                                <?php  }?>
                            </div>
                            <div class="blog-content">
                                <h2 class="h"><?php the_title(); ?></h2>
                                
                                <div class="page-desp blog-detail">

                                    <p><?php the_content(); ?></p>

                                </div>
                            </div>

                            <div class="blog-extra">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-7 xs-mb">
                                        <div class="tag-cloud">
                                            <span><i class="fa fa-tags"></i> tags: </span>
                                            <?php $tags = get_the_tags($post -> ID);
											$html = '<a class="tag-item">';
											foreach ( $tags as $tag ) {
												$tag_link = get_tag_link( $tag->term_id );

												$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
												$html .= "{$tag->name} </a>";
											}
											$html .= '</a>';
											echo $html; ?>
                                            
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 mt-50-xs">

                    <aside class="sidebar">

                        <div class="sidebar-inner no-border for-blog">
                            <div class="sidebar-module">
                                <h4 class="sidebar-title">Latest Posts</h4>
                                <div class="sidebar-module-inner">

                                    <ul class="sidebar-post">
                                    <?php 
										$args = array(
                                            'post_type' => 'post',
                                            'orderby'   => 'desc',
                                            'posts_per_page' => 4, 
                                            );
                                         
                                        $the_query = new WP_Query( $args );

										while ($the_query -> have_posts()) : $the_query -> the_post();
										?>
                                        <li class="clearfix sidebar-li">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="image">
                                                <?php $product_image = get_the_post_thumbnail_url();
                                                    if($product_image){ ?>  
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Popular Post" />
                                                    <?php  }
                                                    else{ ?>
                                                    <img src="<?php echo DEFAULT_IMAGE;?>" alt="" />
                                                
                                                <?php  }?>
                                                </div>
                                                <div class="content">
                                                    <h6><?php the_title(); ?></h6>
                                                    <p class="recent-post-sm-meta"><i class="fa fa-clock-o mr-5"></i><?php echo get_the_date( 'M d, Y', get_the_ID() );?></p>
                                                </div>
                                            </a>
                                        </li>
                                        <?php
											endwhile;
											wp_reset_postdata();
											?>
                                    </ul>

                                </div>
                            </div>

                            <div class="clear"></div>

                            <div class="sidebar-module">
                                <h4 class="sidebar-title">Tags</h4>
                                <div class="sidebar-module-inner">
                                    <div class="tag-cloud clearfix">
                                    <?php $tags = get_tags();
											$html = '';
											foreach ( $tags as $tag ) {
												$tag_link = get_tag_link( $tag->term_id );

												$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
												$html .= "{$tag->name} </a>";
											}
											$html .= '';
											echo $html; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>


                        </div>

                    </aside>

                </div>

            </div>

        </div>
    </div>
</section>

<?php get_footer();
