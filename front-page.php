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
<!--<div class="container-fluid">-->
    <div class="slider"></div>
<!--</div>-->
<div class="container">
    <div class="inner-sec-w3ls py-lg-5 py-3">
        <div class="row">
            <div class="col-lg-6 about-right mt-lg-4 aos-init aos-animate" data-aos="flip-left">
                <h3 class="tittle text-uppercase"><?php the_field('about-us-title'); ?></h3>
                <div class="black-border"></div>
                <p class="my-4"><?php the_field('about-us'); ?></p>
                <button type="button" class="btn btn-warning float-right custom-btn">Забронировать</button>
            </div>
            <div class="col-lg-6 about-img aos-init aos-animate" data-aos="flip-right">
                <img class="img-fluid" src="<?php the_field('image-about-us') ?>" alt="">
            </div>
        </div>
    </div>
    <div class="row m-0">

        <?php get_template_part( 'template-parts/content', 'gallery' ); ?>

        <div class="button-center">
            <a class="hover-2 btn text-uppercase stepanov" href="/category/gallery/page/2/">Вся галерея</a>
        </div>
    </div>
</div>
<?php
get_footer();