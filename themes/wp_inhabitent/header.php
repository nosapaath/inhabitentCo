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

			

				

					<?php if( is_front_page() || is_page('about')) : ?>
					<header id="masthead" class="site-header " role="banner">
					<div id="white-to-green"class="nav-wrapper white-navigation">
						<div class="site-branding">
							<a href="<?php echo home_url();?>">
						<?php 
							$svg_file = file_get_contents(get_template_directory_uri().'/images/logos/inhabitent-logo-tent-white.svg');
								$find_string   = '<svg';
								$position = strpos($svg_file, $find_string);
								$svg_file_new = substr($svg_file, $position);
								echo "<div id='search-icon' class='logo-wrapper' style='width:50px;' >" . $svg_file_new . "</div>";
						?>
						</a>
					<?php else : ?>
					<header id="masthead" class="site-header" role="banner">
					<div id="white-to-green"class="nav-wrapper green-navigation">
						<div class="site-branding">
							<a href="<?php echo home_url();?>">
						<?php 
							$svg_file = file_get_contents(get_template_directory_uri().'/images/logos/inhabitent-logo-tent.svg');
								$find_string   = '<svg';
								$position = strpos($svg_file, $find_string);
								$svg_file_new = substr($svg_file, $position);
								echo "<div id='search-icon' class='logo-wrapper' style='width:50px;' >" . $svg_file_new . "</div>";
						?>
						</a>
					<?php endif ?>	
					
				</div>

				<?php if( is_front_page()) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php else : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php endif ?>	

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

					<?php get_search_form(); ?>

				</nav><!-- #site-navigation -->
			</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">