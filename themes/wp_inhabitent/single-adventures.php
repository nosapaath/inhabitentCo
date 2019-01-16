<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main about-content" role="main">

		<?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
		<?php endif; ?>
		
      <?php while ( have_posts() ) : the_post(); ?>
				<?php the_title( sprintf( '<a class="entry-title" href="%s" rel="bookmark"><h2>', esc_url( get_permalink() ) ), '</h2></a>' ); ?>
			<p class="author">By <?php the_author(); ?></p>
			<?php the_content(); ?>

			<div class="social-link-product">
        <a class="button-black">
            <i class="fab fa-facebook"></i><span>Like</span>
</a>
        <a class="button-black">
            <i class="fab fa-twitter"></i><span>Tweet</span>
</a>
        <a class="button-black">
            <i class="fab fa-pinterest"></i><span>Pin</span>
</a>
    	</div>

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
