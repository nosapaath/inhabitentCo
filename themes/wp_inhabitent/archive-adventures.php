<?php

get_header(); ?>

<div id="primary" class="content-area about-wrapper">
		<main id="main" class="site-main" role="main">

    <div class="taxonomy-header">
      <h1 class="page-title">Latest Adventures</h1>
    </div>
    
    <div class="adventure-wrapper-grid">
   			   	
      
      <?php
        $arg = array( 'post_type' => 'adventures', 'order' => 'ASC', 'offset' => 0, 'posts_per_page' => 4 );
        $adventure = get_posts( $arg ); // returns an array of posts
	    ?>

	    <?php foreach ( $adventure as $post ) : setup_postdata( $post ); ?>
      <div class="adventure-single">
        <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail(); ?>
        </a>
        <div class="adventure-story">
				  <h2><a  href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				  <a class="button-white" href="<?php the_permalink();?>">Read More</a>
			  </div>
      </div>

	    <?php endforeach; wp_reset_postdata(); ?>
	  </div>
	

    </div>

    </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>