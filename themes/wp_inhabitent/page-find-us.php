<?php
get_header(); ?>

			
	<div id="primary" class="content-area find-wrapper">
		<main id="main" class="site-main find-content" role="main">
    <h1><?php echo the_title();?></h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1301.841992393202!2d-123.1392221431517!3d49.263435397483704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac4fb%3A0x7edde857c28340ba!2sRED+Academy!5e0!3m2!1sen!2sca!4v1547079933564" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>Sorry, we are under construction.</p>
      <?php endif; ?>

      
		</main><!-- #main -->
	</div><!-- #primary -->
  
<?php get_footer(); ?>
