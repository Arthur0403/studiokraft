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
            <section class="error-404 not-found">
        <div class="container container--pages">
            <h1><?php //esc_html_e( 'Oops! That page can&rsquo;t be found.', 'studiokraft' ); ?></h1>
        </div>

        <div class="container container--pages ">
            <div class="not-found">
                <h1><?php esc_html_e( 'Ох!.. Кажется ваш запрос не в фокусе, давайте лучше сфокусируемся.', 'studiokraft' ); ?></h1>
                <div class="image-wrapper">
                    <img class="image-404" src="<?php echo get_template_directory_uri() . '/assets/images/404.jpg'; ?>" alt="">
                </div>
                <?php get_search_form(); ?>

    <!--                    <div class="widget widget_categories">-->
    <!--                        <h2 class="widget-title">--><?php //esc_html_e( 'Most Used Categories', 'studiokraft' ); ?><!--</h2>-->
    <!--                        <ul>-->
    <!--                            --><?php //wp_list_categories( array(
    //                                'orderby'    => 'count',
    //                                'order'      => 'DESC',
    //                                'show_count' => 1,
    //                                'title_li'   => '',
    //                                'number'     => 10,
    //                            ) );
    //                            ?>
    <!--                        </ul>-->
    <!--                    </div>-->

    <!--                    --><?php
    //                    /* translators: %1$s: smiley */
    //                    $studiokraft_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'studiokraft' ), convert_smilies( ':)' ) ) . '</p>';
    //                    the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$studiokraft_archive_content" );
    //                    the_widget( 'WP_Widget_Tag_Cloud' );
    //                    ?>

                </div><!-- .error-404 -->
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
