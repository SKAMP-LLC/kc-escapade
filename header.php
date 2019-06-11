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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
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
            <div class="media-banner">
              <a href=""></a>
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
