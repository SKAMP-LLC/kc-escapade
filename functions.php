<?php
/**
 * KC Escapade functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage KC Escapade
 * @since KC Escapade 1.0
 */

   // Choices are: paprika | imew | rascals | knuckleup | theeye | cb | pmp | laslindas | knighthood | addictivescience | tots | bethellium | princessbunny | ultrarosa | ultrarosa-esp | caughtinorbit
   $development_theme = '###';

/**
 * KC Escapade only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'escapade_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own escapade_setup() function to override in a child theme.
 *
 * @since KC Escapade 1.0
 */
function escapade_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/escapade
     * If you're building a theme based on KC Escapade, use a find and replace
     * to change 'escapade' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'escapade' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for custom logo.
     *
     *  @since KC Escapade 1.2
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 240,
        'width'       => 240,
        'flex-height' => true,
    ) );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 9999 );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'escapade' ),
        'social'  => __( 'Social Links Menu', 'escapade' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
  ) );

  // https://stackoverflow.com/questions/25491619/how-to-delete-margin-top-32px-important-from-twenty-twelve
  function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');

  // Allow emote html in posts.
  function allow_emotes_in_posts (){
    global $allowedposttags;

    $allowedposttags['emote'] = array(
      'character' => array(),
      'emotion' => array(),
      'side' => array(),
      'name' => array(),
    );
  }
  add_action('init', 'allow_emotes_in_posts');

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
     */
    add_editor_style( array( 'css/editor-style.css', escapade_fonts_url() ) );

    // Indicate widget sidebars can use selective refresh in the Customizer.
    add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // escapade_setup
add_action( 'after_setup_theme', 'escapade_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since KC Escapade 1.0
 */
function escapade_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'escapade_content_width', 840 );
}
add_action( 'after_setup_theme', 'escapade_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since KC Escapade 1.0
 */
function escapade_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'escapade' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'escapade' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 1', 'escapade' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'escapade' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Content Bottom 2', 'escapade' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'escapade' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'escapade_widgets_init' );

if ( ! function_exists( 'escapade_fonts_url' ) ) :
/**
 * Register Google fonts for KC Escapade.
 *
 * Create your own escapade_fonts_url() function to override in a child theme.
 *
 * @since KC Escapade 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function escapade_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'escapade' ) ) {
        $fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
    }

    /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'escapade' ) ) {
        $fonts[] = 'Montserrat:400,700';
    }

    /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'escapade' ) ) {
        $fonts[] = 'Inconsolata:400';
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since KC Escapade 1.0
 */
