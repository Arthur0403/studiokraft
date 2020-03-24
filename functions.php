<?php
/**
 * Studio Kraft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Studio_Kraft
 */

if ( !function_exists( 'studiokraft_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function studiokraft_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Studio Kraft, use a find and replace
         * to change 'studiokraft' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'studiokraft', get_template_directory() . '/languages' );

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
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'header-menu' => esc_html__( 'Верхнее меню', 'studiokraft' ),
            'footer-menu' => esc_html__( 'Нижнее меню', 'studiokraft' ),
        ) );

        /*
         * Add in the header and logo menu
         */
        add_filter( 'wp_nav_menu_items', 'logo_menu_item', 10, 2 );
        function logo_menu_item( $items, $args )
        {
            if ( $args->theme_location == 'header-menu' ) {
                $logo_menu_link = esc_url( home_url( '/' ) );
                if ( TRUE === get_theme_mod( 'studiokraft_show_logo' ) ) {
                    $logo_menu_logoname = '<svg class="main_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 203.2 203.2"><g class="logo-text-group" transform="translate(0,-93.799975)" style="fill:#ffffff;"><path class="logo-simbol k" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="M 102.5957 280.125 L 102.5918 280.12891 C 101.5921 280.12917 100.6336 280.52644 99.925781 281.23242 C 99.218613 281.9404 98.822553 282.89972 98.822266 283.90039 L 98.820312 283.90234 L 98.820312 419.82812 L 98.820312 419.88477 L 98.822266 419.88672 C 98.822557 420.88735 99.218613 421.84674 99.925781 422.55469 C 100.63376 423.26187 101.59505 423.65985 102.5957 423.66016 L 102.59766 423.66211 L 110.15039 423.66211 A 3.7772222 3.777223 0 0 0 113.92773 419.88477 L 113.92773 283.90234 L 113.92578 283.90039 C 113.9255 282.89972 113.52748 281.9404 112.82031 281.23242 C 112.11249 280.52644 111.154 280.12917 110.1543 280.12891 L 110.15039 280.125 C 107.75168 280.1688 105.48367 280.1752 102.59766 280.125 L 102.5957 280.125 z M 183.80664 280.125 L 123.37109 342.45117 C 123.35639 344.66359 123.36409 347.62045 123.37109 350.00586 L 185.69531 423.66211 C 193.37967 423.66226 198.91406 423.66211 198.91406 423.66211 C 200.99999 423.662 202.69128 421.97072 202.69141 419.88477 C 202.69073 418.86562 202.30347 417.95884 201.58398 417.13672 C 181.20883 394.11577 160.76273 371.13275 140.36914 348.11523 L 140.36914 346.22852 L 199.88867 286.39062 L 199.88086 286.37305 A 3.7772222 3.777223 0 0 0 200.80469 283.90234 A 3.7772222 3.777223 0 0 0 197.02734 280.125 C 197.02734 280.125 187.62925 280.1137 183.80664 280.125 z "/><path class="logo-simbol r" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="m 225.35742,280.125 a 3.7772222,3.777223 0 0 0 -3.77734,3.77734 v 135.98243 a 3.7772222,3.777223 0 0 0 3.77734,3.77734 h 7.55274 a 3.7772222,3.777223 0 0 0 3.77539,-3.74609 l 0.002,-0.002 V 295.23633 l 1.89062,-1.89063 h 39.65821 c 15.75347,-7.9e-4 28.52423,12.57663 28.52344,28.33008 -2.8e-4,15.71679 -12.82036,28.27271 -28.52344,28.33008 h -22.66211 a 3.7772222,3.777223 0 0 0 -3.77539,3.77539 v 9.44336 a 3.7772222,3.777223 0 0 0 3.77539,3.77734 h 15.10937 l 35.88282,56.66016 h 11.33203 c 2.08593,-1.1e-4 3.77721,-1.69139 3.77734,-3.77734 -2.5e-4,-0.99209 -0.52552,-1.80979 -1.08789,-2.65039 -11.31302,-17.60236 -22.62447,-35.20624 -33.9375,-52.8086 19.42212,-3.90992 34.04897,-21.0647 34.04883,-41.63867 3.5e-4,-23.4548 -19.01011,-42.6538 -42.46289,-42.66211 z"/><path class="logo-simbol a" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="m 391.55469,280.125 -54.41602,138.16797 v 0.002 a 3.7772222,3.777223 0 0 0 -0.35351,1.58985 3.7772222,3.777223 0 0 0 3.77734,3.77734 h 13.21875 l 14.70313,-41.55078 h 23.07031 v -13.21875 h -18.39258 l 24.05859,-67.99219 h 1.88672 L 424.25,368.89258 h -19.47656 v 13.21875 h 24.36523 l 15.29492,41.36328 11.33399,0.1875 a 3.7772222,3.777223 0 0 0 3.77539,-3.77734 3.7772222,3.777223 0 0 0 -0.23242,-1.29297 l 0.0156,-0.0176 -52.66211,-138.44727 z"/><path class="logo-simbol f" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="M 478.42969 280.125 A 3.7772222 3.777223 0 0 0 474.6543 283.90234 L 474.6543 419.88477 A 3.7772222 3.777223 0 0 0 478.42969 423.66211 L 485.98438 423.66211 A 3.7772222 3.777223 0 0 0 489.76172 419.88477 L 489.76172 295.23633 L 491.65039 293.3457 L 555.86328 293.3457 A 3.7772222 3.777223 0 0 0 559.64062 289.56836 L 559.64062 283.90234 A 3.7772222 3.777223 0 0 0 555.86328 280.125 L 478.42969 280.125 z M 504.87109 344.33789 L 504.87109 357.55859 L 552.08594 357.55859 A 3.7772222 3.777223 0 0 0 555.86328 353.78125 L 555.86328 348.11523 A 3.7772222 3.777223 0 0 0 552.08594 344.33789 L 504.87109 344.33789 z "/><path class="logo-simbol t" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="M 578.52734 280.125 A 3.7772222 3.777223 0 0 0 574.75 283.90234 L 574.75 289.56836 A 3.7772222 3.777223 0 0 0 578.52734 293.3457 L 672.95898 293.3457 A 3.7772222 3.777223 0 0 0 676.73438 289.56836 L 676.73438 283.90234 A 3.7772222 3.777223 0 0 0 672.95898 280.125 L 578.52734 280.125 z M 633.29688 308.45508 L 618.1875 308.45703 L 618.1875 419.88477 A 3.7772222 3.777223 0 0 0 621.84766 423.65625 L 621.96484 423.77539 L 629.51953 423.66016 A 3.7772222 3.777223 0 0 0 633.29688 419.88281 L 633.29688 308.45508 z "/><path class="logo-simbol s" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="m 235.46875,472.64062 c -7.65158,0 -13.66282,1.78147 -18.03516,5.3418 -4.3411,3.56033 -6.51171,8.43151 -6.51171,14.61524 0,5.34049 1.57809,9.50964 4.73242,12.50781 3.15432,2.99817 8.26016,5.20007 15.31836,6.60547 l 5.76172,1.125 c 4.80956,0.96816 8.26104,2.41915 10.35351,4.35547 2.1237,1.93631 3.18555,4.62319 3.18555,8.05859 0,3.9351 -1.46859,6.96419 -4.4043,9.08789 -2.93571,2.1237 -7.10486,3.18555 -12.50781,3.18555 -3.56033,0 -7.18389,-0.54559 -10.86914,-1.63867 -3.68525,-1.09309 -7.44766,-2.71812 -11.28907,-4.87305 v 9.74414 c 3.99757,1.46785 7.85384,2.57663 11.57032,3.32617 3.74771,0.74954 7.27741,1.125 10.58789,1.125 8.77589,0 15.42854,-1.75018 19.95703,-5.24805 4.55972,-3.49786 6.83984,-8.63499 6.83984,-15.4121 0,-5.68404 -1.6876,-10.213 -5.06054,-13.58594 -3.34171,-3.40418 -8.54142,-5.77621 -15.59961,-7.11914 l -5.71485,-1.17188 c -5.18433,-0.96816 -8.71403,-2.23337 -10.58789,-3.79492 -1.84262,-1.59278 -2.76367,-3.93548 -2.76367,-7.02734 0,-3.68526 1.39037,-6.52661 4.16992,-8.52539 2.81079,-1.99878 6.79221,-2.99805 11.94532,-2.99805 2.96693,0 6.04295,0.42044 9.22851,1.26367 3.18556,0.84324 6.57446,2.1241 10.16602,3.8418 v -9.22852 c -3.56033,-1.18677 -7.0431,-2.07653 -10.44727,-2.66992 -3.40417,-0.59339 -6.74614,-0.89062 -10.02539,-0.89063 z"/><path class="logo-simbol t2" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="m 265.2168,473.90625 v 7.96289 h 24.82812 v 61.97852 h 9.50977 v -61.97852 h 24.83008 v -7.96289 z"/><path class="logo-simbol u" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="m 332.48828,473.90625 v 43.66016 c 0,9.11943 2.24884,16.00674 6.7461,20.66015 4.52848,4.65341 11.21242,6.98047 20.05078,6.98047 8.80712,0 15.45782,-2.32706 19.95507,-6.98047 4.52849,-4.65341 6.79297,-11.54072 6.79297,-20.66015 v -43.66016 h -9.50976 v 42.49023 c 0,7.49543 -1.35713,12.89851 -4.07422,16.20899 -2.71709,3.27925 -7.10526,4.91797 -13.16406,4.91797 -6.09004,0 -10.49385,-1.63872 -13.21094,-4.91797 -2.71709,-3.31048 -4.07617,-8.71356 -4.07617,-16.20899 v -42.49023 z"/><path class="logo-simbol d" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="M 403.83594 473.90625 L 403.83594 543.84766 L 423.27734 543.84766 C 436.76911 543.84766 446.6992 541.02194 453.07031 535.36914 C 459.44142 529.71634 462.62695 520.86179 462.62695 508.80664 C 462.62695 496.81396 459.45707 488.00634 453.11719 482.38477 C 446.77731 476.73196 436.83157 473.90625 423.27734 473.90625 L 403.83594 473.90625 z M 413.29883 481.68164 L 424.72852 481.68164 C 434.37888 481.68164 441.43827 483.8679 445.9043 488.24023 C 450.40155 492.58134 452.64844 499.43736 452.64844 508.80664 C 452.64844 518.23839 450.40155 525.13939 445.9043 529.51172 C 441.43827 533.88405 434.37888 536.07031 424.72852 536.07031 L 413.29883 536.07031 L 413.29883 481.68164 z "/><path class="logo-simbol i" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="m 477.66602,473.90625 v 69.94141 h 9.46289 v -69.94141 z"/><path class="logo-simbol o" transform="matrix(0.26458333,0,0,0.26458333,0,93.799975)" d="M 534.34961 472.64062 C 524.51186 472.64063 516.64093 475.93566 510.73828 482.52539 C 504.86686 489.08389 501.93164 497.89151 501.93164 508.94727 C 501.93164 520.00302 504.86686 528.81064 510.73828 535.36914 C 516.64093 541.92764 524.51186 545.20703 534.34961 545.20703 C 544.15612 545.20703 551.99577 541.92764 557.86719 535.36914 C 563.7386 528.77941 566.67383 519.97179 566.67383 508.94727 C 566.67383 497.89151 563.7386 489.08389 557.86719 482.52539 C 551.99577 475.93566 544.15612 472.64063 534.34961 472.64062 z M 534.34961 480.32422 C 541.22042 480.32422 546.65478 482.88398 550.65234 488.00586 C 554.68113 493.12773 556.69531 500.10891 556.69531 508.94727 C 556.69531 517.75439 554.68113 524.71797 550.65234 529.83984 C 546.65478 534.96172 541.22042 537.52344 534.34961 537.52344 C 527.4788 537.52344 522.01315 534.96172 517.95312 529.83984 C 513.92434 524.71797 511.91016 517.75439 511.91016 508.94727 C 511.91016 500.10891 513.92434 493.12773 517.95312 488.00586 C 522.01315 482.88398 527.4788 480.32422 534.34961 480.32422 z "/></g><g class="logo-border-group" transform="translate(0,-93.799975)"><circle class="logo-border-1" r="93.5"  cy="195.4" cx="101.6" id="path833" style="fill:none;stroke:#ffffff;stroke-width:7;" /><circle class="logo-border-2" r="101" cy="195.4" cx="101.6" style="fill:none;stroke:#ffffff;stroke-width:1;" /></g></svg>';
                } else {
                    if ( has_custom_logo() ) {
                        $logo_menu_logoname = get_custom_logo();
                    } else {
                        $logo_name = get_bloginfo( 'name' );
                        $logo_menu_logoname = '<span class="blogname">' . $logo_name . '</span>';
                    }
                }

                $studiokraft_description = get_bloginfo( 'description', 'display' );
                if ( $studiokraft_description || is_customize_preview() ) {
                    $logo_menu_description = $studiokraft_description;
                };
                $items .= '<li class="logo-wthree text-center">                
                                <a class="navbar-brand" href="' . $logo_menu_link . '">' . $logo_menu_logoname . '
                                    <span class="blogdescription">' . $logo_menu_description . '</span>
                                </a>
                            </li>';
            }
            return $items;
        }

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

        /*
         * It includes support posts types
         */
        add_theme_support( 'post-formats', array(
            'aside',
            'gallery',
            'link',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat'
        ) );

        // Set up the WordPress core custom background feature.
