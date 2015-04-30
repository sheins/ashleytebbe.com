<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package AshleyTebbe
 */

global $post;
?>

<article id="<?php echo $post->post_name; ?>" <?php post_class(); ?>>
    <div class="container clearfix">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="left">
            <h3 class="piece-title"><?php the_field('name')?></h3>
            <h5 class="piece-subtitle"><?php the_field('contact_info_description')?></h5>
            <div class="entry-content">
                <?php the_content(); ?>
                <div class="social-icons">
                    <a href="https://twitter.com/ashleytebbe" target="_blank" class="twitter"></a>
                    <a href="https://instagram.com/atebbe/" target="_blank" class="instagram"></a>
                    <a href="https://www.pinterest.com/ashleyjeantebbe/" target="_blank" class="pinterest"></a>
                </div>
        	</div><!-- .entry-content -->
        </div>
        <img src="<?php bloginfo('template_url'); ?>/images/logo-large.png" class="right">
    </div>
</article><!-- #post-## -->

