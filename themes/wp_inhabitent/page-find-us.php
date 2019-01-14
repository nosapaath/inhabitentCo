<?php
get_header(); ?>

			
	<div id="primary" class="content-area find-wrapper">
		<main id="main" class="site-main find-content left-home" role="main">
    <h1><?php echo the_title();?></h1>
      
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>Sorry, we are under construction.</p>
      <?php endif; ?>

      
    </main><!-- #main -->
    <div class="right-home">
			<?php get_sidebar();?>
		</div>
	</div><!-- #primary -->
  
<?php get_footer(); ?>
