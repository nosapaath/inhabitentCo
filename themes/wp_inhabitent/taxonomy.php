<?php
/**
 * The template for displaying product archive pages.
 *
 * @package inhabitent
 */

get_header(); ?>

<div id="primary" class="content-area about-wrapper">
	<main id="main" class="site-main" role="main">
  
  <div class="taxonomy-header">
    
  <h1 class="page-title"><?php $taxonomy = get_queried_object();
  echo  $taxonomy->name;?> </h1>
  <p class="page-description"><?php $taxonomy = get_queried_object();
  echo  $taxonomy->description;?> </p>
  </div>
  

  <section class="block-container">
		<div class="wrapper-product">
    <?php while ( have_posts() ) : the_post(); 
    ?>
    <div class="front-journal single-product">
			<div class="product-archive-img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				</div>
        <div class="product-title">
						<h2 class="product-entry"><?php the_title(); ?></h2><span class="price-product">$<?php echo CFS()->get( 'price' ); ?>.00</span>
					</div>		
    </div>
<?php endwhile;?>
  	  
      </div>	
    </section>  
  </main>
</div>

<?php get_footer(); ?>