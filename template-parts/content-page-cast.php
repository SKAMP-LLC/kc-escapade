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
  if ( strpos($url, '###') !== false || strpos($url, 'paprika') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="tina box">
        <div class="stats">
          <h1>Tina</h1>
          <h2>Height ~ 160cm (5'3")</h2>
          <h2>Stripes ~ 54 (she thinks)</h2>
          <p>Tina's energetic, fun, perhaps a bit naive... but very attached to her family and friends. Nekomimi are rare where she lives, so when she ran into another catgirl as kid, she immediately latched on. She loves thinking big, and as a result has developed a sense of adventure up to the task. She hopes to carry on her families restaurant one day, even though she's still got a lot to learn about cooking. For now, she works as both a waiter and a store clerk.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="yuki box">
        <div class="image"></div>
        <div class="stats">
          <h1>Yuki</h1>
          <h2>Height ~ 169cm (5'6")</h2>
          <h2>Ears ~ Caracal</h2>
          <p>As the more mature, level headed member of the group, it often falls on Yuki to keep everyone grounded. Still, she does enjoy having fun, and appreciates Tina for getting her to try out new things. They've known each other since they were kids, and although she found Tina to be rather annoying at first, eventually they bonded and now she's pretty much the " big sister" of the two.</p>
        </div>
      </div>
      <div class="ruby box">
        <div class="stats">
          <h1>Ruby</h1>
          <h2>Height ~ 165cm (5'5")</h2>
          <h2>"The Flames Make It Go Faster"</h2>
          <p>This meka obsessed nekomimi has both spunk and the smarts do back it up. She grew up on sci-fi anime and dreams of one day building her own "knight of the stars", a mobile, flight capable battle suit. But while the technology catches up to her imagination, she is content building models and tinkering with electronics. She is new to the collage where the other girls attend, and was very surprised to run into them.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="ron box">
        <div class="image"></div>
        <div class="stats">
          <h1>Ron</h1>
          <h2>Height ~ 182cm (6')</h2>
          <h2>Current projects ~ 16 (and counting)</h2>
          <p>A fan of group projects, Ron used to organize small anime conventions, but had big dreams of building something that would be open year round. His latest plan was to start up his own anime store, and of course, having a trio of cute nekomimi girls working in it would be a big hook, but he never expected to become the mascot himself... Now, finding himself in a very peculiar situation, he is more dependent than ever on the nekomimis to get by.</p>
        </div>
      </div>
      <div class="megan box">
        <div class="stats">
          <h1>Megan</h1>
          <h2>Height ~ 151cm (4'9")</h2>
          <h2>"There's nothing like a perfectly cooked picanha."</h2>
          <p>Being Tina's mom takes a special kind of woman. A foodie by heart, she loves a good meal almost as much as her business. Of course, family comes first, and this mama is literally a tiger. It sure takes one to Keep Tina grounded, but her keen senses have been well suited to the task. Together with her husband, Megan runs the small Korean restaurant "Paprika", and has allowed Ron to rent out the second floor for his latest project.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="kobe box">
        <div class="image"></div>
        <div class="stats">
          <h1>Kobe</h1>
          <h2>Height ~ 158cm (5'5")</h2>
          <h2>Scoville heat factor -RETRACTED-</h2>
          <p>As the head chef of Paprika, Kobe is used to running an efficient ship. And with his wife Megan helping manage the business side of things, he is free to peruse the perfection of his art. He's keeper of the Hachico secret family recipe, the "Tiger Special", an amazing dish, that if properly made, has the power to satisfy even the most discerning of pallets. He hopes to teach Tina this power one day, that is, if she can ever become responsible enough to wield it. In the meantime, she can bus the tables.</p>
        </div>
      </div>
    </div>
  </article>
<?php elseif ( strpos($url, 'kemono-cafe-comic.local') !== false || strpos($url, 'laslindas') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="mora box">
        <div class="stats">
          <h1>Mora</h1>
          <h2>Favorite Drink: Hefeweizen Style Beers</h2>
          <h2>Fun Fact: Suspiciously strong when distracted.</h2>
          <p>Mora's the sole owner of her family's vegetable farm "Las Lindas". Born with a short fuse and a fiery soul, she grew up a harsh and selfish woman, living a life of drinking and fun. Only the sudden news of her mother's passing was enough to bring her back and restore the family farm. Mora was unprepared for the burden of running a business on her own and quickly realized she needed help. Recruiting anyone who would come, she now finds herself surrounded by a colorful bunch of characters.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="minos box">
        <div class="image"></div>
        <div class="stats">
          <h1>Minos</h1>
          <h2>Favorite Dessert: Peanut Brittle</h2>
          <h2>Fun Fact: Some of the gophers he's thrown are still in orbit.</h2>
          <p>Minos is a mysterious wanderer who came to Las Lindas in search of seasonal work and stayed because he fell in love with its owner. Mora cannot help see her future in Minos as her own father came and went in the same fashion. But there are so many questions surrounding him that nothing is ever certain. Minos, at times, has even exhibited incredible strength far beyond even what a prime can do.</p>
        </div>
      </div>
      <div class="taffy box">
        <div class="stats">
          <h1>Taffy</h1>
          <h2>Favorite Hobby: Fantasy Gaming</h2>
          <h2>Fun Fact: Looks even cuter in reading glasses.</h2>
          <p>Taffy is one of the first who come to Mora's help when the farm proves to be more than she can handle alone and has since become Mora's closest friend. Taffy's determined to making the perfect home after leaving a broken one and acts as surrogate mother to many of the farm's residents. Now she wrestles with the idea of settling down too early, worried that never knowing what's out there will embitter like her own mother.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="alejandra box">
        <div class="image"></div>
        <div class="stats">
          <h1>Alejandra</h1>
          <h2>Favorite Hobby: Collecting Firearms</h2>
          <h2>Fun Fact: Has the most nicknames. "Patches", "Alej" and "Boss"</h2>
          <p>Alejandra is Mora's childhood friend with a much more complicated adulthood. When Mora abandoned her home at a young age, Alejandra focused on her career and became a cold and calculating woman. It was only when Mora returned that she realized how wounded she was and how empty her life had become. Alejandra became obsessed at defeating her new "rival" to prove her superiority and that she had made all the correct decisions in life.</p>
        </div>
      </div>
      <div class="tootsie box">
        <div class="stats">
          <h1>Tootsie</h1>
          <h2>Favorite Cheese: Anything not served in a can.</h2>
          <h2>Fun Fact: Somehow got a dairy company to build giant robots.</h2>
          <p>Tootsie met Alejandra in college and has stayed by her side ever since as Alexadria Dairy's lead of R&D. She's a gifted engineer whose imagination often exceeds the practical limits of her job. Enamored by Alej's limitless ambition, Tootsie grew to love boss and has been more of a personal attendant than employee in recent years.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'pmp') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="jess box">
        <div class="stats">
          <h1>Jess</h1>
          <h2>"Aren't walnuts the best?"</h2>
          <p>While Jess doesn't excel at any one thing in particular, she's pretty versatile bunny and tries to be at least a bit knolagable about any subject that's presented to her. This is probably a result of her lack of long term focus, causing her to cycle though a new hobby every other week. Because of this, she's not really a natural leader, although she loves group activities and spends a lot of time convincing her friends to embark on some grand new adventure.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="drea box">
        <div class="image"></div>
        <div class="stats">
          <h1>Drea</h1>
          <h2>"To break something is the first step in making it better"</h2>
          <p>Drea is a chaos perfectionist that doesn't seem to have much patience for the way of things, especially when they are so obviously flawed. This is the main cause of the frequent complaints, although there is also a natural curiosity to understand how things run and how they cold be improved. For some reason, Drea thinks that names are too much of a hassle to remember, and that a much more efficient system is to give everyone food nicknames.</p>
        </div>
      </div>
      <div class="addy box">
        <div class="stats">
          <h1>Addy</h1>
          <h2>"Change my mind"</h2>
          <p>Addy is a project of the internet generation. The frequent one liner/dad jokes and memes have been the cause of many a facepalm. Wants to become a gamer, but often becomes obsessed with a particular game mechanic and burns out. As a result of the online lifestyle, Addy does partake in occasional trolling, even with friends. In all other areas of life, Addy has perfected the art of procrastination and wears it as a medal, but by some miracle still manages to complete expected tasks within a second of their deadlines.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'cb') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="tina box">
        <div class="stats">
          <h1>Tina</h1>
          <p>Tina may not be the brightest bulb in the box, or the sharpest tool in the shed, or the- okay you get the point. Tina is a clutz, a bit self-centered, and well a tigress. However, don’t be fooled, she does care deeply for her friends and family. That aside, it was Tina’s own desire to become a full blown tiger using a strange concoction which was ultimately the cause of Nekonny’s condition. Feeling slightly responsible, and much to his dismay, Tina has vowed to take care of her new found pet, and help and guide him through the “Way of the Cat,” or something like that.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="yuki box">
        <div class="image"></div>
        <div class="stats">
          <h1>Yuki</h1>
          <p>Yuki is easily the “big sister” of the ragtag group. She has an unmatched maturity between the three, and a keen sense of reading people. She acts as an arbitrary limiter for Tina, knowing exactly how to handle her and keep things in control. Easily considered manipulative, however, she always has good intentions at heart. While usually kind, perverts beware as Yuki has little tolerance in such matters. While she’s not one to brag, she has nice full figure, and general mastery of whatever she tries (much to Tina’s own often disappointment.) It’s anyone’s guess what she’ll have to juggle as their vacation unfolds.</p>
        </div>
      </div>
      <div class="maya box">
        <div class="stats">
          <h1>Maya</h1>
          <p>Maya’s life is much like her left ear... full of holes. From her discovery in the lighthouse on a stormy night little known about her past or how she came to the island. Raised and cared for by now former Governor of Caribbean Blue, “Auntie” Rose, her life has been a rocky one at best. With her similarities to the historical ‘Nekocat’ she received plenty of scrutiny and criticism. Her presence often seen as a bad omen. This constant treatment over the years has had its effects on her, and with the arrival of Nekonny and his friends, it’s anyone’s guess what might happen next!</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="kimi box">
        <div class="image"></div>
        <div class="stats">
          <h1>Kimi</h1>
          <p>Kimi is one of the few resident cats that reside on Caribbean Blue. Kind, carefree, always curious, and filled with a unique interest in humans. Her personality could light up a room. However, despite her cute face and trademarked floppy ears she isn’t one to be trifled with! She will defend herself and the ones dear to her with a fierceness not seen in most cats. While her life has always been a simple one. She has always wondered if she was meant for something more.</p>
        </div>
      </div>
      <div class="nekonny box">
        <div class="stats">
          <h1>Nekonny</h1>
          <p>Nekonny is the protagonist of Caribbean Blue (...sorta.) An accident induced by a foolish act of Tina’s transformed him into that of an orange tabby that he is today. When we first encounter him and his friends they are only just arriving to the island of Caribbean Blue. Past false leads of possible cures have left him unsure about the future. However, the strange rumors that surround this island and its legends gives new hope that these might be key to helping him return to normal. Little does he know that he might get much more than he bargained for.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="rose box">
        <div class="image"></div>
        <div class="stats">
          <h1>Rose</h1>
          <p>Rose  is a kindly innkeeper on the island who shows Nekonny and his friends a true taste of home in a foreign land. After she discovered Maya in that old lighthouse, the populace became fearful of what it could mean for the island’s future. Rose would not hear their protests and kept Maya safe all those years, happy to have a daughter in her twilight-years. Taco Paco used the fear of the Nekocat legend to take Rose’s job, but she’s never lost her heart. Now with a bunch of fresh new faces on the island seeking the bell, she knows that the winds of change have once again come to the island. It is in her nature to not resist this, yet her heart goes out to Maya and Nekonny both. At the very least, she can give the poor kids a place to sleep...</p>
        </div>
      </div>
      <div class="alice box">
        <div class="stats">
          <h1>Alice</h1>
          <p>Alice is the closest thing to order that Caribbean Blue will ever know. She’s in love with her island home, protecting it against anyone who would seek to do it harm. Naturally when a bunch of new faces come up and two of them look like they could be Nekocats, you have a job to do! That isn’t to say you can’t bend the rules from time to time, and she quickly discovers that Tina and co are definitely not worth all the hype that their cat ears bring in tow. Despite her boss’ insistence to keep the party spinning, she finds ways to lend a hand when needed.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="taco box">
        <div class="image"></div>
        <div class="stats">
          <h1>Taco</h1>
          <p>Taco Paco is a complete moron. Naturally, he found his calling in politics and lives a very soft life as Caribbean Blue’s mayor. He’s selfish, ignorant of the world around him, and easily one of the biggest barriers to actual progress toward the Nekobell on the island for our party.  To his credit, he wears his station well. Despite being clearly unqualified for… anything, he zips around the island in a modified golf cart and keeps tabs on all the events on his island. Nekonny and his friends could really use some of that influence and reach to find the Nekobell. But, sure enough, Taco’s red tape always seems to be in the way...</p>
        </div>
      </div>
      <div class="natives box">
        <div class="stats">
          <h1>Natives</h1>
          <p>The native inhabitants of Caribbean blue come in many shapes and sizes... no wait, that doesn’t sound right... Ah, here we go: they come in only one shape and size, although some have been known use the fake mustache or hairpiece. although they may all look the same, they do have distinct personalities.  Many mysteries surround these generic looking snowmen. where did they come from? Are they male or female? do they wear clothes? are they just the products of the artists laziness for drawing large crowds? the world may never know. Regardless, the natives have inhabited Caribbean blue since long before recorded history.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'theeye') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="ronald box">
        <div class="stats">
          <h1>Ronald Rudentof</h1>
          <h2>Species: Urban Raccoon</h2>
          <h2>Age: 30</h2>
          <h2>Profession: Historian</h2>
          <p>The illegitimate son of a famous adventurer, Ron was raised by his aunt and with little involvement from his father. Smart but really insecure about his own abilities, he is a hard worker that values knowledge and the preservation of history and facts. This caused him to be quite the introverted person and he has some difficulty creating new friendships, but the ones he does manage to make grow to be really strong bonds.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php elseif ( strpos($url, '###') !== false || strpos($url, 'rascals') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="chrissy box">
        <div class="stats">
          <h1>Chrissy McCloud</h1>
          <h2>Age:  24</h2>
          <h2>“Bitchnuggets”</h2>
          <p>Chrissy is your average girl next door. She has a nasty habit of not knowing how to make up her mind on certain issues and jumping to conclusions too fast. Going to college was a fresh start for her on what was a very emotional draining High school year.On her first night of collage she met Quick in a very awkward situation causing her to think of him as a pervert; but over time Chrissy has developed deep feelings for Quick and after a drunken agreement between Jazmin and Raven she is now part of sharing him between the two.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="reiko box">
        <div class="image"></div>
        <div class="stats">
          <h1>Reiko Usagi</h1>
          <h2>Age: 25 </h2>
          <h2>“Like what you see?”</h2>
          <p>A fun personality and a dirty mind makes Reiko the trickster of her group. Hailing from a long line of ninjas, she proved herself a prodigy; being able to master complex techniques with ease. After graduating the Godai Academy of Ninjutsu she followed her classmate and crush Skye westwards and has grown so accustomed to the new lifestyle there that she is reluctant to go back to Japan and take her mother’s place as head of the Academy.</p>
        </div>
      </div>
      <div class="jazmin box">
        <div class="stats">
          <h1>Jazmin Usagi </h1>
          <h2>Age:  24</h2>
          <h2>“I have no time for your games”</h2>
          <p>Jazmin is second in line to take over the Godai Academy. and is frustrated that its been handed to Reiko who obviously is not taking the role seriously. Jazmin is very well much more mature than her older sister Reiko and is not afraid to lay it out for anyone that annoys her. When she first arrived she met Quick and he annoyed her with his wishy washy ways. but over time began to develop feelings towards him, and after a drunken agreement with Chrissy and Raven she is now in a three way relationship with them.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php endif; ?>
