<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-product-post'); ?>>
	<header class="entry-header single-product-img">

      <?php if ( has_post_thumbnail() ) : ?>
		  	<?php the_post_thumbnail( 'large' ); ?>
      <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content single-product-info">
    <?php the_title( '<h1>', '</h1>' ); ?>
    <p class="product-price"><?php echo CFS()->get( 'price' ); ?></p>
    <?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
