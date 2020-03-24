<?php 
    /*
    Template Name: Залы
    */
get_header();

?>
    <div class="container-fluid p-0">
        <?php echo do_shortcode( '[slick-slider category="halls" fade="true" autoplay_interval="5000" image_size="original" design="design-2" lazyload="ondemand" /*arrows="false"*/]' ); ?>
    </div>
    <section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="gallery-title-wrap">
                <h1 class="tittle gallery-title">Контакты</h1>
                <div class="black-border mb-4"></div>
            </div>
            <div class="info">
                <div class="info-section">
                    <div class="info-item address">
                        <div class="info-icon"><span class="fas far fab fa-map"></span></div>
                        <div class="info-block">
                            <p class="info-item_title">Адрес</p>
                            <p><span class="studiokraft-address"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo get_theme_mod( 'studiokraft_address' ); ?></span></p>
                        </div>
                    </div>
                    <div class="info-item phone">
                        <div class="info-icon"><span class="fas fa-phone"></span></i></div>
                        <div class="info-block">
                            <p class="info-item_title">Телефон</p>
                            <p><a href="tel:<?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo str_replace( array( "(", ")", " ", "-" ), "", get_theme_mod( 'studiokraft_phone' ) ); ?> ">
                                    <span class="studiokraft-phone"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo get_theme_mod( 'studiokraft_phone' ); ?></span>
                            </a></p>
                        </div>
                    </div>
                    <div class="info-item mail">
                        <div class="info-icon"><span class="fas fa-envelope"></span></div>
                        <div class="info-block">
                            <p class="info-item_title">Почта</p>
                            <p><a href="mailto:<?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo get_theme_mod( 'studiokraft_mail' ); ?>">
                                    <span class="studiokraft-mail"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo get_theme_mod( 'studiokraft_mail' ); ?></span>
                            </a></p>
                        </div>
                    </div>
                    <div class="info-item social">
                        <div class="info-icon"><span class="fas fa-users"></span></div>
                        <div class="info-block">
                            <p class="info-item_title">Социальные сети</p>
                            <p><?php the_field( 'social-1' ); ?></p>
                            <p><?php the_field( 'social-2' ); ?></p>
                            <p><?php the_field( 'social-3' ); ?></p>
                            <p><?php the_field( 'additionally' ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="info-section">
                    <?php echo do_shortcode( '[wpforms id="326" title="false" description="false"]' ); ?>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="<?php the_field( 'map_yandex' ); ?>" width="100%" height="400" frameborder="0"></iframe>
        </div>
        <div class="container">
            <div class="navigation">
                <div class="navigation-block">
                    <h3 class="tittle tittle-center">Как пройти?</h3>
                    <p class="navigation-text"><?php the_field( 'navigation' ); ?></p>
                </div>
                <video src="<?php $iframe = get_field( 'video' );
                preg_match( '/src="(.+?)"/', $iframe, $matches );
                echo $matches[ 1 ];
                ?>" controls></video>
            </div>
        </div>
        <div class="attention-wrapper">
            <div class="container">
                <div class="attention">
                    <span class="attention-title">Внимание!</span>
                    <p class="attention-text"><?php the_field( 'attention' ); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php

get_footer();