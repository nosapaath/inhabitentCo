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
	<h2>Shop Stuff</h2>
	<div class="wrapper-shop">

	<?php $terms = get_terms('shoptaxonomy');
		foreach ( $terms as $term ) { ?>
			<div class="shop-items">
			<img src="<?php echo get_template_directory_uri().'/images/product-type-icons/'.$term->name.'.svg'?>" alt="Do" width="70px">
			<p><?php echo $term->description?></p>
			<a href="<?php echo get_term_link($term); ?>" class="button-inhabitent"><?php echo $term->name?> stuff</a>
			</div>
	<?php }?>

	</div>
</section>

<section class="block-container">
<h2>Inhabitent Journal</h2>
<div class="wrapper-shop">
<?php
  $args = array( 'post_type' => 'post', 'order' => 'DSC', 'offset' => 0, 'posts_per_page' => 3 );
  $toppost = get_posts( $args ); // returns an array of posts
	?>

	<?php foreach ( $toppost as $post ) : setup_postdata( $post ); ?>
		<div class="front-journal">
			<div class="front-journal-photo"><?php the_post_thumbnail( 'large' ); ?></div>
			<div class="front-journal-info">
				<span><?php echo get_the_time('Y F d');?> / <?php comments_number();?></span>
				<h3 class="front-journal-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
				<a href="<?php the_permalink(); ?>" class="button-black">Read Entry</a>
			</div>	
		</div>

	<?php endforeach; wp_reset_postdata(); ?>
</div>	
</section>

<section class="adventure-blog-wrapper">
<h2>Latest Adventure</h2>
	<div class="adventure-blocks">

	<?php
  $arg = array( 'post_type' => 'adventures', 'order' => 'ASC', 'offset' => 0, 'posts_per_page' => 4 );
  $adventure = get_posts( $arg ); // returns an array of posts
	?>

	<?php foreach ( $adventure as $post ) : setup_postdata( $post ); ?>

		<div class="adventure-single-block">
			<div><?php the_post_thumbnail(); ?></div>
			<div class="adventure-story">
				<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
				
				<a class="button-white" href="<?php the_permalink();?>">Read More</a>
			</div>
		</div>

	<?php endforeach; wp_reset_postdata(); ?>
	</div>
	<p>
		<a class="button-inhabitent" href="<?php echo get_permalink().'/adventures';?>">More Adventures</a>
	</p>
</section>

	</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>






			