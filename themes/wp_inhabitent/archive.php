<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area home-blog">
		<main id="main" class="site-main left-home" role="main">

		<?php if ( have_posts() ) : ?>

			<h2 class="page-header">
				<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'single' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<div class="right-home">
			<?php get_sidebar();?>
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>
