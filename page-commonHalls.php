<?php
/*
Template Name: Общая страница залов
*/
?>

<?php
get_header();
?>
    <div class="container-fluid p-0">
        <?php echo do_shortcode( '[slick-slider category="halls" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" dots="false"]' ); ?>
    </div>
    <section class="halls mb-5">
        <h3 class="halls-title halls-title-common mb-3 mx-auto"><?php the_field( 'halls-title' ); ?></h3>
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
                    <div class="col col-lg-6 mb-4">
                        <img src="<?php echo $innerHall[ 'hall_img' ]; ?>" alt="" class="dressing-room-img">
                        <div class="inner-dressing-room col-lg-10 p-4">
                            <h3 class="text-uppercase"><?php echo $innerHall[ 'hall_title' ]; ?></h3>
                            <p class="my-4"><?php echo $innerHall[ 'hall_description' ]; ?></p>
                            <a href="<?php echo $innerHall[ 'hall_link' ]; ?>" type="button" class="btn btn-light custom-btn custom-btn-white">Забронировать</a>
                        </div>
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