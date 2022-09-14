<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kairav
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="main-container-wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 logo-wrapper">
                        <div class="site-title"> <a href="<?php get_site_url(); ?>" rel="home"> <img src="<?php the_field('site_logo', 'option'); ?>" alt="Apeiron"
                                    width="180" style="height:100%;"> </a></div>
                    </div>
                    <div class="col-xs-6 searchbar-wrapper">
                        <div class="search-menu-wrapper clearfix">

                            <div class="header-left-search">
                                <form class="search-form input-group searchform" role="search" method="get"
                                    id="searchform" action="<?php echo get_site_url(); ?>/"> <input type="text" value="" name="s"
                                        id="s" class="form-control" /> <span class="input-group-btn"> <button
                                            type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </span></form>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-search-wrapper col-xs-6">
                        <button class="btn btn-default mobile-search-btn" type="button"><i class="fa fa-search"></i>
                        </button>
                        <div class="header-left-search">
                        <form class="search-form input-group" method="get" action="<?php echo get_site_url(); ?>/" >
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for..." name="s">
                                    <span class="input-group-btn"><button class="btn btn-default" type="button"></button></span>
                                </div>
                                </br>
                                </br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="navbar" class="nav-bar">
            <button type="button" class="btn toggle-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span> </button>
            <div class="nav-container">
                <div class="menu-main-menu-container">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'dropline', 'container' => 'ul','menu_class' => 'nav navbar-nav') ); ?>

                    <!-- <ul id="dropline" class="nav navbar-nav">
                        <li id="menu-item-1113"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1113">
                            <a href="https://localhost/about-us/">About us</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1122"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1122"><a
                                        href="https://localhost/about-us/our-mission/">Our mission</a></li>
                                <li id="menu-item-23346"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23346"><a
                                        href="https://localhost/about-us/our-partners/">Our partners</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1115"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1115">
                            <a href="https://localhost/our-work/">Our work</a>
                            <ul class="sub-menu">
                                <li id="menu-item-22837"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22837"><a
                                        href="https://localhost/our-work/our-approach/">Our approach</a></li>
                                <li id="menu-item-23166"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23166"><a
                                        href="https://localhost/our-work/our-value/">Our values</a></li>
                                <li id="menu-item-23164"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23164"><a
                                        href="https://localhost/our-work/our-theory-of-change/">Our Theory of
                                        Change</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1114"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1114">
                            <a href="https://localhost/get-involved/">Get involved</a>
                            <ul class="sub-menu">
                                <li id="menu-item-22882"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22882"><a
                                        href="https://localhost/get-involved/give-now/">Give now</a></li>
                                <li id="menu-item-23563"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23563"><a
                                        href="https://localhost/get-involved/corporate/">Corporate</a></li>
                                <li id="menu-item-22949"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22949"><a
                                        href="https://localhost/get-involved/be-a-volunteer/">Be a volunteer</a>
                                </li>
                                <li id="menu-item-22950"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22950"><a
                                        href="https://localhost/get-involved/be-a-fundraiser/">Be a
                                        fundraiser</a></li>
                                <li id="menu-item-22948"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22948"><a
                                        href="https://localhost/get-involved/in-nepal-with-us/">In Nepal with
                                        us</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1125"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1125"><a
                                target="_blank" rel="noopener" href="https://shop.apeironitalia.it">Online shop</a></li>
                        <li id="menu-item-1123"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1123"><a
                                href="https://localhost/contact-us/">Contact us</a></li>
                    </ul> -->
                </div>
            </div>
            <div class="mobile-nav-container">
                <div class="menu-main-menu-container">
                    <ul id="mobile-dropline" class="nav navbar-nav">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1113">
                            <a href="https://localhost/about-us/">About us</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1122"><a
                                        href="https://localhost/about-us/our-mission/">Our mission</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23346"><a
                                        href="https://localhost/about-us/our-partners/">Our partners</a></li>
                            </ul>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1115">
                            <a href="https://localhost/our-work/">Our work</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22837"><a
                                        href="https://localhost/our-work/our-approach/">Our approach</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23166"><a
                                        href="https://localhost/our-work/our-value/">Our values</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23164"><a
                                        href="https://localhost/our-work/our-theory-of-change/">Our Theory of
                                        Change</a></li>
                            </ul>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1114">
                            <a href="https://localhost/get-involved/">Get involved</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22882"><a
                                        href="https://localhost/get-involved/give-now/">Give now</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23563"><a
                                        href="https://localhost/get-involved/corporate/">Corporate</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22949"><a
                                        href="https://localhost/get-involved/be-a-volunteer/">Be a volunteer</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22950"><a
                                        href="https://localhost/get-involved/be-a-fundraiser/">Be a
                                        fundraiser</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22948"><a
                                        href="https://localhost/get-involved/in-nepal-with-us/">In Nepal with
                                        us</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1125"><a
                                target="_blank" rel="noopener" href="https://shop.apeironitalia.it">Online shop</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1123"><a
                                href="https://localhost/contact-us/">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
