<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section>
	<h1>Shop Stuff</h1>
	<div class="wrapper-stuff">
		<div class="shop-stuff">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/do.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>

		<div class="shop-stuff">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/do.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>

		<div class="shop-stuff">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/do.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>

		<div class="shop-stuff">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/do.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>
	</div>
</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
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
	</div><!-- #primary -->

	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
