<?php 
    /*
    Template Name: Залы
    */
?>

<?php 
    get_header();
?>

    <!--/team-->
    <section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                 <h2 class="title-wthree text-center mb-lg-5 mb-3"><?php the_field('page_title'); ?></h2>
                <div class="row">
                    <div class="col-lg-6 about-img" data-aos="flip-right">
                    <?php 
                            $image = get_field('image');

                            if(!empty($image)): ?>
                            <img 
                            src="<?php echo $image['url']; ?>" 
                            alt="<?php echo $image['alt']; ?>" 
                            class="img-fluid">
                            <?php endif; 
                        ?>
                    </div>
                </div>
                <p class="my-4" data-aos="fade-up"><?php the_field('hall_description'); ?></p>
            </div>
        </div>
    </section>
    <!--//team-->
<?php
    get_footer();
?>