function escapade_javascript_detection() {
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'escapade_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since KC Escapade 1.0
 */
function escapade_scripts() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'escapade-fonts', escapade_fonts_url(), array(), null );

    // Theme stylesheet.
    wp_enqueue_style( 'escapade-style', get_stylesheet_uri() );

    // WEBPACK - bundle.js
    wp_enqueue_script( 'escapade-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/main.js', array('jquery'), 1, false );

    // WEBPACK - main.css
  wp_enqueue_style( 'escapade-webpack-main-css', get_template_directory_uri() . '/dist/main.css', array( 'escapade-style' ), '20160816' );

  $url = site_url();
  global $development_theme;

  // Paprika Theme
  if ($development_theme == 'paprika' || strpos($url, 'paprika') !== false) {
    wp_enqueue_script( 'paprika-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/paprika.js', array('jquery'), 1, false );
    wp_enqueue_style( 'paprika-webpack-main-css', get_template_directory_uri() . '/dist/paprika.css', array( 'escapade-style' ), '20160816' );
  }
  // iMew Theme
  else if ($development_theme == 'imew' || strpos($url, 'imew') !== false) {
    wp_enqueue_script( 'imew-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/imew.js', array('jquery'), 1, false );
    wp_enqueue_style( 'imew-webpack-main-css', get_template_directory_uri() . '/dist/imew.css', array( 'escapade-style' ), '20160816' );
  }
  // Rascals Theme
  else if ($development_theme == 'rascals' || strpos($url, 'rascals') !== false) {
    wp_enqueue_script( 'rascals-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/rascals.js', array('jquery'), 1, false );
    wp_enqueue_style( 'rascals-webpack-main-css', get_template_directory_uri() . '/dist/rascals.css', array( 'escapade-style' ), '20160816' );
  }
  // Knuckle Up Theme
  else if ($development_theme == 'knuckleup' || strpos($url, 'knuckle-up') !== false) {
    wp_enqueue_script( 'knuckleup-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/knuckleup.js', array('jquery'), 1, false );
    wp_enqueue_style( 'knuckleup-webpack-main-css', get_template_directory_uri() . '/dist/knuckleup.css', array( 'escapade-style' ), '20160816' );
  }
  // The Eye of Ramalach Theme
  else if ($development_theme == 'theeye' || strpos($url, 'theeye') !== false) {
    wp_enqueue_script( 'theeye-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/theeye.js', array('jquery'), 1, false );
    wp_enqueue_style( 'theeye-webpack-main-css', get_template_directory_uri() . '/dist/theeye.css', array( 'escapade-style' ), '20160816' );
  }
  // Caribbean Blue Theme
  else if ($development_theme == 'cb' || strpos($url, 'cb') !== false) {
    wp_enqueue_script( 'cb-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/cb.js', array('jquery'), 1, false );
    wp_enqueue_style( 'cb-webpack-main-css', get_template_directory_uri() . '/dist/cb.css', array( 'escapade-style' ), '20160816' );
  }
  // PMP Theme
  else if ($development_theme == 'pmp' || strpos($url, 'pmp') !== false) {
    wp_enqueue_script( 'pmp-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/pmp.js', array('jquery'), 1, false );
    wp_enqueue_style( 'pmp-webpack-main-css', get_template_directory_uri() . '/dist/pmp.css', array( 'escapade-style' ), '20160816' );
  }
  // Las Lindas Theme
  else if ($development_theme == 'laslindas' || strpos($url, 'laslindas') !== false) {
    wp_enqueue_script( 'laslindas-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/laslindas.js', array('jquery'), 1, false );
    wp_enqueue_style( 'laslindas-webpack-main-css', get_template_directory_uri() . '/dist/laslindas.css', array( 'escapade-style' ), '20160816' );
  }
  // Knighthood Theme
  else if ($development_theme == 'knighthood' || strpos($url, 'knighthood') !== false) {
    wp_enqueue_script( 'knighthood-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/knighthood.js', array('jquery'), 1, false );
    wp_enqueue_style( 'knighthood-webpack-main-css', get_template_directory_uri() . '/dist/knighthood.css', array( 'escapade-style' ), '20160816' );
  }
  // Addictive Science Theme
  else if ($development_theme == 'addictivescience' || strpos($url, 'addictivescience') !== false) {
    wp_enqueue_script( 'addictivescience-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/addictivescience.js', array('jquery'), 1, false );
    wp_enqueue_style( 'addictivescience-webpack-main-css', get_template_directory_uri() . '/dist/addictivescience.css', array( 'escapade-style' ), '20160816' );
  }
  // Tina of the South Theme
  else if ($development_theme == 'tots' || strpos($url, 'tots') !== false) {
    wp_enqueue_script( 'tots-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/tots.js', array('jquery'), 1, false );
    wp_enqueue_style( 'tots-webpack-main-css', get_template_directory_uri() . '/dist/tots.css', array( 'escapade-style' ), '20160816' );
  }
  // Bethellium
  else if ($development_theme == 'bethellium' || strpos($url, 'bethellium') !== false) {
    wp_enqueue_script( 'bethellium-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/bethellium.js', array('jquery'), 1, false );
    wp_enqueue_style( 'bethellium-webpack-main-css', get_template_directory_uri() . '/dist/bethellium.css', array( 'escapade-style' ), '20160816' );
  }
  // Princess Bunny
  else if ($development_theme == 'princessbunny' || strpos($url, 'princessbunny') !== false) {
    wp_enqueue_script( 'princessbunny-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/princessbunny.js', array('jquery'), 1, false );
    wp_enqueue_style( 'princessbunny-webpack-main-css', get_template_directory_uri() . '/dist/princessbunny.css', array( 'escapade-style' ), '20160816' );
  }
  // Ultra Rosa
  else if ($development_theme == 'ultrarosa' || strpos($url, 'ultrarosa') !== false) {
    wp_enqueue_script( 'ultrarosa-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/ultrarosa.js', array('jquery'), 1, false );
    wp_enqueue_style( 'ultrarosa-webpack-main-css', get_template_directory_uri() . '/dist/ultrarosa.css', array( 'escapade-style' ), '20160816' );
  }
  // Ultra Rosa-ESP
  else if ($development_theme == 'ultrarosa-esp' || strpos($url, 'ultrarosa-esp') !== false) {
    wp_enqueue_script( 'ultrarosa-esp-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/ultrarosa-esp.js', array('jquery'), 1, false );
    wp_enqueue_style( 'ultrarosa-esp-webpack-main-css', get_template_directory_uri() . '/dist/ultrarosa-esp.css', array( 'escapade-style' ), '20160816' );
  }
  // Caught In Orbit
  else if ($development_theme == 'caughtinorbit' || strpos($url, 'caughtinorbit') !== false) {
    wp_enqueue_script( 'caughtinorbit-webpack-bundle-js', get_stylesheet_directory_uri() . '/dist/caughtinorbit.js', array('jquery'), 1, false );
    wp_enqueue_style( 'caughtinorbit-webpack-main-css', get_template_directory_uri() . '/dist/caughtinorbit.css', array( 'escapade-style' ), '20160816' );
  }

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style( 'escapade-ie', get_template_directory_uri() . '/css/ie.css', array( 'escapade-style' ), '20160816' );
    wp_style_add_data( 'escapade-ie', 'conditional', 'lt IE 10' );

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style( 'escapade-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'escapade-style' ), '20160816' );
    wp_style_add_data( 'escapade-ie8', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style( 'escapade-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'escapade-style' ), '20160816' );
    wp_style_add_data( 'escapade-ie7', 'conditional', 'lt IE 8' );

    // Load the html5 shiv.
    wp_enqueue_script( 'escapade-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
    wp_script_add_data( 'escapade-html5', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'escapade-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'escapade-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
    }

    wp_enqueue_script( 'escapade-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

    wp_localize_script( 'escapade-script', 'screenReaderText', array(
        'expand'   => __( 'expand child menu', 'escapade' ),
        'collapse' => __( 'collapse child menu', 'escapade' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'escapade_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since KC Escapade 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function escapade_body_classes( $classes ) {
    // Adds a class of custom-background-image to sites with a custom background image.
    if ( get_background_image() ) {
        $classes[] = 'custom-background-image';
    }

    // Adds a class of group-blog to sites with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    // Adds a class of no-sidebar to sites without active sidebar.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    return $classes;
}
add_filter( 'body_class', 'escapade_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since KC Escapade 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function escapade_hex2rgb( $color ) {
    $color = trim( $color, '#' );

    if ( strlen( $color ) === 3 ) {
        $r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
        $g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
        $b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
    } else if ( strlen( $color ) === 6 ) {
        $r = hexdec( substr( $color, 0, 2 ) );
        $g = hexdec( substr( $color, 2, 2 ) );
        $b = hexdec( substr( $color, 4, 2 ) );
    } else {
        return array();
    }

    return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since KC Escapade 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function escapade_content_image_sizes_attr( $sizes, $size ) {
    $width = $size[0];

    if ( 840 <= $width ) {
        $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
    }

    if ( 'page' === get_post_type() ) {
        if ( 840 > $width ) {
            $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
        }
    } else {
        if ( 840 > $width && 600 <= $width ) {
            $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
        } elseif ( 600 > $width ) {
            $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
        }
    }

    return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'escapade_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since KC Escapade 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function escapade_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
    if ( 'post-thumbnail' === $size ) {
        if ( is_active_sidebar( 'sidebar-1' ) ) {
            $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
        } else {
            $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
        }
    }
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'escapade_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since KC Escapade 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function escapade_widget_tag_cloud_args( $args ) {
    $args['largest']  = 1;
    $args['smallest'] = 1;
    $args['unit']     = 'em';
    $args['format']   = 'list';

    return $args;
}
add_filter( 'widget_tag_cloud_args', 'escapade_widget_tag_cloud_args' );
