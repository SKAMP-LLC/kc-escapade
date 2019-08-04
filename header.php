<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */

?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?> class="no-js">

  <head>
    <?php 
      global $wp;
      $url = home_url( add_query_arg( array(), $wp->request ) );
      if ( strpos($url, 'paprika') !== false ) : ?>
      <title>Paprika</title>
      <meta name="description" content="Paprika is a celebration of anime's golden age through the eyes of some very special fans. Tina and her friends have some very strong imaginations, ones so strong they transport the girls to a whole new world when they let it run away with them.">
      <meta name="keywords" content="paprika, webcomic, webcomics, anime, furry, kemono, catgirl, art, furry art">
    <?php elseif ( strpos($url, 'imew') !== false ) : ?>
      <title>iMew</title>
      <meta name="description" content="Ever think your phone's controlling your life? Sammy sure feels that way! After purchasing a mysterious knock-off phone, she's discovered the apps control a little more than you or I would expect! Now she has to get her life back before the battery runs out!">
      <meta name="keywords" content="imew, webcomic, webcomics, anime, furry, catgirl, art, furry art, phone, smartphone">
    <?php elseif ( strpos($url, 'rascals') !== false ) : ?>
      <title>Rascals</title>
      <meta name="description" content="Follow the crazy antics of a group of friends from different backgrounds as they grow and experience the ups and downs of days dealing with Love triangles, misunderstood situations, annoying jobs and nosy parents. Will all of them find a happy ending in this crazy thing we call Life? Let's join them and find out!">
      <meta name="keywords" content="rascals, webcomic, webcomics, anime, furry, art, furry art">
    <?php elseif ( strpos($url, 'theeye') !== false ) : ?>
      <title>The Eye of Ramalach</title>
      <meta name="description" content="The Eye Description">
      <meta name="keywords" content="webcomic, webcomics, anime, furry, art, furry art">
    <?php endif; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9448426483899385",
        enable_page_level_ads: true
      });
    </script>
  </head>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:400,700" rel="stylesheet"> 

  <body <?php body_class(); ?>>
    <div id="page" class="site">
      
      <header id="masthead" class="site-header" role="banner">
        <div class="site-header-main">

          <!-- Logo -->
          <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            </a>
          </div>

          <!-- Primary Navigation & Social Menu -->
          <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'tudor' ); ?>">
            <div class="banner">
              <a href="https://kemono.cafe"></a>
            </div>
            <?php
                wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'menu_class'     => 'primary-menu',
                ) );
              ?>
          </nav>
          <?php endif; ?>

        </div>
      </header>
      
      <div id="content" class="site-content">
