<?php

get_header(); ?>

<div class="logo-hero about-hero">
	<h1><?php echo the_title();?></h1>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main about-content" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>Sorry, we are under construction.</p>
      <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
