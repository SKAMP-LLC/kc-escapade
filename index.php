<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */

get_header(); ?>

  <section class="content">
    <div class="left-sidebar">
      <?php
        get_template_part( 'template-parts/content', 'left-sidebar' );
      ?>
    </div>
    <div id="primary" class="comic">
      <?php do_action('comic-area'); ?>

      <?php if($content = $post->post_content): ?>
      <div class="post-content">
        <header>
          <span class="author">
            <?php the_author(); ?>
          </span>
          <span class="date">
            <?php the_date(); ?>
          </span>
        </header>
        <?php echo get_the_content(); ?>
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

  <?php
    get_template_part( 'template-parts/content', 'comic-list' );
  ?>

  <?php get_footer(); ?>


