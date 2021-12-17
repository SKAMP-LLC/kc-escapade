<?php
/**
 * The template for the social buttons.
 *
 * @package WordPress
 * @subpackage KC Escapade
 * @since KC Escapade 1.0
 */
?>

<div class="wrapper">
  <div>
    <!-- Primary Navigation -->
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'tudor' ); ?>">

      <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu',
          ) );
        ?>
    </nav>
    <?php endif; ?>
    <?php
      global $wp;
      $url = home_url( add_query_arg( array(), $wp->request ) );
      global $development_theme;
      if ( $development_theme == 'paprika' || strpos($url, 'paprika') !== false ) : ?>

      <ul class="buttons">
        <li class="picarto">
          <a href="https://picarto.tv/Nekonny"></a>
        </li>
        <li class="fur-affinity">
          <a href="http://www.furaffinity.net/user/freelancemanga"></a>
        </li>
        <li class="deviant-art">
          <a href="https://www.deviantart.com/freelancemanga"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/user/TheDrawingNeko"></a>
        </li>
        <li class="patreon">
          <a href="https://www.patreon.com/nekonny"></a>
        </li>
        <li class="paypal">
          <a href="https://paypal.me/nekonny"></a>
        </li>
        <li class="ko-fi">
          <a href="https://ko-fi.com/nekonny"></a>
        </li>
        <li class="gumroad">
          <a href="https://gumroad.com/nekonny"></a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/nekonny"></a>
        </li>
      </ul>
      <div class="kc-side-banner">
        <a href="https://kemono.cafe/"></a>
      </div>
      <ul class="partners">
        <li class="thedepths">
          <a href="https://www.thedepthscomic.com/"></a>
        </li>
        <li class="twc">
          <a href="https://www.topwebcomics.com/vote/26468"></a>
        </li>
        <li class="twokinds">
          <a href="http://twokinds.keenspot.com"></a>
        </li>
        <li class="mylifewithfel">
          <a href="https://mylifewithfel.com"></a>
        </li>
        <li class="yoshsaga">
          <a href="https://yoshsaga.com"></a>
        </li>
        <li class="artificialincident">
          <a href="https://artificialincident.com"></a>
        </li>
      </ul>
    </div>

  <?php elseif ( $development_theme == 'imew' || strpos($url, 'imew') !== false ) : ?>
    <div>
      <ul class="buttons">
        <li class="picarto">
          <a href="https://picarto.tv/Nekonny"></a>
        </li>
        <li class="fur-affinity">
          <a href="http://www.furaffinity.net/user/freelancemanga"></a>
        </li>
        <li class="deviant-art">
          <a href="https://www.deviantart.com/freelancemanga"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/user/TheDrawingNeko"></a>
        </li>
        <li class="patreon">
          <a href="https://www.patreon.com/nekonny"></a>
        </li>
        <li class="paypal">
          <a href="https://paypal.me/nekonny"></a>
        </li>
        <li class="ko-fi">
          <a href="https://ko-fi.com/nekonny"></a>
        </li>
        <li class="gumroad">
          <a href="https://gumroad.com/nekonny"></a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/nekonny"></a>
        </li>
      </ul>
      <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
      </div>
      <ul class="partners">
        <li class="twc">
          <a href="https://www.topwebcomics.com/vote/26469"></a>
        </li>
      </ul>
    </div>

  <?php elseif ( $development_theme == 'cb' || strpos($url, 'cb') !== false ) : ?>
    <div>
      <ul class="buttons">
        <li class="picarto">
          <a href="https://picarto.tv/Nekonny"></a>
        </li>
        <li class="fur-affinity">
          <a href="http://www.furaffinity.net/user/freelancemanga"></a>
        </li>
        <li class="deviant-art">
          <a href="https://www.deviantart.com/freelancemanga"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/user/TheDrawingNeko"></a>
        </li>
        <li class="patreon">
          <a href="https://www.patreon.com/nekonny"></a>
        </li>
        <li class="paypal">
          <a href="https://paypal.me/nekonny"></a>
        </li>
        <li class="ko-fi">
          <a href="https://ko-fi.com/nekonny"></a>
        </li>
        <li class="gumroad">
          <a href="https://gumroad.com/nekonny"></a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/nekonny"></a>
        </li>
      </ul>
      <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
      </div>
      <ul class="partners">
        <li class="twc">
          <a href="https://www.topwebcomics.com/vote/8890"></a>
        </li>
        <li class="yoshsaga">
          <a href="https://yoshsaga.com"></a>
        </li>
        <li class="artificialincident">
          <a href="https://artificialincident.com"></a>
        </li>
      </ul>
    </div>

  <?php elseif ( $development_theme == 'rascals' || strpos($url, 'rascals') ) : ?>
    <div>
      <ul class="buttons">
        <li class="picarto">
          <a href="https://picarto.tv/mastergodai"></a>
        </li>
        <li class="fur-affinity">
          <a href="http://www.furaffinity.net/user/mastergodai/"></a>
        </li>
        <li class="deviant-art">
          <a href="https://www.deviantart.com/mastergodai"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/channel/UCXhv4xTDfjixNT-yxMn44FA"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/user/playorgodai"></a>
        </li>
        <li class="patreon">
          <a href="https://www.patreon.com/Mastergodai"></a>
        </li>
        <li class="gumroad">
          <a href="https://gumroad.com/mastergodai"></a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/Mastergodai"></a>
        </li>
      </ul>
      <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
      </div>
      <ul class="partners">
        <li class="twc">
          <a href="https://www.topwebcomics.com/vote/9929"></a>
        </li>
        <li class="twokinds">
          <a href="http://twokinds.keenspot.com"></a>
        </li>
        <li class="thedepthscomic">
          <a href="http://thedepthscomic.com"></a>
        </li>
        <li class="yoshsaga">
          <a href="https://yoshsaga.com"></a>
        </li>
        <li class="artificialincident">
          <a href="https://www.artificialincident.com"></a>
        </li>
        <li class="draconiachronicles">
          <a href="https://www.draconiachronicles.com/"></a>
        </li>
        <li class="wukrii">
          <a href="https://www.wukrii.com/"></a>
        </li>
        <li class="iotters">
          <a href="https://tapas.io/series/IOtters"></a>
        </li>
        <li class="thedepths">
          <a href="https://www.thedepthscomic.com/"></a>
        </li>
      </ul>
    </div>

    <?php elseif ( $development_theme == 'knuckleup' || strpos($url, 'knuckle-up') !== false ) : ?>
    <div>
      <ul class="buttons">
        <li class="picarto">
          <a href="https://picarto.tv/mastergodai"></a>
        </li>
        <li class="fur-affinity">
          <a href="http://www.furaffinity.net/user/mastergodai/"></a>
        </li>
        <li class="deviant-art">
          <a href="https://www.deviantart.com/mastergodai"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/channel/UCXhv4xTDfjixNT-yxMn44FA"></a>
        </li>
        <li class="youtube">
          <a href="https://www.youtube.com/user/playorgodai"></a>
        </li>
        <li class="patreon">
          <a href="https://www.patreon.com/Mastergodai"></a>
        </li>
        <li class="gumroad">
          <a href="https://gumroad.com/mastergodai"></a>
        </li>
        <li class="twitter">
          <a href="https://twitter.com/Mastergodai"></a>
        </li>
      </ul>
      <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
      </div>
      <ul class="partners">
        <li class="twc">
          <a href="https://www.topwebcomics.com/vote/26471"></a>
        </li>
        <li class="twokinds">
          <a href="http://twokinds.keenspot.com"></a>
        </li>
        <li class="thedepthscomic">
          <a href="http://thedepthscomic.com"></a>
        </li>
        <li class="yoshsaga">
          <a href="https://yoshsaga.com"></a>
        </li>
        <li class="artificialincident">
          <a href="https://www.artificialincident.com"></a>
        </li>
        <li class="draconiachronicles">
          <a href="https://www.draconiachronicles.com/"></a>
        </li>
        <li class="wukrii">
          <a href="https://www.wukrii.com/"></a>
        </li>
        <li class="iotters">
          <a href="https://tapas.io/series/IOtters"></a>
        </li>
      </ul>
    </div>

    <?php elseif ( $development_theme == 'theeye' || strpos($url, 'theeye') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="picarto">
            <a href="https://picarto.tv/avencri"></a>
          </li>
          <li class="fur-affinity">
            <a href="https://www.furaffinity.net/user/avencri/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/avencri"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/avencri"></a>
          </li>
          <li class="paypal">
            <a href="https://www.paypal.com/paypalme2/avencri"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/Avencri"></a>
          </li>
          <li class="twitter">
            <a href="https://twitter.com/avencri"></a>
          </li>
          <li class="instagram">
            <a href="https://www.instagram.com/avencri_eggmaster/"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="twc">
            <a href="https://www.topwebcomics.com/vote/7985"></a>
          </li>
          <li class="mylifewithfel">
            <a href="https://mylifewithfel.com"></a>
          </li>
          <li class="wukrii">
            <a href="https://www.wukrii.com/"></a>
          </li>
          <li class="mousechievous">
            <a href="https://studiokhimera.com/mousechievous/"></a>
          </li>
          <li class="uberquest">
            <a href="https://studiokhimera.com/uberquest/"></a>
          </li>
          <li class="vreakerz">
            <a href="http://vreakerz.angrykitten.nl/"></a>
          </li>
        </ul>
      </div>

      <?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="picarto">
            <a href="https://picarto.tv/avencri"></a>
          </li>
          <li class="fur-affinity">
            <a href="https://www.furaffinity.net/user/avencri/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/avencri"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/avencri"></a>
          </li>
          <li class="paypal">
            <a href="https://www.paypal.com/paypalme2/avencri"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/Avencri"></a>
          </li>
          <li class="twitter">
            <a href="https://twitter.com/avencri"></a>
          </li>
          <li class="instagram">
            <a href="https://www.instagram.com/avencri_eggmaster/"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="mylifewithfel">
            <a href="https://mylifewithfel.com"></a>
          </li>
          <li class="wukrii">
            <a href="https://www.wukrii.com/"></a>
          </li>
          <li class="mousechievous">
            <a href="https://studiokhimera.com/mousechievous/"></a>
          </li>
          <li class="uberquest">
            <a href="https://studiokhimera.com/uberquest/"></a>
          </li>
        </ul>
      </div>

    <?php elseif ( $development_theme == 'pmp' || strpos($url, 'pmp') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="picarto">
            <a href="https://picarto.tv/Nekonny"></a>
          </li>
          <li class="fur-affinity">
            <a href="http://www.furaffinity.net/user/freelancemanga"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/freelancemanga"></a>
          </li>
          <li class="youtube">
            <a href="https://www.youtube.com/user/TheDrawingNeko"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/nekonny"></a>
          </li>
          <li class="paypal">
            <a href="https://paypal.me/nekonny"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/nekonny"></a>
          </li>
          <li class="gumroad">
            <a href="https://gumroad.com/nekonny"></a>
          </li>
          <li class="twitter">
            <a href="https://twitter.com/nekonny"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="twc">
            <a href="http://topwebcomics.com/vote/26467"></a>
          </li>
        </ul>
      </div>

      <?php elseif ( $development_theme == 'laslindas' || strpos($url, 'laslindas') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="picarto">
            <a href="https://picarto.tv/Chalodraws"></a>
          </li>
          <li class="fur-affinity">
            <a href="http://www.furaffinity.net/user/chalodillo/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/chalosan"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/Chalodillo"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/chalodillo"></a>
          </li>
          <li class="twitter">
            <a href="https://twitter.com/Chalodillo"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="twc">
            <a href="https://topwebcomics.com/vote/26707"></a>
          </li>
          <li class="twokinds">
            <a href="http://twokinds.keenspot.com"></a>
          </li>
          <li class="mylifewithfel">
            <a href="https://mylifewithfel.com"></a>
          </li>
          <li class="themonsterunderthebed">
            <a href="https://themonsterunderthebed.net"></a>
          </li>
          <li class="bittersweetcandybowl">
            <a href="https://bittersweetcandybowl.com"></a>
          </li>
          <li class="draconiachronicles">
            <a href="https://www.draconiachronicles.com/"></a>
          </li>
          <li class="wukrii">
            <a href="https://www.wukrii.com/"></a>
          </li>
          <li class="uberquest">
            <a href="https://studiokhimera.com/uberquest/"></a>
          </li>
        </ul>
      </div>

      <?php elseif ( $development_theme == 'knighthood' || strpos($url, 'knighthood') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="picarto">
            <a href="https://picarto.tv/Chalodraws"></a>
          </li>
          <li class="fur-affinity">
            <a href="http://www.furaffinity.net/user/chalodillo/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/chalosan"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/Chalodillo"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/chalodillo"></a>
          </li>
          <li class="twitter">
            <a href="https://twitter.com/Chalodillo"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="twc">
            <a href="https://www.topwebcomics.com/vote/26708"></a>
          </li>
          <li class="twokinds">
            <a href="http://twokinds.keenspot.com"></a>
          </li>
          <li class="mylifewithfel">
            <a href="https://mylifewithfel.com"></a>
          </li>
          <li class="themonsterunderthebed">
            <a href="https://themonsterunderthebed.net"></a>
          </li>
          <li class="bittersweetcandybowl">
            <a href="https://bittersweetcandybowl.com"></a>
          </li>
          <li class="draconiachronicles">
            <a href="https://www.draconiachronicles.com/"></a>
          </li>
          <li class="wukrii">
            <a href="https://www.wukrii.com/"></a>
          </li>
        </ul>
      </div>

      <?php elseif ( $development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="picarto">
            <a href="https://picarto.tv/cervelet"></a>
          </li>
          <li class="fur-affinity">
            <a href="http://www.furaffinity.net/user/cervelet/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://cervelet.deviantart.com/"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/Cervelet"></a>
          </li>
          <li class="youtube">
            <a href="https://www.youtube.com/user/Goddot"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="atarmslength">
            <a href="http://atarmslength.net"></a>
          </li>
        </ul>
      </div>

      <?php elseif ( $development_theme == 'bethellium' || strpos($url, 'bethellium') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="twitter">
            <a href="https://twitter.com/ABD_artist"></a>
          </li>
          <li class="newgrounds">
            <a href=" https://abluedeer.newgrounds.com/"></a>
          </li>
          <li class="instagram">
            <a href="https://www.instagram.com/a_blue_deer/"></a>
          </li>
          <li class="gumroad">
            <a href="https://gumroad.com/abd#"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/abluedeer"></a>
          </li>
          <li class="fur-affinity">
            <a href="https://www.furaffinity.net/commissions/abluedeer/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/a-bluedeer/"></a>
          </li>
          <li class="patreon">
            <a href="https://www.patreon.com/dark_blue_workshop"></a>
          </li>
          <li class="picarto">
            <a href="https://picarto.tv/DarkBlueWorkshop"></a>
          </li>
          <li class="youtube">
            <a href="https://www.youtube.com/channel/UCK38edoeeIbkBaHj7TMk1Hw"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
        <ul class="partners">
          <li class="twc">
            <a href="https://www.topwebcomics.com/vote/25508"></a>
          </li>
          <li class="bloodline">
            <a href="http://w0lfmare.xepher.net/"></a>
          </li>
          <li class="cchan">
            <a href="https://tapas.io/series/C-chans-a-Catgirl"></a>
          </li>
          <li class="moonlace">
            <a href="https://moonlace.darkbluecomics.com/"></a>
          </li>
          <li class="rayfox">
            <a href="https://www.rayfoxthecomic.com/"></a>
          </li>
          <li class="thedepths">
            <a href="https://www.thedepthscomic.com/"></a>
          </li>
          <li class="wukrii">
            <a href="https://www.wukrii.com/"></a>
          </li>
        </ul>
      </div>
    <?php elseif ( $development_theme == 'princessbunny' || strpos($url, 'princessbunny') !== false ) : ?>
      <div>
        <ul class="buttons">
          <li class="twitter">
            <a href="https://twitter.com/TheBunBunART"></a>
          </li>
          <li class="ko-fi">
            <a href="https://ko-fi.com/thebunbunart"></a>
          </li>
          <li class="fur-affinity">
            <a href="https://www.furaffinity.net/user/bunbun-art/"></a>
          </li>
          <li class="deviant-art">
            <a href="https://www.deviantart.com/thebunbunart"></a>
          </li>
        </ul>
        <div class="kc-side-banner">
          <a href="https://kemono.cafe/"></a>
        </div>
      </div>
  <?php endif; ?>
</div>
