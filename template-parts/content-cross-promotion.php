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
  if ( strpos($url, 'kemono-cafe-comic.local') !== false || strpos($url, 'paprika') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://imew.kemono.cafe"></a>
    <a class="spotlight" href="https://pmp.kemono.cafe"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
  </section>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'imew') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://paprika.kemono.cafe/"></a>
    <a class="spotlight" href="https://pmp.kemono.cafe/"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
  </section>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'cb') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://imew.kemono.cafe/"></a>
    <a class="spotlight" href="https://nekonny.com/#/store"></a>
    <a class="spotlight" href="https://paprika.kemono.cafe/"></a>
  </section>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'rascals') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.youtube.com/user/playorgodai"></a>
    <a class="spotlight" href="https://gumroad.com/mastergodai"></a>
    <a class="spotlight" href="https://picarto.tv/mastergodai"></a>
  </section>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'theeye') !== false ) : ?>
  <section class="cross-promotion">
    <a class="spotlight" href="https://www.patreon.com/avencri"></a>
    <a class="spotlight" href="https://picarto.tv/avencri"></a>
    <a class="spotlight" href="https://tinaofthesouth.kemono.cafe"></a>
  </section>
<?php endif; ?>