//		add_theme_support( 'custom-background', apply_filters( 'studiokraft_custom_background_args', array(
//			'default-color' => 'ffffff',
//			'default-image' => '',
//		) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
//            'height' => 140,
//            'width'  => 140,
'flex-width'  => TRUE,
'flex-height' => TRUE,
        ) );

        add_image_size( 'gallery-thumb', 520, 460, TRUE );
        add_image_size( 'gallery-thumb-vertical', 520, 946, TRUE );

        add_theme_support( 'editor-styles' );
        add_theme_support( 'dark-editor-style' );
    }
endif;
add_action( 'after_setup_theme', 'studiokraft_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function studiokraft_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS[ 'content_width' ] = apply_filters( 'studiokraft_content_width', 640 );
}

add_action( 'after_setup_theme', 'studiokraft_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function studiokraft_widgets_init()
{
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'studiokraft' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'studiokraft' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'studiokraft_widgets_init' );

function get_posts_per_page_20( $query )
{
    if ( !is_admin() && $query->is_main_query() && is_category( get_theme_mod( 'studiokraft_category_gallery' ) ) ) {
        $query->set( 'posts_per_page', 20 );
    }
}

add_action( 'pre_get_posts', 'get_posts_per_page_20' );

add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class )
{
    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

/**
 * Enqueue scripts and styles.
 */
function studiokraft_scripts()
{
    wp_enqueue_style( 'studiokraft-style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'studiokraft-style-lightbox', get_template_directory_uri() . '/assets/css/lightbox.css' );
    wp_enqueue_style( 'studiokraft-style-banner-style', get_template_directory_uri() . '/assets/css/banner-style.css' );
    wp_enqueue_style( 'studiokraft-style-aos', get_template_directory_uri() . '/assets/css/aos.css' );
    wp_enqueue_style( 'studiokraft-style-theme', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'studiokraft-style-fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'studiokraft-style-dosis', 'https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700' );
    wp_enqueue_style( 'studiokraft-style-fonts', 'https://fonts.googleapis.com/css?family=Forum|Roboto&display=swap' );
    wp_enqueue_style( 'studiokraft-style-lob', get_template_directory_uri() . '/assets/css/lob-style.css' );

    wp_enqueue_style( 'studiokraft-style', get_stylesheet_uri() );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-2.2.3.min.js' );
    wp_enqueue_script( 'jquery' );

    wp_add_inline_script( 'jquery', 'addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }', 'before' );

    wp_enqueue_script( 'studiokraft-script-aos', get_template_directory_uri() . '/assets/js/aos.js', array( 'wpsisac-public-script' ), NULL, TRUE );
    wp_add_inline_script( 'studiokraft-script-aos', "AOS.init({ easing: 'ease-out-back', duration: 1000 });", 'after' );
    wp_enqueue_script( 'studiokraft-script-lightbox-plus-jquery', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js', array( 'jquery' ), NULL, TRUE );
    wp_enqueue_script( 'studiokraft-script-move-top', get_template_directory_uri() . '/assets/js/move-top.js', array(), NULL, TRUE );
    wp_enqueue_script( 'studiokraft-script-easing', get_template_directory_uri() . '/assets/js/easing.js', array(), NULL, TRUE );
    wp_add_inline_script( 'studiokraft-script-easing', "jQuery(document).ready(function($) { $(\".scroll\").click(function(event) { event.preventDefault(); $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 900); }); });", 'after' );
    wp_add_inline_script( 'studiokraft-script-easing', " $(document).ready(function() { $().UItoTop({ easingType: 'easeOutQuart' }); });", 'after' );
    wp_enqueue_script( 'studiokraft-script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), NULL, TRUE );

    wp_enqueue_script( 'studiokraft-script-main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', TRUE );

    wp_enqueue_script( 'studiokraft-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', TRUE );

    wp_enqueue_script( 'studiokraft-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', TRUE );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'studiokraft_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

require_once get_template_directory() . '/inc/advanced-custom-fields.php';

function debug( $data )
{
    echo '<pre>';
    echo print_r( $data, 1 );
    echo '</pre>';
}