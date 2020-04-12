<?php
/*
Template Name: Залы
*/
?>

<?php
get_header();
?>

    <div class="container-fluid p-0 mb-4">
        <?php echo do_shortcode('[slick-slider category="5" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false"]'); ?>
    </div>
    <section class="banner-bottom-w3layouts py-3 pb-0">
        <div class="container">
            <div class="row">
<!--            <h3 class="page-content__title title-up mx-auto">--><?php //the_field('page_title'); ?><!--</h3>-->
<!--                <div class="page-banner">-->
<!--                    <img class="img-fluid" src="--><?php //the_field('image_cover') ?><!--" alt="">-->
<!--                </div>-->
                <div class="page-content col-lg-12 py-4 px-5 mx-auto">
<!--                    <p class="page-content__description mb-3">--><?php //the_field('hall_description'); ?><!--</p>-->
<!--                    <table class="table table-bordered table-hover table-responsive-sm mb-2">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th scope="col">Будни</th>-->
<!--                            <th scope="col">Выходные</th>-->
<!--                            <th scope="col">Дополнительно</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            <td>500 р/час</td>-->
<!--                            <td>1000 р/час</td>-->
<!--                            <td>100 р/час</td>-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                    <p><a href="http://ellaboranto.ru/?page_id=69" class="link-rules">Правила аренды</a></p>-->
                    <?php the_field('hall_description'); ?>
                    <div class="mx-auto col-lg-3 col-md-6 col-sm-12">
                        <a href="http://ellaboranto.ru/?page_id=69" type="button" class="btn btn-light custom-btn custom-btn-white" style="font-size: 1rem">Правила аренды</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    <div class="container-fluid p-0 mb-4">-->
<!--        --><?php //echo do_shortcode('[slick-slider category="5" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false"]'); ?>
<!--    </div>-->
<div>
    <?php get_template_part( 'template-parts/content', 'inventary' ); ?>
</div>
    <?php
    get_footer();
    ?>