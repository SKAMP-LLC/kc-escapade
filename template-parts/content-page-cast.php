<?php
/**
 * The template for the cast page.
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
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="tina box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Tina</h1>
          <p>Tina's energetic, fun, perhaps a bit naive... but very attached to her family and friends. Nekomimi are rare where she lives, so when she ran into another catgirl as kid, she imediately lacthed on. She hopes to carry on her families resturant one day, even though she's still got a lot to learn about cooking.</p>
        </div>
      </div>
      <div class="yuki box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Yuki</h1>
          <p>As the more mature, level headed member of the group, it often falls on Yuki to keep everyone grounded. Still, she does enjoy having fun, and appreciates Tina for getting her to try out new things. They've known each other since they were kids, and although she found Tina to be rather annoying at first, eventually they bonded and now she's pretty much the " big sister" of the two.</p>
        </div>
      </div>
      <div class="ruby box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Ruby</h1>
          <p>This meka obsessed nekomimi has both spunk and the smarts do back it up. She grew up on sci-fi anime and dreams of one day building her own "knight of the stars", a mobile, flight capable battle suit. But while the technology catches up to her imagination, she is content building models and tinkering with eletronics. She is new to the collage where the other girls attend, and was very surprised to run into them.</p>
        </div>
      </div>
      <div class="ron box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Ron</h1>
          <p>A fan of group projects, Ron used to orginize small anime conventions, but had big dreams of building something that would be open year round. His latest plan was to start up his own anime store, and of course, having a trio of cute nekomimi girls working in it would be a big hook, but he never expected to become the mascot himself... Now, finding himself in a very peculiar situation, he is more dependant than ever on the nekomimis to get by.</p>
        </div>
      </div>
      <div class="megan box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Megan</h1>
          <p>Being Tinas mom takes a special kind of woman. A foodie by heart, she loves a good meal almost as much as her buisness. Of course, family comes first, </p>
        </div>
      </div>
      <div class="kobe box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Kobe</h1>
          <p>As the head chef of Paprika, Kobe is used to running an efficiant ship. He's keeper of the Hachico secret family recipie, the "Tiger Special", an amazing dish, that if properly made, has the power to satisfy even the most diserning of pallets.</p>
        </div>
      </div>
    </div>
  </article>
<?php endif; ?>
