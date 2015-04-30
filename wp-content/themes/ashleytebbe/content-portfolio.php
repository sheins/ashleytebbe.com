<?php 

$args = array(
  'post_type' => 'portfolio',
  );
$query = new WP_Query($args);
global $post;
?>

<article id="<?php echo $post->post_name; ?>" <?php post_class(); ?>>
  <div class="container clearfix">
    <h1 class="page-title"><?php the_title(); ?></h1>
      <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 300,300 ), false, '' );?>
        <header class="piece-header">
            <a href="<?php the_permalink() ?>" class="thumbnail">
              <img src="http://placehold.it/300x300" style="border-radius: 50%;">
              <!-- <img src="<? //php echo $src[0] ?>"> -->
            </a>
            <?php the_title( '<h3 class="piece-title">', '</h3>' ); ?>
            <h5 class="piece-subtitle"><?php the_field('portfolio_piece_type')?></h5>
        </header><!-- .entry-header -->
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</article>
