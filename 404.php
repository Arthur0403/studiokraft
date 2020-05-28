<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Studio_Kraft
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container container--pages ">
                <div class="not-found">
                    <h1><?php esc_html_e( 'Ох!.. Кажется ваш запрос не в фокусе, давайте лучше сфокусируемся.', 'studiokraft' ); ?></h1>
                    <div class="image-wrapper">
                        <img class="image-404" src="<?php echo get_template_directory_uri() . '/assets/images/404.jpg'; ?>" alt="">
                    </div>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </main>
    </div>

<?php
get_footer();
