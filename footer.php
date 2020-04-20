<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */
?>
  </div><!-- .site-content -->

  <?php 
    global $wp;
    $url = home_url( add_query_arg( array(), $wp->request ) );
    if ( strpos($url, '###') !== false || strpos($url, 'paprika') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Paprika &#169; 2020 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, 'kemono-cafe-comic.local') !== false || strpos($url, 'imew') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>iMew &#169; 2020 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'cb') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Caribbean Blue &#169; 2020 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'pmp') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Practice Makes Perfect &#169; 2020 Nekonny All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'rascals') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Rascals &#169; 2020 Mastergodai All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'theeye') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>The Eye of Ramalach &#169; 2020 Avencri All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'knighthood') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Knighthood &#169; 2020 Chalo All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'laslindas') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Las Lindas &#169; 2020 Chalo All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'addictivescience') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Addictive Science &#169; 2020 Cervelet All Rights Reserved</span>
      </footer>
  <?php elseif ( strpos($url, '###') !== false || strpos($url, 'tots') !== false ) : ?>
      <footer id="colophon" class="site-footer" role="contentinfo">
        <span>Tina of the South &#169; 2020 Avencri All Rights Reserved</span>
      </footer>
  <?php endif; ?>
</div><!-- .site -->

</body>
</html>
