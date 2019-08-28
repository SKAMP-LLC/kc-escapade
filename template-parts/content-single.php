<?php
/**
 * The template part for displaying single posts.
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

  <section class="three-column">
    <div class="side-banner">
      <a href="https://kemono.cafe"></a>
    </div>
    <div id="primary" class="comic">
      <?php do_action('comic-area'); ?>
    </div>
    <div class="social-sidebar">
      <?php
        get_template_part( 'template-parts/content', 'social-buttons' );
      ?>
    </div>
  </section>

  <?php
    get_template_part( 'template-parts/content', 'cross-promotion' );
  ?>

  <?php
    get_template_part( 'template-parts/content', 'carousel' );
  ?>

<?php get_footer(); ?>

</article><!-- #post-## -->
