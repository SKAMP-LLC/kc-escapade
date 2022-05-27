<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage KC Escapade
 * @since KC Escapade 1.0
 */

?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?> class="no-js">

  <head>
    <?php
      global $wp;
      $url = home_url( add_query_arg( array(), $wp->request ) );
      global $development_theme;
      if ( $development_theme == 'paprika' || strpos($url, 'paprika') !== false ) : ?>
      <title>Paprika | A Furry Webcomic by Nekonny</title>
      <meta name="description" content="Paprika is a celebration of anime's golden age through the eyes of some very special fans. Tina and her friends have some very strong imaginations, ones so strong they transport the girls to a whole new world when they let it run away with them.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, comedy, humor, Nekonny, paprika, paprika comic, paprika webcomic">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-D56P6FPCD4"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D56P6FPCD4');
      </script>
    <?php elseif ( $development_theme == 'imew' || strpos($url, 'imew') !== false ) : ?>
      <title>iMew | A Furry Webcomic by Nekonny</title>
      <meta name="description" content="Ever think your phone's controlling your life? Sammy sure feels that way! After purchasing a mysterious knock-off phone, she's discovered the apps control a little more than you or I would expect! Now she has to get her life back before the battery runs out!">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, comedy, humor, Nekonny, imew, i mew">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-JDJPQN2GDP"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JDJPQN2GDP');
      </script>
    <?php elseif ( $development_theme == 'rascals' || strpos($url, 'rascals') !== false ) : ?>
      <title>Rascals | A Furry Webcomic by Mastergodai</title>
      <meta name="description" content="Follow the crazy antics of a group of friends from different backgrounds as they grow and experience the ups and downs of days dealing with Love triangles, misunderstood situations, annoying jobs and nosy parents. Will all of them find a happy ending in this crazy thing we call Life? Let's join them and find out!" />
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, Mastergodai, rascals, rascals webcomic" />
      <meta name="archive-binge" content="ab_5f35e6e5381ed1.13121948" />
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-DRGQPDRTRN"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DRGQPDRTRN');
      </script>
    <?php elseif ( $development_theme == 'knuckleup' || strpos($url, 'knuckle-up') !== false ) : ?>
      <title>Knuckle Up | A Furry Webcomic by Mastergodai</title>
      <meta name="description" content="After an incident involving an inexperienced space wizard, things got weird for space bounty hunters Hawk and Rushana. Now, in order to revert the     &ldquo;curse&rdquo;, they must embark on a quest spanning the galaxy... Hang in there Hawke, you're not as hot as you think you look!" />
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, Mastergodai, knuckleup, knuckleup webcomic" />
      <meta name="archive-binge" content="" />
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-W6QT0GMK11"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W6QT0GMK11');
      </script>
    <?php elseif ( $development_theme == 'theeye' || strpos($url, 'theeye') !== false ) : ?>
      <title>The Eye of Ramalach | A Furry Webcomic by Avencri</title>
      <meta name="description" content="Historian Ronald Rudentof has spent his entire life trying to escape his father's shadow. But while attempting to solve the last mystery his father left behind, Ron's life was changed forever. Now permanently bonded to an ancient demigod named Ramalach that has taken residence inside his forehead, Ron finds himself trapped between forces determined to either destroy Ramalach, or use him for their own sinister purposes.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, Avencri, the eye, the eye of ramalach">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-47VMHNV5J6"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-47VMHNV5J6');
      </script>
    <?php elseif ( $development_theme == 'cb' || strpos($url, 'cb') !== false ) : ?>
      <title>Caribbean Blue | A Furry Webcomic by Nekonny</title>
      <meta name="description" content="Tina and Yuki travel to the island of Caribbean Blue in search of a cure for their friend's strange feline curse, only to discover the island has many more secrets than they bargained for. Will they save the island after accidentally unearthing one of its greatest mysteries? Read and find out!">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, Nekonny, caribbean, caribbean blue">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-T3FGFWBS27"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T3FGFWBS27');
      </script>
    <?php elseif ( $development_theme == 'pmp' || strpos($url, 'pmp') !== false ) : ?>
      <title>Practice Makes Perfect | A Furry Webcomic 4koma by Nekonny</title>
      <meta name="description" content="A four panel gag comic with a cast of adorable characters! Jess Drea and Addy are just kids trying to make sense of the world in their own unique way, using imagination as their guide!">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, Nekonny, practice makes perfect, PMP, 4koma">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZXHR6VS1YL"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZXHR6VS1YL');
      </script>
    <?php elseif ( $development_theme == 'laslindas' || strpos($url, 'laslindas') !== false ) : ?>
      <title>Las Lindas | A Furry Webcomic by Chalodillo</title>
      <meta name="description" content="Las Lindas is a Slice of Life story that revolves around Mora Linda, who inherits her family's farmland after the death of her mother Diana. At first attempting to manage the farm on her own, she quickly realizes that she will need help, and goes out to recruit some more workers. Things are complicated when an old rival shows up and tries to run Mora out of business.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, digital, digital art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, slice of life, chalo, chalodillo, laslindas, las lindas">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-3T6BTJ03B1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-3T6BTJ03B1');
      </script>
    <?php elseif ( $development_theme == 'knighthood' || strpos($url, 'knighthood') !== false ) : ?>
      <title>Knighthood | A Furry Webcomic by Chalodillo</title>
      <meta name="description" content="Knighthood is a story of adventure and growth. Joy Ravenhurst has taken on a challenge to become a Knight, one of her race’s protectors and guardians. The trail is long and she faces more than a few obstacles along the way. Joy’s determination will be put to the test as those enemies grow ever more aggressive, both against her and the world she wants to protect.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, digital, digital art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, slice of life, chalo, chalodillo, knighthood">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-2PKBTQJS69"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-2PKBTQJS69');
      </script>
    <?php elseif ( $development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false ) : ?>
      <title>Addictive Science | A Science Webcomic by Cervelet</title>
      <meta name="description" content="Slice of life comic about a mad scientist, featuring mad science, magic and whatever the author found funny that week.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, comedy, humor, drama, slice of life, cervelet, Addictive Science">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y0VRPY2KKT"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Y0VRPY2KKT');
      </script>
    <?php elseif ( $development_theme == 'tots' || strpos($url, 'tots') !== false ) : ?>
      <title>Tina of the South | A Furry Webcomic by Avencri</title>
      <meta name="description" content="Terra Rica is home to great riches for those willing to brave the harsh landscape. For some, however, arid deserts are the least of their worries. As a child, Tina Winchester lost everything to a sinister killer. Now, as a bounty hunter, Tina sets out on a quest for revenge, to bring her father's killer to justice. But her efforts quickly attract the ire of a secret cabal that plots to undermine the very foundations of Terra Rica itself.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, drama, avencri, tina of the south">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-9F7692BMSY"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9F7692BMSY');
      </script>
    <?php elseif ( $development_theme == 'bethellium' || strpos($url, 'bethellium') !== false ) : ?>
      <title>Bethellium | Fantasy Furry Webcomic</title>
      <meta name="description" content="When Master Alchemist Zoana is invited to the secret city of Bethellium under false pretenses, she finds only fear and suspicion. In a world where magic is almost extinct. Why is the secret art of alchemy so feared? What secrets lie hidden in the last magic city of the world?">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, drama, abluedeer, bethellium">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-JEWSCGY2DE"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-JEWSCGY2DE');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-JVT14XLQWS"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JVT14XLQWS');
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-JEWSCGY2DE"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JEWSCGY2DE');
      </script>
    <?php elseif ( $development_theme == 'princessbunny' || strpos($url, 'princessbunny') !== false ) : ?>
      <title>Princess Bunny | A furry webcomic by BunBunArt</title>
      <meta name="description" content="A young adventurer is ready to explore the world in order to find her mother. Along the way she will go through many adventures and meet interesting people that will make her journey more exciting.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, drama, bunbun.art, princess bunny">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-KJ9J4DDMYW"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KJ9J4DDMYW');
      </script>
    <?php elseif ( $development_theme == 'ultrarosa-esp' || $development_theme == 'ultrarosa' || strpos($url, 'ultrarosa-esp') !== false || strpos($url, 'ultrarosa') !== false ) : ?>
      <title>Ultra Rosa | A Scifi Space Adventure Webcomic by Sr.Kah</title>
      <meta name="description" content="Ultra power imbued Bounty Hunter and her eccentric crew travel the stars for their next mark.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, manga, action, drama, ultrarosa, sr.kah">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-7ETJBL2DZJ"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7ETJBL2DZJ');
      </script>
    <?php elseif ( $development_theme == 'caughtinorbit' || strpos($url, 'caughtinorbit') !== false ) : ?>
      <title>Caught in Orbit | A furry syfy comic by Alexandria Bowersox</title>
      <meta name="description" content="Tilven's biggest dream is to be the first to explore uncharted planets for the Galactic Alliance. BUT to get to that point she will have to endure a year with her mentor and the one that she was placed with is not what she ever could have expected. Join her adventure as she learns more about the worlds of the cosmos, herself, and the alliance she holds so highly.">
      <meta name="keywords" content="webcomic list, webcomic, webcomics, art, anime, traditional, traditional art, kemono, kemono cafe, furry, furry art, furry comic, furry comic community, furry comics, furry webcomic, furry webcomic community, furry webcomics, syfy, action, drama, caught in orbit, alexandria bowersox">
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZS83LNPRJ0"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZS83LNPRJ0');
      </script>
    <?php endif; ?>
    <!-- Pinterest Tag -->
    <script>
    !function(e){if(!window.pintrk){window.pintrk = function () {
    window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
      n=window.pintrk;n.queue=[],n.version="3.0";var
      t=document.createElement("script");t.async=!0,t.src=e;var
      r=document.getElementsByTagName("script")[0];
      r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
    pintrk('load', '2613846191251', {em: '<user_email_address>'});
    pintrk('page');
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://ct.pinterest.com/v3/?event=init&tid=2613846191251&pd[em]=<hashed_email_address>&noscript=1" />
    </noscript>
    <!-- end Pinterest Tag -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="a98b66571218a24e706bc7e200e08b55"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:400,700" rel="stylesheet">

  <body <?php body_class(); ?>>
    <div id="page" class="site">

      <header id="masthead" class="site-header" role="banner">
        <div class="site-header-main">

          <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            </a>
          </div>

          <div class="top-bar">
            <script type="text/javascript" src="https://www.comicad.net/r/6Bcj0095JF/"></script>
          </div>

        </div>
      </header>

      <div id="content" class="site-content">
