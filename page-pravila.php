<?php
/*
Template Name: Правила
*/
?>

<?php
get_header();
?>

    <div class="container-fluid p-0">
        <div class="container-title">
        <?php if ( have_posts() ) : while ( have_posts() ) :
            the_post(); ?>
            <div class="container-title wrapper">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
        <?php endwhile; endif ?>
        </div>
    </div>
    <section class="rules py-lg-5 py-md-5 py-3">
        <div class="attention-wrapper">
            <div class="container">
                <div class="attention">
                    <span class="attention-title">Внимание!</span>
                    <p class="attention-text"><?php the_field( 'attention' ); ?></p>
                </div>
            </div>
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