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
        <footer class="mt-lg-5 mt-auto pb-4 footer">
            <div class="container">
                <p class="footer-title"><span class="blogname"><?php echo bloginfo( 'name' ); ?></span></p>
                <div class="footer-container">
                    <ul class="social-icons justify-content-center footer-item">
                        <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
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
                    <p class="copy-right-w3ls mt-3">© 2020 - <?php echo date('Y'); ?> <a href="http://lobster.loc"><img src="/wp-content/uploads/2020/03/lobster.svg" alt="LobSteR Studio" width="30"> LobSteR Studio</a></p>
                </div>
            </div>
        </footer>
<!--    </section>-->

    <?php wp_footer(); ?>
    </body>
    </html>

</body>
</html>
