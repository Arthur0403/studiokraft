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
// category="halls"
//debug(get_theme_mods());
?>
    <div class="container-fluid p-0 container-slider">
        <?php echo do_shortcode( '[slick-slider category="4" fade="true" autoplay_interval="3000" image_size="original" design="design-2" lazyload="ondemand" arrows="false" dots="false" image_fit="true"]' ); ?>
        <div class="logo-slider">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( has_custom_logo() ) : ?><?php the_custom_logo(); ?><?php else : ?>
                    <span class="blogname"><?php echo bloginfo( 'name' ); ?></span><?php endif; ?>
                <span class="blogdescription"><?php $studiokraft_description = get_bloginfo( 'description', 'display' );
                    if ( $studiokraft_description || is_customize_preview() ) : ?><?php echo $studiokraft_description; ?><?php endif; ?></span>
            </a>
        </div>
    </div>
    <section class="features">
<!--        <h3 style="text-align: center">--><?php //the_field('features_title'); ?><!--</h3>-->
        <div class="container">
            <div class="row">
                <?php $features = get_field( 'features' );
                for($i = 1; $i <= count($features)/2; $i++ ): ?>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-4 py-3 aos-init aos-animate features-item" data-aos="fade-up">
                        <img src="<?php echo $features["features-img-$i"]; ?>" alt="" class="features-img">
                        <span><?php echo $features["features-item-$i"] ?></span>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <section class="halls">
        <h3 class="halls-title mx-auto"><?php the_field( 'halls-title' ); ?></h3>
        <div class="container">
            <?php $halls = get_field( 'halls_card' );
            foreach ( $halls as $innerHall ): ?>
                <div class="row align-items-center halls-block aos-init aos-animate" data-aos="fade-up">
                    <div class="col col-lg-8 col-md-5 p-4 inner-halls">
                        <h3 class="text-uppercase"><?php echo $innerHall[ 'hall_title' ]; ?></h3>
                        <span class="hall-price"><?php echo $innerHall['hall_price'] ?></span>
                        <p class="my-4"><?php echo $innerHall[ 'hall_description' ]; ?></p>
                        <a href="<?php echo $innerHall[ 'hall_link' ]; ?>" type="button" class="btn btn-light custom-btn custom-btn-white"><i class="fa fa-angle-right arrow-rigth" aria-hidden="true"></i></a>
                    </div>
                    <div class="col hall-img">
                        <img src="<?php echo $innerHall[ 'hall_img' ]; ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="gallery-title-wrap">
                <h3 class="tittle gallery-title"><?php the_field( 'gallery_title' ); ?></h3>
                <div class="black-border"></div>
            </div>
            <div class="row m-0">

                <?php get_template_part( 'template-parts/content', 'gallery' ); ?>

                <div class="button-center">
                    <a class="btn btn-light custom-btn custom-btn-white" href="/category/gallery/page/2/">Вся галерея</a>
                </div>
            </div>
        </div>
    </section>
<?php
//
//$halls = get_field('halls_card');
//debug($halls);
//
//
get_footer();