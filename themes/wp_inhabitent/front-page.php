<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="logo-hero hero-front">
				<img src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-full.svg'?>" alt="circle logo inhabitent" width="275px">
			</div>
<section class="hero-shop">
	<h1>Shop Stuff</h1>
	<div class="wrapper-shop">
		<div class="shop-items">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/do.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>

		<div class="shop-items">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/eat.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>

		<div class="shop-items">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/sleep.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>

		<div class="shop-items">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/wear.svg'?>" alt="Do" width="70px">
			<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
			<button>Do stuff</button>
		</div>
	</div>
</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php
  $args = array( 'post_type' => 'post', 'order' => 'DSC', 'offset' => 0, 'posts_per_page' => 3 );
  $toppost = get_posts( $args ); // returns an array of posts
	?>

	<?php foreach ( $toppost as $post ) : setup_postdata( $post ); ?>
		<a><?php the_post_thumbnail( 'thumbnail' ); ?></a>
		<h2><?php the_title(); ?></h2>
  	<p><?php the_date(); ?> / <?php comments_number();?></p>
	<?php endforeach; wp_reset_postdata(); ?>
		
	</main><!-- #main -->
	</div><!-- #primary -->

	
<?php get_sidebar(); ?>
<?php get_footer(); ?>


