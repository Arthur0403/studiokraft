<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Kraft
 */

get_header();
?>

	<section class="pages">
        <?php /* <div class="container container--pages">
            <h1 class="title"><?php the_title(); ?></h1>
        </div> */ ?>

        <div class="container container--pages pb-md-3 pb-lg-5">

            <?php if ( have_posts() ) : while ( have_posts() ) :
                the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else : ?>
                404
            <?php endif ?>

        </div>
    </section>

<?php

get_footer();
