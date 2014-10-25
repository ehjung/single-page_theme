<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package single-page_theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="content">
	<div class="content-section">
		<header class="entry-header">
			<a id="about_me">About Me</a>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	</div>

	<div class="content-section">
		<a id="projects">Projects</a>
	</div>

	<div class="content-section">
		<a id="contact_me">Contact Me</a>
	</div>
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
