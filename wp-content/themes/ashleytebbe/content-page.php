<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package AshleyTebbe
 */
global $post;
?>
<article id="<?php echo $post->post_name; ?>" <?php post_class(); ?>>
    <div class="container">

    <h1 class="page-title"><?php the_title(); ?></h1>

    	<div class="entry-content">
    		<?php the_content(); ?>
    	</div><!-- .entry-content -->
    </div>
</article><!-- #post-## -->

