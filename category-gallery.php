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
function debug($data){echo '<pre>';echo print_r($data, 1);echo '</pre>';}
?>
<div class="container-fluid gallery-lightbox my-5">
    <div class="row m-0">

        <?php get_template_part( 'template-parts/content', 'gallery-4' ); ?>

    <?php the_posts_pagination( array(
            'end_size' => 1,
            'mid_size' => 1,
            'type'     => 'list',
        ) ); ?>
    </div>
</div>
<?php
get_footer();
