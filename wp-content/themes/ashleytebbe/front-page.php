<?php
/**
 * Template Name: One Page Site
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		$portfolio_piece = $_GET['work'];
		$args1 = array(
			'post_type'=>'portfolio'
		);
		$query1 = new WP_Query( $args1 );
			if ($query1->have_posts()) : while($query1->have_posts()) : $query1->the_post();?>
			
				<?php if ($post->post_name == $portfolio_piece) { ?>
				<div class="container clearfix">
					<div class="top clearfix">
				      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						    <header class="piece-header">
						    	<div class="block">
								    <div class="centered">
								        <?php the_title( '<h3 class="piece-title">', '</h3>' ); ?>
								        <h5 class="piece-subtitle"><?php the_field('portfolio_piece_type')?></h5>
								        <?php the_content(); ?>
							        </div>
							     </div>
						    </header><!-- .entry-header -->
						    <?php $image1 = get_field('image_1'); ?>
					    	<img src="<?php echo $image1['url']; ?>" class="main-image">
					   </div>
				    	<footer class="entry-footer">
						    <?php for ($i = 2; $i < 12; $i++) {
						    	$image = get_field('image_' . $i);
						    	if ($image) { ?> 
						    		<img src="<?php echo $image['url']; ?>" class="portfolio-asset image_<?php echo $i?>">
						    	<?php } ?>
						   <?php  } ?>
			    		</footer><!-- .entry-footer -->
				   </article>
				 </div>
				 <?php } ?>

		    <?php endwhile; endif ?>
		<?php 
			$args = array(
				'post_type'=>'page',
				'order' => 'ASC'
			);
			$the_query = new WP_Query($args);

			if (have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();

			switch($the_query->post->ID ) {
				case '24':
					$template_part = 'portfolio';
					break;
				case '34':
					$template_part = 'contact';
					break;
				default:
					$template_part = 'page';
			}
			get_template_part('content', $template_part);

			endwhile; endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
