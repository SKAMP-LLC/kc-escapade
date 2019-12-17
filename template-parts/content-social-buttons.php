<?php
/**
 * The template for the social buttons.
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */
?>



<?php 
  global $wp;
  $url = home_url( add_query_arg( array(), $wp->request ) );
  if ( strpos($url, '###') !== false || strpos($url, 'paprika') !== false ) : ?>
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
    <ul class="partners">
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

<?php elseif ( strpos($url, '###') !== false || strpos($url, 'imew') !== false ) : ?>
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
    <ul class="partners">
    </ul>
  </div>

<?php elseif ( strpos($url, '###') !== false || strpos($url, 'cb') !== false ) : ?>
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
    <ul class="partners">
      <li class="yoshsaga">
        <a href="https://yoshsaga.com"></a>
      </li>
      <li class="artificialincident">
        <a href="https://artificialincident.com"></a>
      </li>
    </ul>
  </div>

<?php elseif ( strpos($url, '###') !== false || strpos($url, 'rascals') !== false ) : ?>
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
      <li class="instagram">
        <a href="https://www.instagram.com/mastergodai/"></a>
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
    <ul class="partners">
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
        <a href="http://thedraconiachronicles.studiokhimera.com"></a>
      </li>
      <li class="wukrii">
        <a href="https://www.wukrii.com/"></a>
      </li>
    </ul>
  </div>

  <?php elseif ( strpos($url, 'kemono-cafe-comic.local') !== false || strpos($url, 'theeye') !== false ) : ?>
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
      </ul>
      <ul class="partners">
        <li class="mylifewithfel">
          <a href="https://mylifewithfel.com"></a>
        </li>
        <li class="wukrii">
          <a href="https://www.wukrii.com/"></a>
        </li>
        <li class="studiokhimera">
          <a href="https://studiokhimera.com/"></a>
        </li>
        <li class="mousechievous">
          <a href="ttps://studiokhimera.com/mousechievous/"></a>
        </li>
        <li class="uberquest">
          <a href="https://studiokhimera.com/uberquest/"></a>
        </li>
      </ul>
    </div>

  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'pmp') !== false ) : ?>
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
      <ul class="partners">
      </ul>
    </div>

    <?php elseif ( strpos($url, '###') !== false || strpos($url, 'laslindas') !== false || strpos($url, 'knighthood') !== false ) : ?>
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
      <ul class="partners">
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
          <a href="http://thedraconiachronicles.studiokhimera.com"></a>
        </li>
        <li class="wukrii">
          <a href="https://www.wukrii.com/"></a>
        </li>
      </ul>
    </div>

    <?php elseif ( strpos($url, '###') !== false || strpos($url, 'addictivescience') !== false ) : ?>
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
      <ul class="partners">
        <li class="atarmslength">
          <a href="http://atarmslength.net"></a>
        </li>
      </ul>
    </div>

    <?php elseif ( strpos($url, '###') !== false || strpos($url, 'tots') !== false ) : ?>
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
      </ul>
      <ul class="partners">
        <li class="studiokhimera">
          <a href="https://studiokhimera.com/"></a>
        </li>
        <li class="mousechievous">
          <a href="ttps://studiokhimera.com/mousechievous/"></a>
        </li>
        <li class="uberquest">
          <a href="https://studiokhimera.com/uberquest/"></a>
        </li>
      </ul>
    </div>
<?php endif; ?>
