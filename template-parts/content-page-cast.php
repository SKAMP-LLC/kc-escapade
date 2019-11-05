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
          <h2>Height ~ 160cm (5'3")</h2>
          <h2>Stripes ~ 54 (she thinks)</h2>
          <p>Tina's energetic, fun, perhaps a bit naive... but very attached to her family and friends. Nekomimi are rare where she lives, so when she ran into another catgirl as kid, she immediately latched on. She loves thinking big, and as a result has developed a sense of adventure up to the task. She hopes to carry on her families restaurant one day, even though she's still got a lot to learn about cooking. For now, she works as both a waiter and a store clerk.</p>
        </div>
      </div>
      <div class="yuki box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Yuki</h1>
          <h2>Height ~ 169cm (5'6")</h2>
          <h2>Ears ~ Caracal</h2>
          <p>As the more mature, level headed member of the group, it often falls on Yuki to keep everyone grounded. Still, she does enjoy having fun, and appreciates Tina for getting her to try out new things. They've known each other since they were kids, and although she found Tina to be rather annoying at first, eventually they bonded and now she's pretty much the " big sister" of the two.</p>
        </div>
      </div>
      <div class="ruby box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Ruby</h1>
          <h2>Height ~ 165cm (5'5")</h2>
          <h2>"The Flames Make It Go Faster"</h2>
          <p>This meka obsessed nekomimi has both spunk and the smarts do back it up. She grew up on sci-fi anime and dreams of one day building her own "knight of the stars", a mobile, flight capable battle suit. But while the technology catches up to her imagination, she is content building models and tinkering with electronics. She is new to the collage where the other girls attend, and was very surprised to run into them.</p>
        </div>
      </div>
      <div class="ron box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Ron</h1>
          <h2>Height ~ 182cm (6')</h2>
          <h2>Current projects ~ 16 (and counting)</h2>
          <p>A fan of group projects, Ron used to organize small anime conventions, but had big dreams of building something that would be open year round. His latest plan was to start up his own anime store, and of course, having a trio of cute nekomimi girls working in it would be a big hook, but he never expected to become the mascot himself... Now, finding himself in a very peculiar situation, he is more dependent than ever on the nekomimis to get by.</p>
        </div>
      </div>
      <div class="megan box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Megan</h1>
          <h2>Height ~ 151cm (4'9")</h2>
          <h2>"There's nothing like a perfectly cooked picanha."</h2>
          <p>Being Tina's mom takes a special kind of woman. A foodie by heart, she loves a good meal almost as much as her business. Of course, family comes first, and this mama is literally a tiger. It sure takes one to Keep Tina grounded, but her keen senses have been well suited to the task. Together with her husband, Megan runs the small Korean restaurant "Paprika", and has allowed Ron to rent out the second floor for his latest project.</p>
        </div>
      </div>
      <div class="kobe box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Kobe</h1>
          <h2>Height ~ 158cm (5'5")</h2>
          <h2>Scoville heat factor -RETRACTED-</h2>
          <p>As the head chef of Paprika, Kobe is used to running an efficient ship. And with his wife Megan helping manage the business side of things, he is free to peruse the perfection of his art. He's keeper of the Hachico secret family recipe, the "Tiger Special", an amazing dish, that if properly made, has the power to satisfy even the most discerning of pallets. He hopes to teach Tina this power one day, that is, if she can ever become responsible enough to wield it. In the meantime, she can bus the tables.</p>
        </div>
      </div>
    </div>
  </article>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'laslindas') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="mora box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Mora</h1>
          <p>Mora's the sole owner of her family's vegetable farm "Las Lindas". Born with a short fuse and a fiery soul, she grew up a harsh and selfish woman, living a life of drinking and fun. Only the sudden news of her mother's passing was enough to bring her back and restore the family farm. Mora was unprepared for the burden of running a business on her own and quickly realized she needed help. Recruiting anyone who would come, she now finds herself surrounded by a colorful bunch of characters.</p>
        </div>
      </div>
      <div class="minos box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Minos</h1>
          <p>Minos is a mysterious wanderer who came to Las Lindas in search of seasonal work and stayed because he fell in love with its owner. Mora cannot help see her future in Minos as her own father came and went in the same fashion. But there are so many questions surrounding him that nothing is ever certain. Minos, at times, has even exhibited incredible strength far beyond even what a prime can do.</p>
        </div>
      </div>
      <div class="taffy box">
        <div class="right image"></div>
        <div class="left stats">
          <h1>Taffy</h1>
          <p>Taffy is one of the first who come to Mora's help when the farm proves to be more than she can handle alone and has since become Mora's closest friend. Taffy's determined to making the perfect home after leaving a broken one and acts as surrogate mother to many of the farm's residents. Now she wrestles with the idea of settling down too early, worried that never knowing what's out there will embitter like her own mother.</p>
        </div>
      </div>
      <div class="alejandra box">
        <div class="left image"></div>
        <div class="right stats">
          <h1>Alejandra</h1>
          <p>Alejandra is Mora's childhood friend with a much more complicated adulthood. When Mora abandoned her home at a young age, Alejandra focused on her career and became a cold and calculating woman. It was only when Mora returned that she realized how wounded she was and how empty her life had become. Alejandra became obsessed at defeating her new "rival" to prove her superiority and that she had made all the correct decisions in life.</p>
        </div>
      </div>
    </div>
  </article>
<?php endif; ?>
