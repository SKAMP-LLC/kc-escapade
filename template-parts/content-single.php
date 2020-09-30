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

  <section class="content">
    <div class="left-sidebar">
      <?php
        get_template_part( 'template-parts/content', 'left-sidebar' );
      ?>
    </div>
    <div id="primary" class="comic">
      <?php do_action('comic-area'); ?>
      <?php if(!empty(get_the_content())): ?>
      <div class="post-content">
        <header>
          <span class="author">
            <?php the_author(); ?>
          </span>
          <span class="date">
            <?php the_date(); ?>
          </span>
        </header>
        <?php the_content(); ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="right-sidebar">
      <?php
        get_template_part( 'template-parts/content', 'right-sidebar' );
      ?>
    </div>
  </section>

  <div class="bottom-bar">
    <?php
      get_template_part( 'template-parts/content', 'bottom-bar' );
    ?>
  </div>

  <?php
    get_template_part( 'template-parts/content', 'cross-promotion' );
  ?>

  <?php
    get_template_part( 'template-parts/content', 'carousel' );
  ?>

<?php get_footer(); ?>

</article><!-- #post-## -->
