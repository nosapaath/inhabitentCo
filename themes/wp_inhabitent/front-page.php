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
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<section class="block-container">
	<h1>Shop Stuff</h1>
	<div class="wrapper-shop">

	<?php $terms = get_terms('shoptaxonomy');
		foreach ( $terms as $term ) { ?>
			<div class="shop-items">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/'.$term->name.'.svg'?>" alt="Do" width="70px">
			<p><?php echo $term->description?></p>
			<a href="<?php echo get_term_link($term); ?>" class="front-journal-btn"><?php echo $term->name?> stuff</a>
			</div>
	<?php }?>

	</div>
</section>

<section class="block-container">
<h1>Inhabitent Journal</h1>
<div class="wrapper-shop">
<?php
  $args = array( 'post_type' => 'post', 'order' => 'DSC', 'offset' => 0, 'posts_per_page' => 3 );
  $toppost = get_posts( $args ); // returns an array of posts
	?>

	<?php foreach ( $toppost as $post ) : setup_postdata( $post ); ?>
		<div class="front-journal">
			<div class="front-journal-photo"><?php the_post_thumbnail( 'large' ); ?></div>
			<div class="front-journal-info">
				<span><?php the_date(); ?> / <?php comments_number();?></span>
				<h2 class="front-journal-title"><?php the_title(); ?></h2>
				<a href="<?php the_permalink(); ?>" class="front-journal-btn">Read Entry</a>
			</div>	
		</div>

	<?php endforeach; wp_reset_postdata(); ?>
</div>	
</section>

<section class="adventure-blog-wrapper">
	<h1>Latest Adventure</h1>
	<div class="adventure-blocks">
		<div class="andventure-single-block">
			<img class="adventure-one" src="<?php echo get_template_directory_uri().'/images/adventure-photos/canoe-girl.jpg'?>">
		</div>
		<div class="andventure-single-block">
			<img class="adventure-two" src="<?php echo get_template_directory_uri().'/images/adventure-photos/beach-bonfire.jpg'?>">
		</div>
		<div class="andventure-single-block">
			<img class="adventure-three" src="<?php echo get_template_directory_uri().'/images/adventure-photos/mountain-hikers.jpg'?>">
		</div>
		<div class="andventure-single-block">
			<img class="adventure-four"src="<?php echo get_template_directory_uri().'/images/adventure-photos/night-sky.jpg'?>">
		</div>

		<a class="front-journal-btn" href="">More Adventures</a>	

	</div>
</section>



		
	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


