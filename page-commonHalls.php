<?php
/*
Template Name: Общая страница залов
*/
?>

<?php
get_header();
?>
    <div class="container-fluid p-0">
        <?php echo do_shortcode( '[slick-slider category="halls" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand"]' ); ?>
    </div>
    <section class="halls mb-5">
        <h3 class="halls-title mb-3 mx-auto"><?php the_field( 'halls-title' ); ?></h3>
        <div class="container">
            <?php $halls = get_field( 'halls_card' );
            foreach ( $halls as $innerHall ): ?>
                <div class="row align-items-center halls-block aos-init aos-animate" data-aos="fade-up">
                    <div class="col col-lg-8 p-4 inner-halls">
                        <h3 class="text-uppercase"><?php echo $innerHall[ 'hall_title' ]; ?></h3>
                        <p class="my-4"><?php echo $innerHall[ 'hall_description' ]; ?></p>
                        <a href="<?php echo $innerHall[ 'hall_link' ]; ?>" type="button" class="btn btn-light custom-btn custom-btn-white">Забронировать</a>
                    </div>
                    <div class="col hall-img">
                        <img src="<?php echo $innerHall[ 'hall_img' ]; ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="dressing-room mb-5 py-4">
        <h3 class="dressing-room_title my-4 mx-auto"><?php the_field( 'dressing_room_title' ); ?></h3>
        <div class="container mt-3">
                <div class="row align-items-center aos-init aos-animate justify-content-between" data-aos="fade-up">
                    <?php $dressingRooms = get_field( 'dressing_rooms' );
                    foreach ( $dressingRooms as $innerHall ): ?>
                    <div class="col col-lg-5 mb-4">
                        <img src="<?php echo $innerHall[ 'hall_img' ]; ?>" alt="" class="dressing-room-img">
                        <div class="inner-dressing-room p-4">
                            <h3 class="text-uppercase"><?php echo $innerHall[ 'hall_title' ]; ?></h3>
                            <p class="my-4"><?php echo $innerHall[ 'hall_description' ]; ?></p>
                            <a href="<?php echo $innerHall[ 'hall_link' ]; ?>" type="button" class="btn btn-light custom-btn custom-btn-white">Забронировать</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
        </div>
    </section>
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
<?php
get_footer();
?>