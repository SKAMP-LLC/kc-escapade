<?php
/**
 * The template for the cast page.
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
<?php elseif ( $development_theme == 'imew' || strpos($url, 'imew') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <h2 class="empty">This comic does not have a cast page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'rascals' || strpos($url, 'rascals') !== false ) : ?>
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
<?php elseif ( $development_theme == 'theeye' || strpos($url, 'theeye') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="ronald box">
        <div class="stats">
          <h1>Ronald Rudentof</h1>
          <h2>Species: Urban Raccoon</h2>
          <h2>Age: 30</h2>
          <h2>Height:  1.73 mts / 5.65 ft</h2>
          <h2>Weight: 65 kgs / 143.2 lbs</h2>
          <h2>Profession: Historian</h2>
          <h2>Affiliation: Hamilton Escarot Museum of History and Art</h2>
          <h2>Location: Neon City, Fanfolia</h2>
          <p>The illegitimate son of a famous adventurer, Ron was raised by his aunt and with little involvement from his father. Smart but really insecure about his own abilities, he is a hard worker that values knowledge and the preservation of history and facts. This caused him to be quite the introverted person and he has some difficulty creating new friendships, but the ones he does manage to make grow to be really strong bonds.</p>
          <p>Not physically impressive or strong, he was a frequent target of bullies, but he made a deal with Ben to deal with that. Ben acted as Ron’s bodyguard, in exchange for Ron’s help with his studies. Ron’s intelligence makes him an excellent tutor, and he’s also acted as tutor for Ben’s sister Miranda, and is trying to help Marianne presently.</p>
          <p>Ron feels like he has something to prove to the world, but unlike his father he is not comfortable being in the spotlight.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="ben box">
      <div class="image"></div>
        <div class="stats">
          <h1>Benjamin Johnson</h1>
          <h2>Species: Magpie</h2>
          <h2>Age: 30</h2>
          <h2>Height:  1.84 mts / 6.00 ft</h2>
          <h2>Weight: 85 kgs / 187.4 lbs</h2>
          <h2>Profession: Real Estate Agent</h2>
          <h2>Affiliation: None</h2>
          <h2>Location: Neon City, Fanfolia</h2>
          <p>Being raised in poverty, Ben grew up having to learn to live on his own merits with wit and cunning. While he has street smarts and charm, he was never a brilliant student, and was in danger of repeating fourth grade if it wasn’t for his chance meeting with Ron (while swiping his homework and changing the name) and an agreement to defend him from bullies in exchange for tutoring. While begrudgingly accepting at first, Ben and Ron grew to be best friends.</p>
          <p>The first born of a single mother, Ben has two younger slacker brothers and a youngest little sister that he spoils. As the oldest man in his family, he had to work hard to help his mother support the rest of his siblings and even managed to put his little sister Miranda through college, while he didn’t go past high school level education. Ben is proud of his sacrifice.</p>
          <p>Even if he didn’t get professional education, Ben has a silver tongue and keeps in optimal physical condition. This allows him to parlay his charms into a real estate career, plus plenty of womanizing. He is also very well connected in less savoury parts of town, allowing him some some easy access to “services” he may need in the future.</p>
        </div>
      </div>
      <div class="alex box">
        <div class="stats">
          <h1>Alexandria Fahr</h1>
          <h2>Species: Ferret</h2>
          <h2>Age: 30</h2>
          <h2>Height:  1.70 mts / 5.57 ft</h2>
          <h2>Weight: 53 kgs / 116.84 lbs</h2>
          <h2>Profession: Artist Agent and Gallery Owner</h2>
          <h2>Affiliation: None</h2>
          <h2>Location: Neon City, Fanfolia</h2>
          <p>The only child and heir to her family’s business. Alex grew up with all the luxuries she would ever need or want in her life, but with little to no affection from her parents. She always had a taste for the dark and weird, which caused her to be a bit of a pariah in her private school, which resulted in rumors and nicknames like “witch girl” and “weird Alex”.</p>
          <p>After becoming of age, she realized that the sole expectation of her in life was to get married  and have a kid to pass on the family name and business. Suddenly the cold reality of the arranged marriage between her parents dawned on her and was made worse upon the realization that her future would be the same. This caused Alex to become bitter and sarcastic in a rebellious way.</p>
          <p>By the time she reached college, Alex’s personality kept people away from her and caused even more unsavory rumors to be spread. Then she met Ron, who also had issues with his family, and the two started a very strong friendship. Alex’s view of the world changed upon the realization that she could still be rebellious towards her family but not be a douche to others at the same time. Alex used her fund trust to start her own art gallery, and uses a more amicable persona to make contacts and friends in the art world. She still doesn’t care what others think of her and is very happy about living life in her own terms.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="mayte box">
        <div class="image"></div>
        <div class="stats">
          <h1>Mayte of the Mah Tribe</h1>
          <h2>Species: Lake Serpent</h2>
          <h2>Age: 223</h2>
          <h2>Height:  1.80 mts / 6.00 ft</h2>
          <h2>Weight: 135 kgs / 297.62 lbs</h2>
          <h2>Profession: Water Mage with a specialization in Morph magic</h2>
          <h2>Affiliation: The Wardens of Segen</h2>
          <h2>Location: Segen, Firesands</h2>
          <p>Mayte was born and lived all of her life inside the ruins of Segen. Ages ago, her ancestors allied with the Deivon Lord Ramalach and received extensive knowledge in the magic arts in return. But the reality of Ramalach’s conquest of Firesands caused discord between his followers. Akbar, the highest ranked priest, convinced the others to seal Ramalach and save Firesands. While Akbar’s deed saved his people, his family line was considered tainted, and they served as the wardens of Ramalach’s seal in a secret location in the middle of the vast desert. Mayte, as a member of Akbar’s bloodline, was raised with her ancestors knowledge of Morph magic to prevent the Deivon from ever being released.</p>
          <p>Mayte lived a happy life with her family and quickly showed a mastery in the art of magic from a young age, showing great promise as a mage in the future. The secrecy and isolation was not a problem for her, until the outside world destroyed her home and her family. During a war between the country of Contamanea and Firesands, a chemical weapon attack was used on the water supplies of her land. Due to her kind being aquatic dragons, the damage was immediate and devastating, killing most of the wardens. Only Mayte and her grandmother survived by chance.</p>
          <p>Mayte spent the following years learning from her grandmother until her passing. Now she is alone and is the only living warden. When fate brought Ron to Segen, she tried to act upon her duty, but ultimately failed. Now, she has no goal in life and struggles to learn to adapt to a world completely alien to her.</p>
        </div>
      </div>
      <div class="marianne box">
        <div class="stats">
          <h1>Marianne Duval</h1>
          <h2>Species: Forest Raccoon</h2>
          <h2>Age: 21</h2>
          <h2>Height:  1.87 mts / 6.13 ft</h2>
          <h2>Weight: 80 kgs / 176.13 lbs</h2>
          <h2>Profession: Modern Art Major / Tour Guide</h2>
          <h2>Affiliation: Hamilton Escarot Museum of History and Art</h2>
          <h2>Location: Oakenfield, Fanfolia</h2>
          <p>Marianne is the product of an accidental pregnancy of her teenage mother, Minerva, whose fickle lifestyle created a parade of stepfathers for her daughter. Marianne grew up an only child and over time she picked up skills from both her mother and many stepfathers, giving Marianne a very diverse set of skills and hobbies from many walks of life. Marianne truly shines with her physical strength and excels at sports.</p>
          <p>Being raised in such a troubled home, Marianne grew up bitter and resorted to abusing her strength. She bullied a young Fiona, who ultimately ended up becoming her best friend after both of them ended up playing on the same little league hockey team. Marianne grew to become a regional star goalie in the league.</p>
          <p>Marianne’s fiery personality drives her to give little thought to long-term plans, which caused her to impulsively chase easy money from a photo shoot for an explicit calendar. The following scandal cost Marianne her position on the hockey team, her sports scholarship, and made her a pariah in her town.</p>
          <p>Marianne decided to move to Neon City to become financially independent and start over. A small town girl in the big city, she now takes any job she can to pay for her professional studies and get rent money. She now shares an apartment with Fio and works a very busy schedule trying to make ends meet.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="ramalach box">
        <div class="image"></div>
        <div class="stats">
          <h1>Ramalach</h1>
          <h2>Species: Deivon</h2>
          <h2>Age: N/A</h2>
          <h2>Height:  1.20 mts / 3.93 ft</h2>
          <h2>Weight: 15 kgs / 33.03 lbs</h2>
          <h2>Profession: Deivon Lord and figure head for the “Doomsayers” cult</h2>
          <h2>Affiliation: The Doomsayers</h2>
          <h2>Location: The Sacred City, Firesands</h2>
          <p>Little is known about Ramalach’s origin and history. Like all Deivons, he first gained sentience in a different plane of existence, and discovered his control over chaos magic. As a Deivon, he feeds on the souls of other beings and is a follower of a cosmic entity known as The Son of the Void. This creature is worshiped by the Deivons as it travels from world to world consuming everything in it’s path while the souls are released for the Deivons to claim. Many became ambassadors for their god, traveling to other worlds in advance to prepare them for the arrival of their god.</p>
          <p>Ramalach was one of four Deivon lords to arrive on Crisald for conquest in preparation for the future arrival of The Son. Unlike the aggressive methods of the other 3 Deivon lords, Ramalach believes in fair trade and mutual benefit. He grew in power by offering his would-be servants what they wanted the most, in exchange of their service, and in a short time he managed to grow a gigantic army of followers that took over most of Firesands. But Ramalach’s complete trust in his followers and his deals was his undoing, as he was unable to grasp the possibility of betrayal from within his trusted inner circle.</p>
          <p>He was stabbed with an enchanted dagger that is constantly draining him from his power and is now fused to his body, weakening him permanently. He was also sealed in a pocket dimension inside a stone statue, but a crack on his prison caused the gateway to be transferred to Ronald’s forehead. But Ramalach has awakened to learn that he is de-powered, and that the Son of the Void and the whole Deivon race are no more. Ramalach has no goal in life at the moment and is just trying to cope with his new reality.</p>
        </div>
      </div>
      <div class="fio box">
        <div class="stats">
          <h1>Fiona Maple</h1>
          <h2>Species: Beaver</h2>
          <h2>Age: 21</h2>
          <h2>Height: 1.70 mts / 5.57 ft</h2>
          <h2>Weight: 65 kgs / 143.2 lbs</h2>
          <h2>Profession: Culinary Student / Tour Guide</h2>
          <h2>Affiliation: Hamilton Escarot Museum of History and Art</h2>
          <h2>Location: Oakenfield, Fanfolia</h2>
          <p>Fiona grew up in nature, and roughing it is in her blood. Her mother passed away at a young age, leading to her being raised by her father and elder brother. As a lumberjack, her father taught her all about the great outdoors, and Fio always felt most at home running around outside, catching bugs, climbing trees, and swimming. She was a sweet, kind child, but her awkward lisp and cheerful nature made her a target for a young Marianne, who was working out her youthful aggression. However, after unknowingly joining the same little league hockey team, they eventually became best friends.</p>
          <p>Fio is a very handy person, and enjoys woodworking as a hobby. But her great passion in life is cooking, and even as a child she wanted to become a professional chef. Leaving home to attend a culinary school in Neon City, Marianne, seeking a clean break from her old life, came with her. They live together, and although Fio wishes Marianne would clean up after herself more, they get along just fine.</p>
          <p>She currently works as a tour guide at the museum, along with Marianne and two other friends of theirs from home. Her dream is to open her own restaurant one day, but she feels she has a long way to go before she’s ready for that, both in terms of skill and finances. Unfortunately for her, life in the big city is proving to be far less exciting than she hoped for, and boredom is her arch enemy.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="wallace box">
        <div class="image"></div>
        <div class="stats">
          <h1>Wallace Mc Neil</h1>
          <h2>Species: Llama</h2>
          <h2>Age: 58</h2>
          <h2>Height: 2.20 mts / 7.21 ft</h2>
          <h2>Weight: 118 kgs / 261.48 lbs</h2>
          <h2>Profession: Mercenary / Adventurer</h2>
          <h2>Affiliation: The Bossanova</h2>
          <h2>Location: Islas Esmeralda, Playaback</h2>
          <p>Wallace grew up listening to stories about the adventures of his best friend (Ramon's) father. Both of them imagined themselves becoming great adventurers, and grew up preparing for undertaking such an endeavor. Unlike the sickly Ramon, Wallace was physically strong and able to follow their dreams.</p>
          <p>Once they became adults, Ramon founded Wonders 3, a mercenary group that recruited people looking to prove themselves and take on the kinds of missions Ramon could never do himself. Wallace was invited to join by his best friend, but decided against it. Taking the seat of a manager meant he would be sending others out to live the life he wanted to lead.</p>
          <p>With the resources he had, Wallace created The Bossanova, a group of adventurers and researchers whose mission was to explore new lands, find riches and salvage goods. The Bossanova crew began taking odd jobs to get the funds for its members personal projects, and Wallace lived for the thrill of discovery. His loud and boisterous personality turned him into a natural leader of a small, but very tight group, that gives their all to their dreams.</p>
        </div>
      </div>
      <div class="jane box">
        <div class="stats">
          <h1>Jane Xerno the First</h1>
          <h2>Species: Jackalope</h2>
          <h2>Age: 74</h2>
          <h2>Height: 1.67 mts / 5.47 ft</h2>
          <h2>Weight: 57 kgs / 125.66 lbs</h2>
          <h2>Profession: Queen of Fanfolia</h2>
          <h2>Affiliation: Fanfolian Kingdom</h2>
          <h2>Location: Kant, Fanfolia</h2>
          <p>Jane was born the only child of King Joseph Xerno of Fanfolia. Overprotected and sheltered as a kid, she grew up with an insatiable curiosity to learn about everything and everyone. Jane’s natural charisma and charm trained her in negotiation, and she quickly learned what to say to get what she wanted. But still, she was never allowed to leave the royal palace.</p>
          <p>During a world fair, she managed to sneak away from her escorts and wander around on her own terms. Here she met Catlen, a young man that fought and survived The Contamanean War, and their fates became entwined for the rest of their lives. Along with Catlen and their other companions, Jane adventured across the world, fought enemies, helped those in need, learned  truths of the world, and even managed to defeat a decayed god.</p>
          <p>All this helped Jane grow as a person, and the people whose hearts she touched became life long companions. But she also learned the hard truths of life, and how her father’s secretive actions were a danger to the rest of the world. Jane loved her father, but she could not deny the corruption in their kingdom. King Joseph tried to exert control over his increasingly rebellious daughter, finally arranging a marriage to a loyal soldier, Jane fled Fanfolia with Catlen, earning her friend a bounty on his head.</p>
          <p>After a couple of years in hiding, Deivons from another world invaded Crisald, and the arrival of The Son of the Void spelled doom for everyone.  Jane returned to her old home seeking her father’s help, but she arrived too late, and witnessed his murder at the hands of their Deivon enemies.  After an emotional breakdown, Jane realized her new role, and rallied the people of Fanfolia as their Queen, to fight the invaders.</p>
          <p>The battle was near-impossible, as there was little chance of matching the power of the Son of the Void. The tide turned when, the decayed god Zoron reappeared, offering to Jane his help against the god of the Deivons. Having no alternative, Jane agreed and became Zoron’s avatar.  Together, they managed to fight the Son of the Void to a perpetual stalemate.</p>
          <p>Now as the avatar of the Lord of the Green, Jane has gained control over plantlife and stopped aging. As long as she is loved and worshipped by her people, she can give strength to Zoron so he can keep hold the Son of the Void at bay. The reality of her situation has taken a toll on Jane as her loved ones grow old and pass away. Though she has gradually become less attached to normal people, she manages to keep a happy face to the public for she knows the burden she carries will help the rest.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="gretta box">
        <div class="image"></div>
        <div class="stats">
          <h1>Gretta Anaya</h1>
          <h2>Species: Holstein Cow</h2>
          <h2>Age: 35</h2>
          <h2>Height: 1.80 mts / 6.00 ft</h2>
          <h2>Weight: Weight: 115 kgs / 253.53 lbs</h2>
          <h2>Profession: Mercenary</h2>
          <h2>Affiliation: Wonders 3</h2>
          <h2>Location: Villa de Zapata, Playaback</h2>
          <p>Gretta is a bombastic tomboy that always had a knack for overcoming impossible challenges. From a young age she studied different martial arts and fighting techniques, and developing over time the ability to pinpoint the weak spot of any target and utterly devastate them with nothing but her fists.</p>
          <p>Due to this unique ability and an innate thirst for adventure, she was contacted by the head of Wonders 3 to join their group as a mercenary for hire. Gretta leapt at the chance with glee and quickly rose in rank and reputation among the other members, and giving her enough prestige to choose her own assignments and teammates. Gretta’s life was pretty much all she ever wanted.</p>
          <p>That changed when she met Hernan, an overweight but charming chef, during one of her vacations. The pair quickly fell in love and got married. To her surprise, she managed to find a perfect balance between her home life and work life, despite long hours away from her husband. The couple have plans to start a family but Gretta’s job keeps her unable to commit to this idea for now. She plans on taking one last job before taking a leave and start the new step in her life.</p>
        </div>
      </div>
      <div class="velia box">
        <div class="stats">
          <h1>Velia Mauser</h1>
          <h2>Species: Yellowjacket Wasp</h2>
          <h2>Age: 23</h2>
          <h2>Height: 1.50 mts / 4.92 ft</h2>
          <h2>Weight: 31 kgs / 68.34 lbs</h2>
          <h2>Profession: Mercenary</h2>
          <h2>Affiliation: Wonders 3</h2>
          <h2>Location: Chromstadt, Contamanea</h2>
          <p>Able to predict trajectories and the movement of a target, Velia was always a natural sharpshooter. But this highly-specialized gift created difficulties in life, as Velia has difficulties socializing and regarding other people as more than potential threats.  Her main interest in life is towards her guns, the discussion of which can often be offputting to outsiders.  As a result, she is unable to properly express herself and her emotions, leaving her a loner and unable to comprehend why people avoid her.</p>
          <p>Having few ties to her family and no friends at all, she began traveling around her country and participating in local marksmanship tournaments.  She quickly gained a reputation, and earned the attention of a fellow gun enthusiast named Vencrina. Vencrina, one of the triumvirate of Wonders 3, invited Velia into the mercenary group and took a special interest in mentoring her in the skills of a mercenary.</p>
          <p>As Vencrina’s most promising apprentice, the young wasp rose through into ranks of the Wonders 3 and ended up paired with Gretta, who was able to pierce through Velia’s emotional wall and got to know the real her. The two formed a strong bond, and Velia is able to open up to Gretta in a way she is unable to do with other members of the team. While still occasionally unable to express herself to her new friend, Velia considers Gretta to be vital to her growth as a person, and and makes a point to join the cow on any of her endeavors.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="pierre box">
      <div class="image"></div>
        <div class="stats">
          <h1>Pierre</h1>
          <h2>Species: Green Basilisk</h2>
          <h2>Age: 33</h2>
          <h2>Height: 1.75 mts / 5.74 ft</h2>
          <h2>Weight: 63 kgs / 138.89 lbs</h2>
          <h2>Profession: Mercenary</h2>
          <h2>Affiliation: Wonders 3</h2>
          <h2>Location: Ferrer, Fontalia?</h2>
          <p>Little is known about Pierre, and nobody is aware of how he actually joined Wonders 3. His life story changes from time to time, depending on the person he's talking to and how much effort he feels like putting in. He claims to be from Fontalia, but he makes grammatical errors in the language and his accent slips now and again. Still, there is some truth hidden within the different versions of his history, but nobody knows for sure which parts can be relied upon.</p>
          <p>Pierre is renowned for his quick wit and agility, as well as being someone you can’t fully trust. He has a posh affect and thinks highly of himself. He also has quite the strict selection of missioms and carries a reputation of accomplishing any task at any cost. He prides himself on having a perfect track record and rose through the ranks via a careful selection of missions and partners that he knew would allow him to further his goals. It is known that he has little tolerance for failure and easily loses his temper if things don’t go his way. Needless to say, much of the organization has only unkind words for the man behind his back.</p>
          <p>Noticing the rapid development of Gretta’s reputation within the Wonders 3, Pierre was quick to sweet talk her into as partnership.  Though a relationship of convenience, Pierre seems to hold both Gretta and her constant companion, Velia, in the highest regard.  Despite respect for their skills, Pierre holds no personal connection to his teammates, and is willing to sacrifice them, if needed, to reach his goal.  Two of the few Wonders 3 associates unaware of Pierre's reputation, both Gretta and Velia trust him implicitly, perhaps to their own detriment.</p>
        </div>
      </div>
      <div class="virginia box">
        <div class="stats">
          <h1>Virginia O’Raelly</h1>
          <h2>Species: Mouse</h2>
          <h2>Age: 30</h2>
          <h2>Height: 1.58 mts / 5.2 ft</h2>
          <h2>Weight: 52 kgs / 114.64 lbs</h2>
          <h2>Profession: Gynecologist</h2>
          <h2>Affiliation: None</h2>
          <h2>Location: Mirkwood, Fanfolia</h2>
          <p>Born the fourth child of an investment banker and a psychologist, Ginny grew up in the lap of luxury, surrounded by her siblings.  Of course, with three older siblings and a baby sister not long after her own birth, Ginny often found herself neglected by her parents, already busy with the hectic nature of their jobs.</p>
          <p>On the occasions he visited his sister, Eugene O'Raelly noticed his young niece buried in books and all but mute.  Sensing an opportunity, he took her with him to meet his friend and colleague, Alexei Rudentof, and introduced Ginny to Alexei's similarly introverted son, Ronald.  The pair of dorky youngsters hit it off immediately, with Ginny emerging from her shell as the unexpected alpha female of their pairing.</p>
          <p>Ginny saw Ron every summer and a few times in the interim, and they remained steadfast friends, even subscribing to an MMORPG together to always keep in touch.  As she grew older, a series of incidents led to Ginny developing deeper feelings for Ron, but unfortunately, her family had other plans.  Her parents, ever-concerned with maintaining their social status as pureblood mice, pushed for Ginny to begin a relationship with a charming mouse boy they met while visiting her med school.</p>
          <p>Too meek to oppose her parents' desires, Ginny can only rebel against the unwanted marriage by continuously pushing off her own wedding.  Though she has no problem with Wesley, she still harbors a deep crush for her childhood friend.  With the resurgence of the Rudentof family name, first with Alexei's death and the news of Ron's successful expedition to Firesands, Ginny seeks the raccoon out once more to relive her glory days.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php elseif ( $development_theme == 'cb' || strpos($url, 'cb') !== false ) : ?>
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
<?php elseif ( $development_theme == 'pmp' || strpos($url, 'pmp') !== false ) : ?>
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
<?php elseif ( $development_theme == 'laslindas' || strpos($url, 'laslindas') !== false ) : ?>
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
      <div class="digit box">
        <div class="stats">
          <h1>Digit</h1>
          <h2>Spirit Type: Aura</h2>
          <h2>Fun Fact: Resident Spirits drw power from sunlight when outside of their spirit gems.</h2>
          <p>Digit is Mora's resident spirit and the caretaker of Las Lindas. Digit's bond to Mora provides her with much of the data she needs to grow, as Resident spirits are symbiotic and need another lifeform to evolve and change. Digit seems to have inhereted much of Mora's personality through the bond, loving attention and being confident and quick with her choices. Digit has just recently attained her second-tier of evolution thanks to Mora's acceptance and love.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="phi box">
        <div class="stats">
          <h1>Phi</h1>
          <h2>Spirit Type: Warp</h2>
          <h2>Fun Fact: Spirits can be bound to only one person and eventually grow to resemble their bondmate.</h2>
          <p>Phi is Alejandra's resident spirit and the caretaker of Alej's mansion. Phi's resident gem was dormant for a long period of time thanks to Alej's personal issues. Once Alejandra abandoned her obsessions and learned how to move forward in life, Phi was able to bond to Alejandra and be born. Phi is currently friends with Digit and is coaxing Alej to to follow her dreams.</p>
        </div>
        <div class="image"></div>
      </div>
    </div>
  </article>
<?php elseif ( $development_theme == 'knighthood' || strpos($url, 'knighthood') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <h2 class="empty">This comic does not have a cast page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <h2 class="empty">This comic does not have a cast page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <h2 class="empty">This comic does not have a cast page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'bethellium' || strpos($url, 'bethellium') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="zoana box">
        <div class="stats">
          <h1>Zoana Aufenhurst</h1>
          <h2>Heading</h2>
          <h2>Heading</h2>
          <p>Description</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="elle box">
        <div class="image"></div>
        <div class="stats">
          <h1>Elle Falina</h1>
          <h2>Heading</h2>
          <h2>Heading</h2>
          <p>Description</p>
        </div>
      </div>
      <div class="auri box">
        <div class="stats">
          <h1>Auri Ferrae</h1>
          <h2>Heading</h2>
          <h2>Heading</h2>
          <p>Description</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="sonette box">
        <div class="image"></div>
        <div class="stats">
          <h1>Sonette</h1>
          <h2>Heading</h2>
          <h2>Heading</h2>
          <p>Description</p>
        </div>
      </div>
      <div class="katherine box">
        <div class="stats">
          <h1>Katherine Fiama Roselynn</h1>
          <h2>Heading</h2>
          <h2>Heading</h2>
          <p>Description</p>
        </div>
        <div class="image"></div>
      </div>
  </article>
<?php elseif ( $development_theme == 'princessbunny' || strpos($url, 'princessbunny') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <div class="ella box">
        <div class="stats">
          <h1>Ella</h1>
          <h2>Age: 21</h2>
          <h2>Height: 128cm / 4’2”</h2>
          <p>Personality: Hyperactive, positive, impulsive. Ella can’t stay still and gets easily distracted by pretty much anything. Cheerful, extremely optimistic and with very big dreams that she has no intention to give up on.</p>
          <ul>
            <li>She is vegan and addicted to carrots. Her companions must always be careful because she can’t stop eating carrots even though she is aware that so much sugar can be bad for her health.</li>
            <li>She hates reading because it has to be done by staying still and quiet for a while. Challenging.</li>
            <li>She sleeps very few hours, only when it's totally dark outside.</li>
            <li>Ella tries to learn many things. Anything! She is not good at any but that won't stop her from learning new stuff</li>
          </ul>
        </div>
        <div class="image"></div>
      </div>
      <div class="haru box">
        <div class="image"></div>
        <div class="stats">
          <h1>Haru</h1>
          <h2>Age: 23</h2>
          <h2>Height: 135cm / 4’5”</h2>
          <p>Personality: Haru had a childhood trauma so she gets scared very easily. She is quite paranoid about suspicious movements and is also afraid of meeting new people thinking they might harm her. Her guard is pretty much always up and in tension. Agesivity, even yelling or a loud noise, makes her jump and hiss, and maybe even cry if it’s too much. Besides that, in a normal routine when none of those things happen, she is sweet and fun, easy to make her laugh. She is caring and loves hugs from people she feels comfortable with.</p>
          <ul>
            <li>She is used to the food she ate at the mansion so mostly vegan dishes, but as soon as she gets out from there she goes back to her original carnivore diet.</li>
            <li>She hates canines, from dogs to wolves or any other. She finds them irritating, annoying because of their overly friendly attitude. Haru thinks they are overreacting or faking just to be liked by many people.</li>
          </ul>
        </div>
      </div>
      <div class="azeria box">
        <div class="stats">
          <h1>Azeria</h1>
          <h2>Age: 32</h2>
          <h2>Height: 172cm / 5’8”</h2>
          <p>Personality: Proud and mostly serious but deep inside she’s just a child. She is amused very easily but tries to hide it. This is due to the way she was strictly educated by her family, being part of a high social class Azeria was taught that a lady must behave that way and not reaction to idiotic jokes, considered by them as “garbage jokes”. Being with Shanters, however, is quite a challenge and it’s impossible to hold back her real personality but as years pass and many events happen, she is forced to get colder and all the things her parents taught her are now needed for survival.</p>
        </div>
        <div class="image"></div>
      </div>
      <div class="shanters box">
        <div class="image"></div>
        <div class="stats">
          <h1>Shanters</h1>
          <h2>Age: 33</h2>
          <h2>Height: 196cm / 6’5”</h2>
          <p>A little dumb sometimes, terrible at reading and following maps and he’s quite naive. Shanters trusts people too easily and gets easily fooled. He also has a hard time understanding sarcasm. Many times he is so determined to help anyone that he might even annoy the other person thinking maybe he wants something in exchange or to prove that he is best, but reality is very, very far from that: Shanters is just that genuinely good in heart.</p>
          <ul>
            <li>Lost his sense of smell, and with that, he can’t really feel different tastes either. He has trouble saying the difference between different tastes.</li>
            <li>His ability to find his way around houses and cities is... null. Very poor.</li>
          </ul>
        </div>
      </div>
  </article>
<?php elseif ( $development_theme == 'ultrarosa-esp' || $development_theme == 'ultrarosa' || strpos($url, 'ultrarosa-esp') !== false || strpos($url, 'ultrarosa') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <h2 class="empty">This comic does not have a cast page yet.</h2>
    </div>
  </article>
<?php elseif ( $development_theme == 'caughtinorbit' || strpos($url, 'caughtinorbit') !== false ) : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="cast-page">
      <h2 class="empty">This comic does not have a cast page yet.</h2>
    </div>
  </article>
<?php endif; ?>
