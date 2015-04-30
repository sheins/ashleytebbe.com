<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package AshleyTebbe
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    <header class="piece-header">
				    <div class="centered">
				        <?php the_title( '<h3 class="piece-title">', '</h3>' ); ?>
				        <h5 class="piece-subtitle"><?php the_field('portfolio_piece_type')?></h5>
				        <?php the_content(); ?>
				    </div>
			    </header><!-- .entry-header -->
			    <?php the_post_thumbnail('large', array('class'=>'featured')) ?>

			    <footer class="entry-footer">
			    <?php for ($i = 1; $i < 11; $i++) {
			    	$image = get_field('image_' . $i);
			    	if ($image) { ?> 
			    		<img src="<?php echo $image['url']; ?>" class="portfolio-asset">
			    <?php } ?>
			   <?php  } ?>
			    
				
			    </footer><!-- .entry-footer -->
			</article><!-- #post-## -->
			<?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
