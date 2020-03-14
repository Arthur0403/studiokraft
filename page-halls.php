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
            <div class="row">
                <div class="page-banner">
                    <img class="img-fluid" src="<?php the_field('image_cover') ?>" alt="">
                </div>
                <div class="page-content col-lg-8 py-4 px-5 mx-auto">
                    <h3 class="page-content__title mb-3"><?php the_field('page_title'); ?></h3>
                    <p class="page-content__description mb-3"><?php the_field('hall_description'); ?></p>
                    <table class="table table-bordered mb-4">
                        <thead>
                        <tr>
                            <th scope="col">Будни</th>
                            <th scope="col">Выходные</th>
                            <th scope="col">Дополнительно</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>500 р/час</td>
                            <td>1000 р/час</td>
                            <td>100 р/час</td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-warning mx-auto mb-5 custom-btn custom-btn-hall ">Забронировать</button>
                    <div class="dropdown show">
                        <a class="btn dropdown-toggle custom-dropdown-hall" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Правила
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h4>Services</h4>
                            <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi
                                accusamus adipisci vel atque, accusantium eum quidem explicabo hic at inventore deleniti
                                provident nihil eaque facere nam. Excepturi. 2. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium
                                eum quidem explicabo hic at inventore deleniti provident nihil eaque facere nam.
                                Excepturi. 3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt
                                maxime sequi accusamus adipisci vel atque, accusantium eum quidem explicabo hic at
                                inventore deleniti provident nihil eaque facere nam. Excepturi.</p>
                            <h4>Services</h4>
                            <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi
                                accusamus adipisci vel atque, accusantium eum quidem explicabo hic at inventore deleniti
                                provident nihil eaque facere nam. Excepturi. 2. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium
                                eum quidem explicabo hic at inventore deleniti provident nihil eaque facere nam.
                                Excepturi. 3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt
                                maxime sequi accusamus adipisci vel atque, accusantium eum quidem explicabo hic at
                                inventore deleniti provident nihil eaque facere nam. Excepturi.</p>
                            <h4>Services</h4>
                            <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt maxime sequi
                                accusamus adipisci vel atque, accusantium eum quidem explicabo hic at inventore deleniti
                                provident nihil eaque facere nam. Excepturi. 2. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Magni nesciunt maxime sequi accusamus adipisci vel atque, accusantium
                                eum quidem explicabo hic at inventore deleniti provident nihil eaque facere nam.
                                Excepturi. 3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nesciunt
                                maxime sequi accusamus adipisci vel atque, accusantium eum quidem explicabo hic at
                                inventore deleniti provident nihil eaque facere nam. Excepturi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="inner-sec-w3ls py-lg-5 py-3">-->
            <!--                 <h2 class="title-wthree text-center mb-lg-5 mb-3">-->
            <?php //the_field('page_title'); ?><!--</h2>-->
            <!--                <div class="row">-->
            <!--                    <div class="col-lg-6 about-img" data-aos="flip-right">-->
            <!--                    --><?php //
            //                            $image = get_field('image');
            //
            //                            if(!empty($image)): ?>
            <!--                            <img -->
            <!--                            src="--><?php //echo $image['url']; ?><!--" -->
            <!--                            alt="--><?php //echo $image['alt']; ?><!--" -->
            <!--                            class="img-fluid">-->
            <!--                            --><?php //endif;
            //                        ?>
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="my-4" data-aos="fade-up">-->
            <?php //the_field('hall_description'); ?><!--</p>-->
            <!--            </div>-->
        </div>
    </section>
    <!--//team-->
<?php
get_footer();
?>