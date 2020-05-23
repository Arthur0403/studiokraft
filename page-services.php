<?php
/*
Template Name: Правила
*/
?>

<?php
get_header();
?>

    <!--    <section class="rules py-lg-5 py-md-5 py-3">-->
    <!--        <div class="container container--rules">-->
    <section class="py-0 pb-0 container pages">
        <div class="row">
            <div class="page-content col-lg-12 py-4 px-5 mx-auto">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="page-content col-lg-12 py-4 px-5 mx-auto container--rules">
<!--                <section class="content-item">-->
                    <?php if ( have_posts() ) : while ( have_posts() ) :
                        the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>
                        <!-- post navigation -->
                    <?php else : ?>
                        404
                    <?php endif ?>
<!--                </section>-->
            </div>
    </section>

<?php
get_footer();
?>