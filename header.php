<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Studio_Kraft
 */

?>
<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="content-main-w3 inner-page" id="home">
    <div class="header_top">
        <div class="container container_top">
            <ul class="social-icons">
                <?php if (get_theme_mod( 'studiokraft_social_vk' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_vk' ); ?>"><span class="fab fa-vk"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_facebook' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_facebook' ); ?>"><span class="fab fa-facebook-f"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_instagram' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_instagram' ); ?>"><span class="fab fa-instagram"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_whatsapp' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_whatsapp' ); ?>"><span class="fab fa-whatsapp"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_viber' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_viber' ); ?>"><span class="fab fa-viber"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_telegram' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_telegram' ); ?>"><span class="fab fa-telegram-plane"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_skype' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_skype' ); ?>"><span class="fab fa-skype"></span></a></li>
                <?php endif; ?>
                <?php if (get_theme_mod( 'studiokraft_social_ok' )) : ?>
                    <li><a href="<?php echo get_theme_mod( 'studiokraft_social_ok' ); ?>"><span class="fab fa-odnoklassniki"></span></a></li>
                <?php endif; ?>
            </ul>
            <p class="address<?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo " show"; ?>">
                <?php if ( TRUE === get_theme_mod( 'studiokraft_show_navigation' ) ) : ?><a href="<?php if ( TRUE === get_theme_mod( 'studiokraft_show_navigation' ) ) echo get_theme_mod( 'studiokraft_navigation' ); ?>"><?php endif; ?><span class="studiokraft-address"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo get_theme_mod( 'studiokraft_address' ); ?></span><?php if ( TRUE === get_theme_mod( 'studiokraft_show_navigation' ) ) : ?></a><?php endif; ?>
            </p>
            <p class="phone<?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo " show"; ?>">
                <a href="tel:<?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo str_replace( array( "(", ")", " ", "-" ), "", get_theme_mod( 'studiokraft_phone' ) ); ?> ">
                    <span class="studiokraft-phone"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_phone' ) ) echo get_theme_mod( 'studiokraft_phone' ); ?></span>
                </a>
            </p>
            <p class="mail<?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo " show"; ?>">
                <a href="mailto:<?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo get_theme_mod( 'studiokraft_mail' ); ?>">
                    <span class="studiokraft-mail"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_mail' ) ) echo get_theme_mod( 'studiokraft_mail' ); ?></span>
                </a>
            </p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu( array(
                'theme_location'  => 'header-menu',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav mx-auto',
            ) ); ?>

        </nav>
    </div>
</header>
