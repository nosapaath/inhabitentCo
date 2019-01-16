<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>

	  <?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
