<?php
/**
 * The front-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Kraft
 */

get_header();

?>
    <div class="container-fluid p-0">
        <?php echo do_shortcode( '[slick-slider category="halls" image_size="original" design="design-2" lazyload="ondemand"]' ); ?>
    </div>
    <section class="about-us">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 aos-init aos-animate about-right" data-aos="flip-left">
                    <h3 class="tittle text-uppercase"><?php the_field('about-us-title'); ?></h3>
                    <div class="black-border"></div>
                    <p class="my-4"><?php the_field('about-us'); ?></p>
                    <button type="button" class="btn btn-warning custom-btn">Забронировать</button>
                </div>
                <div class="col-lg-6 aos-init aos-animate p-lg-0" data-aos="flip-right">
                    <img class="img-fluid" src="<?php the_field('image-about-us') ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="features mb-5">
        <h3 style="text-align: center">ОСОБЕННОСТИ</h3>
        <div class="container">
            <div class="row">
                <?php $features = get_field( 'features' );
                foreach ( $features as $item ): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up"><?php echo $item ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="halls mb-5">
        <h3 class="halls-title mb-3"><?php the_field( 'halls-title' ); ?></h3>
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
    <div class="row m-0">

        <?php get_template_part( 'template-parts/content', 'gallery' ); ?>

        <div class="button-center">
            <a class="btn btn-light custom-btn custom-btn-white" href="/category/gallery/page/2/">Вся галерея</a>
        </div>
    </div>
<?php
//
//$halls = get_field('halls_card');
//debug($halls);
//
//?>
<?php
get_footer();