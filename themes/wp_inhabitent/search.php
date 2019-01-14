<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

		<section id="primary" class="content-area home-blog">
			<main id="main" class="site-main left-home" role="main">
			
			<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		<div class="right-home">
			<?php get_sidebar();?>
		</div>
	</section><!-- #primary -->


<?php get_footer(); ?>
