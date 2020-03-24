<?php
/*
Template Name: Залы
*/
?>

<?php
get_header();
?>


    <section class="banner-bottom-w3layouts py-3 pb-0">
        <div class="container">
            <div class="row">
                <div class="page-banner">
                    <img class="img-fluid" src="<?php the_field('image_cover') ?>" alt="">
                </div>
                <div class="page-content col-lg-8 py-4 px-5 mx-auto">
                    <h3 class="page-content__title mb-3"><?php the_field('page_title'); ?></h3>
                    <p class="page-content__description mb-3"><?php the_field('hall_description'); ?></p>
                    <table class="table table-bordered table-hover table-responsive-sm mb-2">
                        <thead>
                        <tr>
                            <th scope="col">Будни</th>
                            <th scope="col">Выходные</th>
                            <th scope="col">Дополнительно</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>500 р/час</td>
                            <td>1000 р/час</td>
                            <td>100 р/час</td>
                        </tr>
                        </tbody>
                    </table>
                    <p><a href="http://ellaboranto.ru/?page_id=69" class="link-rules">Правила аренды</a></p>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid p-0 mb-4">
        <?php echo do_shortcode('[slick-slider category="5" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false"]'); ?>
    </div>
    <section class="mb-4 inventary">
        <div class="container">
            <h3 class="my-4 mx-auto inventary-title">Инвентарь</h3>
            <div class="row">
                <?php $inventary = get_field('inventary');
                foreach ($inventary as $item): ?>
                    <div class="col col-lg-3 col-md-6 col-sm-12 mb-3">
                        <img src="<?= $item['inventary_item_img'] ?>" alt="" class="inventary-img">
                        <span class="inventary-subscribe"><?= $item['inventary_item_subscribe'] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<div>
    <?php get_template_part( 'template-parts/content', 'inventary' ); ?>
</div>
    <?php
    get_footer();
    ?>