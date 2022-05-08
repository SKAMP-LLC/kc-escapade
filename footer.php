<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage KC Escapade
 * @since KC Escapade 1.0
 */
?>
  </div><!-- .site-content -->

  <?php
    global $wp;
    $url = home_url( add_query_arg( array(), $wp->request ) );
    global $development_theme;
    if ( $development_theme == 'paprika' || strpos($url, 'paprika') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Paprika &#169; 2022 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'imew' || strpos($url, 'imew') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>iMew &#169; 2022 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'cb' || strpos($url, 'cb') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Caribbean Blue &#169; 2022 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'pmp' || strpos($url, 'pmp') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Practice Makes Perfect &#169; 2022 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'rascals' || strpos($url, 'rascals') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Rascals &#169; 2022 Mastergodai All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'knuckleup' || strpos($url, 'knuckle-up') !== false ) : ?>
    <footer id="colophon" class="site-footer" role="contentinfo">
      <span>Knuckle Up &#169; 2022 Mastergodai All Rights Reserved</span>
    </footer>
  <?php elseif ( $development_theme == 'theeye' || strpos($url, 'theeye') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>The Eye of Ramalach &#169; 2022 Avencri All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'knighthood' || strpos($url, 'knighthood') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Knighthood &#169; 2022 Chalo All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'laslindas' || strpos($url, 'laslindas') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Las Lindas &#169; 2022 Chalo All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Addictive Science &#169; 2022 Cervelet All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Tina of the South &#169; 2022 Avencri All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'bethellium' || strpos($url, 'bethellium') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Bethellium &#169; 2022 ABlueDeer All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'princessbunny' || strpos($url, 'princessbunny') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Princess Bunny &#169; 2022 bun-bun.art All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'ultrarosa-esp' || $development_theme == 'ultrarosa' || strpos($url, 'ultrarosa-esp') !== false || strpos($url, 'ultrarosa') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Ultra Rosa &#169; 2022 Sr.Kah All Rights Reserved</span>
      </footer>
  <?php elseif ( $development_theme == 'caughtinorbit' || strpos($url, 'caughtinorbit') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Caught In Orbit &#169; 2022 Alexandria Bowersox All Rights Reserved</span>
      </footer>
  <?php endif; ?>
</div><!-- .site -->

</body>
</html>
