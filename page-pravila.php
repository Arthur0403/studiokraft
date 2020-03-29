<?php
/*
Template Name: Правила
*/
?>

<?php
get_header();
?>

    <div class="container-fluid p-0">
        <?php echo do_shortcode( '[slick-slider category="halls" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" /*arrows="false"*/]' ); ?>
    </div>
    <section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
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