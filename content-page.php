<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package single-page_theme
 */
?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="home_section" class="section">
		<div class="section_content">
			Home Section
		</div>
		<div class="home_section_bottom_border">
			Home section bottom border
		</div>
	</div>

	<div id="about_me_section" class="section">
		<div class="section_content">
			About Me Section
		</div>
		<div class="about_me_section_bottom_border">
			About me section bottom border
		</div>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	</div>

	<div id="projects_section" class="section">
		<div class="section_content">
			The section should go here
		</div>
		<div class="projects_section_bottom_border">
			The border should go here
		</div>
	</div>

	<div id="contact_me_section" class="section">
		<div class="section">
			Contact me section
		</div>
		<div class="contact_me_section_bottom_border">
			The border goes here
		</div>
	</div>
	
</article><!-- #post-## -->
