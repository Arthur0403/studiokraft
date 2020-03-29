<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Studio_Kraft
 */

if (get_the_category()[0]->slug === get_theme_mod( 'studiokraft_category_gallery' )) {
    get_header('hide');
} else {
    get_header();
}
get_header();

?>

    <div class="container-fluid p-0">
        <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', get_post_format() );

                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
//                if ( comments_open() || get_comments_number() ) :
//                    comments_template();
//                endif;
            endwhile; // End of the loop.
        ?>

	</div>

<?php
get_footer();