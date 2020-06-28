<?php
/*
Template Name: Правила
*/
?>

<?php
get_header();
?>

    <section class="py-0 pb-0 container">
        <div class="row">
            <div class="page-content col-lg-12 px-5 mx-auto pages">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <div class="attention-wrapper">
        <div class="container">
            <div class="attention">
                <span class="attention-title">Внимание!</span>
                <p class="attention-text"><?php the_field( 'attention' ); ?></p>
            </div>
        </div>
    </div>
    <section class="py-0 pb-0 container">
        <div class="row">
            <div class="page-content col-lg-12 px-5 mx-auto container--rules">
                <?php if ( have_posts() ) : while ( have_posts() ) :
                    the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                    404
                <?php endif ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>