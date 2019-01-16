<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-product-post'); ?>>
	<header class="entry-header single-product-img">

    <?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="single-product-info">
    <?php the_title( '<h1>', '</h1>' ); ?>
    <p class="product-price">$ <?php echo CFS()->get( 'price' ); ?>.00</p>
    <div class="product-content">
        <?php the_content(); ?>
    </div>
    <div class="social-link-product">
        <button>
            <i class="fab fa-facebook"></i><span>Like</span>
        </button>
        <button>
            <i class="fab fa-twitter"></i><span>Tweet</span>
        </button>
        <button>
            <i class="fab fa-pinterest"></i><span>Pin</span>
        </button>
    </div>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
