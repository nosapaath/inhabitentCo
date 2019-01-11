<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area home-blog">
		<main id="main" class="site-main left-home" role="main">

				<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

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