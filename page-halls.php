<?php
/*
Template Name: Залы
*/
?>

<?php
get_header();
?>

    <div class="container-fluid p-0">
        <?php echo do_shortcode('[slick-slider category="5" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false"]'); ?>
    </div>
    <section class="hall-section">
        <div class="container">
            <div class="page-content col-lg-12 px-5 mx-auto">
                <?php the_field('hall_description'); ?>
                <div class="mx-auto col-lg-3 col-md-6 col-sm-12">
                    <a href="http://ellaboranto.ru/?page_id=69" type="button" class="btn btn-light custom-btn custom-btn-white" style="font-size: 1rem">Правила аренды</a>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/content', 'inventary' ); ?>

    <?php
    get_footer();
    ?>