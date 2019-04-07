<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Escapade
 * @since Escapade 1.0
 */

get_header(); ?>

  <section class="two-column">
    <div id="primary" class="comic">
      <?php do_action('comic-area'); ?>
    </div><!-- .comic -->
    <div class="social-sidebar">
      <div class="buttons">
        <ul>
          <li class="picarto">
            <a href=""></a>
          </li>
          <li class="fur-affinity">
            <a href=""></a>
          </li>
          <li class="deviant-art">
            <a href=""></a>
          </li>
          <li class="instagram">
            <a href=""></a>
          </li>
          <li class="youtube">
            <a href=""></a>
          </li>
          <li class="patreon">
            <a href=""></a>
          </li>
          <li class="paypal">
            <a href=""></a>
          </li>
          <li class="ko-fi">
            <a href=""></a>
          </li>
          <li class="gumroad">
            <a href=""></a>
          </li>
          <li class="twitter">
            <a href=""></a>
          </li>
          <li class="discord">
            <a href=""></a>
          </li>
        </ul>
      </div>
      <div class="banner">
        <a href=""></a>
      </div>
    </div><!-- .social-sidebar -->
  </section><!-- .two-column -->

  <section class="cross-promotion">
    <a class="spotlight"></a><a class="spotlight"></a><a class="spotlight"></a>
  </section>

  <section class="carousel">
    <div class="control previous_slot"></div>
    <div class="siema">
      <div class="comic_slot slot_0"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_1"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_2"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_0"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_1"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_2"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_0"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_1"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_2"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_0"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_1"
      >
        <a href="">Comic Slot</a>
      </div>
      <div class="comic_slot slot_2"
      >
        <a href="">Comic Slot</a>
      </div>
    </div>
    <div class="control next_slot"></div>
  </section>

<?php get_footer(); ?>
