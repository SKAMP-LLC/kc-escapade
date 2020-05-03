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
    <div class="ad-container-ver">
      <?php
        get_template_part( 'template-parts/content', 'ad-banner-ver' );
      ?>
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

  <div class="ad-container-hor">
    <?php
      get_template_part( 'template-parts/content', 'ad-banner-hor' );
    ?>
  </div>

  <?php
    get_template_part( 'template-parts/content', 'cross-promotion' );
  ?>

  <?php
    get_template_part( 'template-parts/content', 'carousel' );
  ?>

<?php get_footer(); ?>
