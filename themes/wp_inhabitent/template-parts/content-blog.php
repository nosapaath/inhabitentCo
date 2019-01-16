<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a class="entry-title-green" href="<?php echo the_permalink();?>"><h2><?php the_title(); ?>
		</h2></a>

		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
    ?>

    <p class="entry-footer">
		<?php red_starter_entry_footer(); ?>
    </p>

    <div class="social-link-product">
        <a class="button-black">
            <i class="fab fa-facebook"></i><span>Like</span>
			</a>
        <a class="button-black">
            <i class="fab fa-twitter"></i><span>Tweet</span>
			</a>
        <a class="button-black">
            <i class="fab fa-pinterest"></i><span>Pin</span>
			</a>
    </div>

  </div>
  
</article><!-- #post-## -->
