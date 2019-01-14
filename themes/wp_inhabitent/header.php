<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />



	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			<div class="nav-wrapper">
			
			<?php
				if(is_front_page()) :
				?>
				<div class="site-branding">
					<a href="<?php echo home_url();?>"><img width="50px" height="" src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-tent.svg'?>" alt="inhabitent logos"/></a>
				</div>
				
				<?php else :?>
				<div class="site-branding">
					<a href="<?php echo home_url();?>"><img width="50px" height="" src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-tent-white.svg'?>" alt="inhabitent logos"/></a>
				</div><!-- .site-branding -->
				<?php endif; ?>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
	</fieldset>
</form>
			</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">