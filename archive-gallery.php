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
    <div class="row" style="display:flex;flex-direction:column;margin: 0 auto;align-items: center">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div>
            <p style="color:#ffffff"><?php the_title(); ?></p>
        </div>
    <?php endwhile;
    debug(the_posts_navigation());
//    the_posts_navigation( array(
//        'prev_text'          => 'назад',
//        'next_text'          => 'вперед',
//    ) );
    endif; ?>
    </div>
</div>
<?php
get_footer();
