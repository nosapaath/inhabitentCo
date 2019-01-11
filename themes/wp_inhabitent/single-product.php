<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area product-single-wrapper">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'product' ); ?>

		<?php endwhile;?>

		</main><!-- #main -->
		<aside id="asideside">
		<?php get_sidebar(); ?>
	</aside>
	</div><!-- #primary -->
	

<?php get_footer(); ?>
