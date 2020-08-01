<?php
/*
Template Name: Залы
*/
?>

<?php
get_header();
?>

<div class="container-fluid p-0">
<h1 class="content-main-title"><?php the_field( 'page_title' ); ?></h1>
  <div class="container container-halls">
    <?php if( is_page( 'grey' ) ) {
            echo do_shortcode('[slick-slider category="5" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false" image_fit="true" dots="false"]');
          }
          if( is_page( 'loft' ) ) {
            echo do_shortcode('[slick-slider category="17" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false" image_fit="true" dots="false"]');
          }
          if( is_page( 'magic' ) ) {
            echo do_shortcode('[slick-slider category="16" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false" image_fit="true" dots="false"]');
          }
          if( is_page( 'grimernaya-1' ) ) {
            echo do_shortcode('[slick-slider category="14" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false" image_fit="true" dots="false"]');
          }
          if( is_page( 'grimernaya-2' ) ) {
            echo do_shortcode('[slick-slider category="14" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" arrow="false" image_fit="true" dots="false"]');
          }
     ?>
    </div>
</div>
<section class="hall-section">
    <div class="container">
        <div class="col-lg-12 mx-auto"> <!-- px-5 -->
            <?php the_field( 'hall_description' ); ?>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/content', 'inventary' ); ?>

    <?php
get_footer();
?>