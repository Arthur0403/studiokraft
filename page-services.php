<?php
/*
Template Name: Правила
*/
?>

<?php
get_header();
?>

    <section class="rules py-lg-5 py-md-5 py-3">
        <div class="container container--rules">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="container container--rules">

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
?>