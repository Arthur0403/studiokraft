<?php 
    /*
    Template Name: Залы
    */
get_header();

?>

    <section class="contacts">
        <h1 class="title"><?php the_title(); ?></h1>
        <section class="contacts-social">
            <div class="container">
                <div class="info-wrapper">
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
                            <p class="info-item_social"><span><?php the_field( 'social-1' ); ?></span> <span><?php the_field( 'social-2' ); ?></span> <span><?php the_field( 'social-3' ); ?></span></p>
                            <p><?php the_field( 'additionally' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="how-to-step">
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
        </section>
        <div class="map">
            <iframe src="<?php the_field( 'map_yandex' ); ?>" width="100%" height="400" frameborder="0"></iframe>
        </div>
        <section class="callback-form">
            <div class="container">
                <h3 class="tittle tittle-center">Напишите нам</h3>
                <div class="contact-form">
                    <?php echo do_shortcode( '[wpforms id="487" title="false" description="false"]' ); ?>
                </div>
            </div>
        </section>
        <div class="attention-wrapper">
            <div class="container">
                <div class="attention">
                    <span class="attention-title">Внимание!</span>
                    <p class="attention-text text-center"><?php the_field( 'attention' ); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php

get_footer();