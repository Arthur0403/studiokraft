<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio_Kraft
 */

?>

</section>
    <footer class="pt-lg-5 inner-page-footer">
<!--        <p class="footer-title">-->
<!--            <a class="navbar-brand" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
<!--                --><?php //if ( has_custom_logo() ) : the_custom_logo(); ?><!----><?php //else : ?>
<!--                    <span class="blogname">--><?php //echo bloginfo( 'name' ); ?><!--</span>--><?php //endif; ?>
<!--            </a>-->
<!--        </p>-->
        <div class="footer-container">
<!--            --><?php //debug(get_theme_mods()); ?>
            <ul class="social-icons justify-content-center footer-item">
                <?php if (get_theme_mod( 'studiokraft_social_vk' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_vk' ); ?>"><span class="fab fa-vk"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_facebook' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_facebook' ); ?>"><span class="fab fa-facebook-f"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_instagram' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_instagram' ); ?>"><span class="fab fa-instagram"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_whatsapp' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_whatsapp' ); ?>"><span class="fab fa-whatsapp"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_viber' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_viber' ); ?>"><span class="fab fa-viber"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_telegram' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_telegram' ); ?>"><span class="fab fa-telegram-plane"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_skype' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_skype' ); ?>"><span class="fab fa-skype"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_ok' )) : ?>
                    <li class="mr-1"><a href="<?php echo get_theme_mod( 'studiokraft_social_ok' ); ?>"><span class="fab fa-odnoklassniki"></span></a></li>
                <?php endif; ?>
            </ul>
            <div class="footer-info footer-item">
                <div class="address<?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo " show"; ?>">
                    <p><span class="studiokraft-address"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo get_theme_mod( 'studiokraft_address' ); ?></span></p>
                </div>
                <p class="mail<?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo " show"; ?>">
                    <a href="mailto:<?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo get_theme_mod( 'studiokraft_mail' ); ?>">
                        <span class="studiokraft-mail"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo get_theme_mod( 'studiokraft_mail' ); ?></span>
                    </a>
                </p>
                <p class="phone<?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo " show"; ?>">
                    <a href="tel:<?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo str_replace( array( "(", ")", " ", "-" ), "", get_theme_mod( 'studiokraft_phone' ) ); ?> ">
                        <span class="studiokraft-phone"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo get_theme_mod( 'studiokraft_phone' ); ?></span>
                    </a>
                </p>
            </div>
            <div class="footer-links footer-item">
                <p><a href="">Политика конфиденциальности</a></p>
                <p><a href="">Пользовательское соглашение</a></p>
                <p><a href="">Бронирование</a></p>
            </div>
        </div>
        <div class="social_media_w3layouts text-center">
            <p class="copy-right-w3ls my-3">© 2020 - <?php echo date('Y'); ?> <a href="http://lobster.loc"><img src="/wp-content/uploads/2020/03/lobster.svg" alt="LobSteR Studio" width="30"> LobSteR Studio</a></p>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
