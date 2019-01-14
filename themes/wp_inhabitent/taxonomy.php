<?php
/**
 * The template for displaying product archive pages.
 *
 * @package inhabitent
 */

get_header(); ?>

<div id="primary" class="content-area about-wrapper">
	<main id="main" class="site-main" role="main">

  <h1><?php $taxonomy = get_queried_object();
  echo  $taxonomy->name;?> </h1>
  <p><?php $taxonomy = get_queried_object();
  echo  $taxonomy->description;?> </p>

  <section class="block-container">
		<div class="wrapper-product">
    <?php while ( have_posts() ) : the_post(); 
    ?>
    <div class="front-journal single-product">
			<div class="product-archive-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				</div>
			<div>
			<p class="product-title"><?php the_title(); ?>................$<?php echo CFS()->get( 'price' ); ?>.00</p>
			</div>	
    </div>
<?php endwhile;?>
  	  
      </div>	
    </section>  
  </main>
</div>

<?php get_footer(); ?>