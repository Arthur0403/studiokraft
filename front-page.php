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
function debug($data){echo '<pre>';echo print_r($data, 1);echo '</pre>';}
?>
<!--<div class="container-fluid gallery-lightbox my-5">-->
<!--    <div class="row m-0">-->
<!---->
<!--        --><?php //get_template_part( 'template-parts/content', 'gallery' ); ?>
<!---->
<!--        <div class="button-center">-->
<!--            <a class="hover-2 btn text-uppercase stepanov" href="/category/gallery/page/2/">Вся галерея</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="container-fluid p-0">
    <div class="slider"></div>
</div>
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
    <section class="features mb-5">
        <h3 style="text-align: center">SERVICES</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium</div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium</div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium</div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium</div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium</div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-3 aos-init aos-animate" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium</div>
            </div>
        </div>
    </section>
    <section class="halls mb-5">
        <h3 class="halls-title mb-3">Our halls</h3>
        <div class="container"> <!-- Need to use php-circle -->
            <div class="row align-items-center halls-block aos-init aos-animate" data-aos="fade-up">
                <div class="col col-lg-8 p-4 inner-halls">
                    <h3 class="text-uppercase">Loft</h3>
                    <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium eum quidem explicabo hic at inventore deleniti provident nihil eaque facere nam. Excepturi.</p>
                    <button type="button" class="btn btn-light custom-btn custom-btn-white">Забронировать</button>
                </div>
<!--                <div class="col">-->
<!--                    <img class="img-fluid" src="--><?php //the_field('image-about-us') ?><!--" alt="">-->
<!--                </div>-->
            </div>
            <div class="row align-items-center halls-block aos-init aos-animate" data-aos="fade-up">
                <div class="col col-lg-8 p-4 inner-halls">
                    <h3 class="text-uppercase">Loft</h3>
                    <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium eum quidem explicabo hic at inventore deleniti provident nihil eaque facere nam. Excepturi.</p>
                    <button type="button" class="btn btn-light custom-btn custom-btn-white">Забронировать</button>
                </div>
                <!--                <div class="col">-->
                <!--                    <img class="img-fluid" src="--><?php //the_field('image-about-us') ?><!--" alt="">-->
                <!--                </div>-->
            </div>
            <div class="row align-items-center halls-block aos-init aos-animate" data-aos="fade-up">
                <div class="col col-lg-8 p-4 inner-halls">
                    <h3 class="text-uppercase">Loft</h3>
                    <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium eum quidem explicabo hic at inventore deleniti provident nihil eaque facere nam. Excepturi.</p>
                    <button type="button" class="btn btn-light custom-btn custom-btn-white">Забронировать</button>
                </div>
                <!--                <div class="col">-->
                <!--                    <img class="img-fluid" src="--><?php //the_field('image-about-us') ?><!--" alt="">-->
                <!--                </div>-->
            </div>
        </div>
    </section>
    <div class="row m-0">

        <?php get_template_part( 'template-parts/content', 'gallery' ); ?>

        <div class="button-center">
            <a class="hover-2 btn text-uppercase stepanov" href="/category/gallery/page/2/">Вся галерея</a>
        </div>
    </div>
</div>
<?php
get_footer();