<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AshleyTebbe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    	<header id="masthead" class="site-header container clearfix" role="banner">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="logo">
            <div class="header">
                <div class="container clearfix">
                    <div class="social-icons" id="social-icons">
                        <a href="https://twitter.com/ashleytebbe" target="_blank" class="twitter"></a>
                        <a href="https://instagram.com/atebbe/" target="_blank" class="instagram"></a>
                        <a href="https://www.pinterest.com/ashleyjeantebbe/" target="_blank" class="pinterest"></a>
                    </div>
                    <a href="#" id="mobile-nav" class="mobile-nav"><img src="<?php bloginfo('template_url'); ?>/images/menu-white.png"></a>
            		<nav id="site-navigation" class="main-navigation" role="navigation">
            			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class'=>'clearfix' ) ); ?>
            		</nav><!-- #site-navigation -->
                </div>
            </div>
    	</header><!-- #masthead -->
	<div id="content" class="site-content">
