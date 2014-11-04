<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package single-page_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Fascinate+Inline' rel='stylesheet' type='text/css'>

<!-- stuff for fullpage.js -->
<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="vendors/jquery.easings.min.js"></script>
<script type="text/javascript" src="jquery.fullPage.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage();
        });
    </script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="fullpage">
        <div class="section">Section 1</div>
        <div class="section">
            <div class="slide">Section 2 Slide 1</div>
            <div class="slide">Section 2 Slide 2</div>
            <div class="slide">Section 2 Slide 3</div>
        </div>
        <div class="section">Section 3</div>
    </div>       
    
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'single-page_theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'single-page_theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">