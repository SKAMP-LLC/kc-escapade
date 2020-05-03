<?php
/**
 * The template for cross promotions.
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
  <section class="cross-promotion">
    <a class="spotlight" href="https://imew.kemono.cafe"></a>
    <a class="spotlight" href="https://pmp.kemono.cafe"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
  </section>
<?php elseif ( $development_theme == 'imew' || strpos($url, 'imew') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://paprika.kemono.cafe/"></a>
    <a class="spotlight" href="https://pmp.kemono.cafe/"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
  </section>
<?php elseif ( $development_theme == 'cb' || strpos($url, 'cb') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://imew.kemono.cafe/"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
    <a class="spotlight" href="https://paprika.kemono.cafe/"></a>
  </section>
<?php elseif ( $development_theme == 'rascals' || strpos($url, 'rascals') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.youtube.com/user/playorgodai"></a>
    <a class="spotlight" href="https://gumroad.com/mastergodai"></a>
    <a class="spotlight" href="https://picarto.tv/mastergodai"></a>
  </section>
<?php elseif ( $development_theme == 'theeye' || strpos($url, 'theeye') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/avencri"></a>
    <a class="spotlight" href="https://picarto.tv/avencri"></a>
    <a class="spotlight" href="https://tots.kemono.cafe"></a>
  </section>
<?php elseif ( $development_theme == 'pmp' || strpos($url, 'pmp') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://imew.kemono.cafe/"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
    <a class="spotlight" href="https://paprika.kemono.cafe/"></a>
  </section>
<?php elseif ( $development_theme == 'laslindas' || strpos($url, 'laslindas') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/Chalodillo"></a>
    <a class="spotlight" href="https://knighthood.kemono.cafe"></a>
    <a class="spotlight" href="https://picarto.tv/Chalodraws"></a>
  </section>
<?php elseif ( $development_theme == 'knighthood' || strpos($url, 'knighthood') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/Chalodillo"></a>
    <a class="spotlight" href="https://laslindas.kemono.cafe"></a>
    <a class="spotlight" href="https://picarto.tv/Chalodraws"></a>
  </section>
<?php elseif ( $development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/Cervelet"></a>
    <a class="spotlight" href="http://growingtroubles.smackjeeves.com/comics/2667472/growing-troubles-1/"></a>
    <a class="spotlight" href="http://www.offcentaured.com/"></a>
  </section>
<?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/avencri"></a>
    <a class="spotlight" href="https://picarto.tv/avencri"></a>
    <a class="spotlight" href="https://theeye.kemono.cafe/"></a>
  </section>
<?php endif; ?>
