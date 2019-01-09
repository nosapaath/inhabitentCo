<?php
/**
 * The template for displaying product archive pages.
 *
 * @package inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="block-container">
		<div class="wrapper-product">
			
			<?php
  		$args = array( 'post_type' => 'product', 'order' => 'ASC', 'offset' => 0, 'posts_per_page' => 16 );
  		$productpost = get_posts( $args ); // returns an array of posts
			?>

		<?php foreach ( $productpost as $post ) : setup_postdata( $post ); ?>
			<div class="front-journal single-product">
				<div class="product-archive-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				</div>
			
			<div>
				<p class="product-title"><?php the_title(); ?>.........$<?php echo CFS()->get( 'price' ); ?>.00</p>
			</div>	
		</div>

	<?php endforeach; wp_reset_postdata(); ?>
</div>	
</section>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
