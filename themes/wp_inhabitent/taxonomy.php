<?php
/**
 * The template for displaying product archive pages.
 *
 * @package inhabitent
 */

get_header(); ?>

<div id="primary" class="content-area about-wrapper">
	<main id="main" class="site-main" role="main">
  <h1><?php echo $page->page_name ?> STUFF</h1>

  <section class="block-container">
		<div class="wrapper-product">
    <?php while ( have_posts() ) : the_post(); ?>

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