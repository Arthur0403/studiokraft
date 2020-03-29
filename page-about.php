<?php 
    /*
    Template Name: О нас
    */
?>

<?php
    get_header();
?>
<!--/about-->
<section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
<div class="page-about-banner">
<h2 class="title-wthree text-center mb-lg-5 mb-3"><?php the_field('main_title'); ?></h2>
</div>
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                 <!-- <h2 class="title-wthree text-center mb-lg-5 mb-3"><?php //he_field('main_title'); ?></h2> -->
                <div class="row">
                    <!-- <div class="col-lg-6 about-img" data-aos="flip-right">
                        <img class="img-fluid" src="<?php //the_field('post_image'); ?>" alt="">
                    </div> -->
                    <div class="col-lg-8 about-center mt-lg-4" data-aos="flip-left">
                        <h4 class="sub-tittle">Photography Studio</h4>
                        <h3 class="tittle text-uppercase"><?php the_field('about_title'); ?></h3>
                        <p class="my-4"><?php the_field('description_text'); ?></p>

                        <!-- <ul class="author d-flex">
                            <li><img class="img-fluid" src="images/author.jpg" alt=""></li>
                            <li><span>Expample Name</span>Photographer</li>
                        </ul> -->
                    </div>
                </div>
                
            </div>
            <div class="row mt-lg-5 mt-3">
                    <div class="col-lg-4 testimonials-gd" data-aos="fade-up">
                        <div class="box16">
                            <img src="<?php the_field('post_image'); ?>" alt=" " class="img-fluid">
                            <div class="box-content">
                                <h3 class="title-wthree"><?php the_field('hall_title_one'); ?></h3>
                            </div>
                        </div>
                          <p class="my-4 text-left"><?php the_field('hall_description_one'); ?></p>
                    </div>
                    <div class="col-lg-4 testimonials-gd" data-aos="fade-up">
                        <div class="box16">
                            <img src="<?php the_field('post_image'); ?>" alt=" " class="img-fluid">
                            <div class="box-content">
                                <h3 class="title-wthree"><?php the_field('hall_title_two'); ?></h3>
                            </div>
                        </div>
                          <p class="my-4 text-left"><?php the_field('hall_description_two'); ?></p>
                    </div>
                    <div class="col-lg-4 testimonials-gd" data-aos="fade-up">
                        <div class="box16">
                            <img src="<?php the_field('post_image'); ?>" alt=" " class="img-fluid">
                            <div class="box-content">
                                <h3 class="title-wthree"><?php the_field('hall_title_three'); ?></h3>
                            </div>
                        </div>
                          <p class="my-4 text-left"><?php the_field('hall_description_three'); ?></p>
                    </div> 
            </div>
            <div class="row mt-lg-5 stats-con">
                    <div class="col-sm-3 col-6 stats_info counter_grid" data-aos="fade-up">

                        <img src="../wp-content/uploads/2020/02/5a91372890dbd.png" class="img-custom">
                        <h4 class="img-subscribe">Оборудование Rime Lite</h4>

                    </div>
                    <div class="col-sm-3 col-6 stats_info counter_grid1" data-aos="fade-up">

                        <img src="../wp-content/uploads/2020/02/5a91372878404.png" class="img-custom">
                        <h4 class="img-subscribe">Различные насадки</h4>

                    </div>
                    <div class="col-sm-3 col-6 stats_info counter_grid" data-aos="fade-up">

                        <img src="../wp-content/uploads/2020/02/159-512.png" class="img-custom">
                        <h4 class="img-subscribe">Естественное освещение</h4>

                    </div>
                    <div class="col-sm-3 col-6 stats_info counter_grid2" data-aos="fade-up">

                        <img src="../wp-content/uploads/2020/02/11690-200.png" class="img-custom">
                        <h4 class="img-subscribe">Отдельная гримерка</h4>

                    </div>
                </div>
                <img src="http://fotovikus.com/wp-content/uploads/2015/11/FnfgYhsMBoU.jpg" alt="" data-aos="fade-up" style="margin-top: 40px;">
        </div>
    </section>
    <!--//about-->
<?php
    get_footer();
?>