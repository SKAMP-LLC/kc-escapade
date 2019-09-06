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
      <meta name="description" content="Historian Ronald Rudentof has spent his entire life trying to escape his father's shadow. But while attempting to solve the last mystery his father left behind, Ron's life was changed forever. Now permanently bonded to an ancient demigod named Ramalach that has taken residence inside his forehead, Ron finds himself trapped between forces determined to either destroy Ramalach, or use him for their own sinister purposes.">
      <meta name="keywords" content="webcomic, webcomics, anime, furry, art, furry art">
    <?php elseif ( strpos($url, 'cb') !== false ) : ?>
      <title>Caribbean Blue</title>
      <meta name="description" content="Tina and Yuki travel to the island of Caribbean Blue in search of a cure for their friend's strange feline curse, only to discover the island has many more secrets than they bargained for. Will they save the island after accidentally unearthing one of its greatest mysteries? Read and find out!">
      <meta name="keywords" content="webcomic, webcomics, anime, furry, art, furry art">
    <?php elseif ( strpos($url, 'pmp') !== false ) : ?>
      <title>Practice Makes Perfect</title>
      <meta name="description" content="A four panel gag comic with a cast of adorable characters! Jess Drea and Addy are just kids trying to make sense of the world in their own unique way, using imagination as their guide!">
      <meta name="keywords" content="webcomic, webcomics, anime, furry, art, furry art">
    <?php elseif ( strpos($url, 'laslindas') !== false ) : ?>
      <title>Las Lindas</title>
      <meta name="description" content="Las Lindas is a Slice of Life story that revolves around Mora Linda, who inherits her family's farmland after the death of her mother Diana. At first attempting to manage the farm on her own, she quickly realizes that she will need help, and goes out to recruit some more workers. Things are complicated when an old rival shows up and tries to run Mora out of business.">
      <meta name="keywords" content="laslindas, webcomic, webcomics, anime, furry, art, furry art">
    <?php elseif ( strpos($url, 'knighthood') !== false ) : ?>
      <title>Knighthood</title>
      <meta name="description" content="Knighthood is a story of adventure and growth. Joy Ravenhurst has taken on a challenge to become a Knight, one of her race’s protectors and guardians. The trail is long and she faces more than a few obstacles along the way. Joy’s determination will be put to the test as those enemies grow ever more aggressive, both against her and the world she wants to protect.">
      <meta name="keywords" content="knighthood, webcomic, webcomics, anime, furry, art, furry art">
    <?php elseif ( strpos($url, 'addictivescience') !== false ) : ?>
      <title>Addictive Science</title>
      <meta name="description" content="Slice of life comic about a mad scientist, featuring mad science, magic and whatever the author found funny that week.">
      <meta name="keywords" content="webcomic, webcomics">
    <?php elseif ( strpos($url, 'tots') !== false ) : ?>
      <title>Tina of the South</title>
      <meta name="description" content="Terra Rica is home to great riches for those willing to brave the harsh landscape. For some, however, arid deserts are the least of their worries. As a child, Tina Winchester lost everything to a sinister killer. Now, as a bounty hunter, Tina sets out on a quest for revenge, to bring her father's killer to justice. But her efforts quickly attract the ire of a secret cabal that plots to undermine the very foundations of Terra Rica itself.">
      <meta name="keywords" content="webcomic, webcomics, furry, art, furry art">
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
