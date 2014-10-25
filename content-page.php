<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package single-page_theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="home_section" class="section">
		Hommmeee
	</div>

	<div class="content-section">
		<header class="entry-header">
			<a id="about_me_section">About Me</a>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	</div>

	<div id="projects_section" class="section">
		<div class="section_content">
			The section should go here
		</div>
		<div id="projects_section_bottom_border">
			The border should go here
		</div>
	</div>

	<div class="content-section">
		<a id="contact_me_section">Contact Me</a>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'single-page_theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'single-page_theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
