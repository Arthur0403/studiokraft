<?php
/**
 * The gallery template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Kraft
 */

get_header();

?>
    <section class="gallery">
        <div class="container">
            <div class="gallery-title-wrap">
                <h3 class="tittle gallery-title">Галлерея</h3>
                <div class="black-border mb-4"></div>
            </div>
            <div class="row m-0">

                <?php get_template_part( 'template-parts/content', 'gallery-page' ); ?>

            <?php the_posts_pagination( array(
                    'end_size' => 1,
                    'mid_size' => 1,
                    'type'     => 'list',
                ) ); ?>

            </div>
        </div>
    </section>
<?php
get_footer();
