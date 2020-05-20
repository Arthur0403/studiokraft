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
                if ( get_theme_mod( 'studiokraft_social_vk' ) ) {
                    $social = '<li><a href = "' . get_theme_mod( 'studiokraft_social_vk' ) . '" ><span class="fab fa-vk" ></span ></a ></li>';
                };
                if ( get_theme_mod( 'studiokraft_social_facebook' ) ) {
                    $social .= '<li><a href = "' . get_theme_mod( 'studiokraft_social_facebook' ) . '" ><span class="fab fa-facebook-f" ></span ></a ></li>';
                };
                if (get_theme_mod( 'studiokraft_social_instagram' )) {
                    $social .= '<li><a href = "' . get_theme_mod( 'studiokraft_social_instagram' ) . '" ><span class="fab fa-instagram" ></span ></a ></li>';
                };
                if (get_theme_mod( 'studiokraft_social_whatsapp' )) {
                    $social .= '<li ><a href = "' . get_theme_mod( 'studiokraft_social_whatsapp' ) . '" ><span class="fab fa-whatsapp" ></span ></a ></li>';
                };
                $items .= '<ul class="social-icons mobile">
                                ' . $social . '
                           </ul>';
            }
            return $items;
        }
        /*
         * Add in the header and logo menu
         */
//        add_filter( 'wp_nav_menu_items', 'logo_menu_item', 10, 2 );
//        function logo_menu_item( $items, $args )
//        {
//            if ( $args->theme_location == 'header-menu' ) {
//                $logo_menu_link = esc_url( home_url( '/' ) );
//                if ( has_custom_logo() ) {
//                    $logo_menu_logoname = get_custom_logo();
//                } else {
//                    $logo_name = get_bloginfo( 'name' );
//                    $logo_menu_logoname = '<span class="blogname">' . $logo_name . '</span>';
//                }
//
//                $studiokraft_description = get_bloginfo( 'description', 'display' );
//                if ( $studiokraft_description || is_customize_preview() ) {
//                    $logo_menu_description = $studiokraft_description;
//                };
//                $items .= '<li class="logo-wthree text-center">
//                                <a class="navbar-brand" href="' . $logo_menu_link . '">' . $logo_menu_logoname . '
//                                    <span class="blogdescription">' . $logo_menu_description . '</span>
//                                </a>
//                            </li>';
//            }
//            return $items;
//        }

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
            'chat',
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

        add_image_size( 'gallery-thumb', 545, 482, TRUE );
        add_image_size( 'gallery-thumb-vertical', 545, 986, TRUE );

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
//function studiokraft_widgets_init()
//{
//    register_sidebar( array(
//        'name'          => esc_html__( 'Sidebar', 'studiokraft' ),
//        'id'            => 'sidebar-1',
//        'description'   => esc_html__( 'Add widgets here.', 'studiokraft' ),
//        'before_widget' => '<section id="%1$s" class="widget %2$s">',
//        'after_widget'  => '</section>',
//        'before_title'  => '<h2 class="widget-title">',
//        'after_title'   => '</h2>',
//    ) );
//}

//add_action( 'widgets_init', 'studiokraft_widgets_init' );

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

/**
 * Allow SVG files in Media Library.
 */
function extra_mime_types( $mimes )
{

    $mimes[ 'svg' ] = 'image/svg+xml';

    return $mimes;
}
add_filter( 'upload_mimes', 'extra_mime_types' );

function debug( $data )
{
    echo '<pre>';
    echo print_r( $data, 1 );
    echo '</pre>';
}

remove_filter('pre_term_description', 'wp_filter_kses');

//$filters = array( 'pre_term_description',
//                  'pre_link_description',
//                  'pre_link_notes',
//                  'pre_user_description' );
//foreach ( $filters as $filter ) {
//    remove_filter( $filter, 'wp_filter_kses' );
//}
//foreach ( array( 'term_description' ) as $filter ) {
//    remove_filter( $filter, 'wp_kses_data' );
//}

function getPageId($id){
    if($id === 88) {
        return 'Magic';
    } elseif ($id === 84) {
        return 'Loft';
    } elseif ($id === 90) {
        return 'Grey';
    } elseif ($id === 553 || $id === 556) {
        return 'Grim';
    }
}