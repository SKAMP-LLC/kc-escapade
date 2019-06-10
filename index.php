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

  <section class="two-column">
    <div id="primary" class="comic">
      <?php do_action('comic-area'); ?>
    </div>
    <div class="social-sidebar">
      <?php
        get_template_part( 'template-parts/content', 'social-buttons' );
      ?>
      <div class="banner">
        <a href=""></a>
      </div>
    </div>
  </section>

  <?php
    get_template_part( 'template-parts/content', 'cross-promotion' );
  ?>

  <?php
    get_template_part( 'template-parts/content', 'carousel' );
  ?>

<?php get_footer(); ?>
