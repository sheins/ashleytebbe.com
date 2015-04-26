<?php
/*
 * Template Name: Portfolio
 * Description: The hub page for portfolio pages
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		    <?php get_template_part('content','portfolio') ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
