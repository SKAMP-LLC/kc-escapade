<?php
/**
 * The template for the about page.
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */
?>

<?php
  global $wp;
  $url = home_url( add_query_arg( array(), $wp->request ) );
  global $development_theme;
  if ( $development_theme == 'paprika' || strpos($url, 'paprika') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'imew' || strpos($url, 'imew') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'rascals' || strpos($url, 'rascals') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'theeye' || strpos($url, 'theeye') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'cb' || strpos($url, 'cb') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'pmp' || strpos($url, 'pmp') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'laslindas' || strpos($url, 'laslindas') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'knighthood' || strpos($url, 'knighthood') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="about-page">
      <h2 class="empty">This comic does not have an about page yet.</h2>
    </div>
  </article>
<?php endif; ?>
