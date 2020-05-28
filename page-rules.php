<?php 
    /*
    Template Name: Правила
    */
?>

<?php 
    get_header();
?>

<!--/about-->
<section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
        <div class="container">
            <h2 class="title-wthree text-center mb-lg-5 mb-3"><?php the_field('page_title'); ?></h2>
            <p class="my-4" data-aos="fade-up"><?php the_field('main_text'); ?></p>
        </div>
</section>
    <!--//about-->
<?php
    get_footer();
?>