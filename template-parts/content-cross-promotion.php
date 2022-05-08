<?php
/**
 * The template for cross promotions.
 *
 * @package WordPress
 * @subpackage KC Escapade
 * @since KC Escapade 1.0
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
<?php elseif ( $development_theme == 'knuckleup' || strpos($url, 'knuckle-up') !== false ) : ?>
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
    <a class="spotlight" href="http://growingtroubles.thecomicseries.com/"></a>
    <a class="spotlight" href="http://www.offcentaured.com/"></a>
  </section>
<?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/avencri"></a>
    <a class="spotlight" href="https://picarto.tv/avencri"></a>
    <a class="spotlight" href="https://theeye.kemono.cafe/"></a>
  </section>
<?php elseif ( $development_theme == 'bethellium' || strpos($url, 'bethellium') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://landing.mailerlite.com/webforms/landing/w7s9n2"></a>
    <a class="spotlight" href="https://www.patreon.com/dark_blue_workshop"></a>
    <a class="spotlight" href="http://moonlace.darkbluecomics.com/"></a>
  </section>
<?php elseif ( $development_theme == 'princessbunny' || strpos($url, 'princessbunny') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://ko-fi.com/thebunbunart"></a>
    <a class="spotlight" href="https://bun-bun.art/"></a>
    <a class="spotlight" href="https://www.patreon.com/princess_bunny"></a>
  </section>
<?php elseif ( $development_theme == 'ultrarosa-esp' || $development_theme == 'ultrarosa' || strpos($url, 'ultrarosa-esp') !== false || strpos($url, 'ultrarosa') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://patreon.com/ultrarosa"></a>
    <a class="spotlight" href="https://ultrarosa.kemono.cafe/"></a>
    <a class="spotlight" href="https://ultrarosa-esp.kemono.cafe/"></a>
  </section>
<?php elseif ( $development_theme == 'caughtinorbit' || strpos($url, 'caughtinorbit') !== false  ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://caughtinorbit.kemono.cafe"></a>
    <a class="spotlight" href="https://caughtinorbit.kemono.cafe"></a>
    <a class="spotlight" href="https://caughtinorbit.kemono.cafe"></a>
  </section>
<?php endif; ?>
