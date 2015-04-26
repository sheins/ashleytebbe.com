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
        <div class="left">
            <h1 class="page-title"><?php the_title(); ?></h1>
                <h3 class="piece-title"><?php the_field('name')?></h3>
                <h5 class="piece-subtitle"><?php the_field('contact_info_description')?></h5>
            <div class="entry-content">
                <?php the_content(); ?>
                <div class="social-icons">
                    <a href="" class="twitter"></a>
                    <a href="" class="instagram"></a>
                    <a href="" class="pinterest"></a>
                </div>
        	</div><!-- .entry-content -->
        </div>
        <img src="<?php bloginfo('template_url'); ?>/images/logo-large.png" class="right">
    </div>
</article><!-- #post-## -->

