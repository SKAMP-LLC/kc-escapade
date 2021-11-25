<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage KC Escapade
 * @since KC Escapade 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile;
		?>
	</main>
</div>

<?php get_footer(); ?>
