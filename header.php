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
<section class="content-main-w3 inner-page" id="home">
    <div class="header_top_w3ls">
        <div class="container container_top">
            <div class="header-info">
                <p class="address<?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo " show"; ?>">
                    <?php if ( TRUE === get_theme_mod( 'studiokraft_show_navigation' ) ) : ?><a href="<?php if ( TRUE === get_theme_mod( 'studiokraft_show_navigation' ) ) echo get_theme_mod( 'studiokraft_navigation' ); ?>"><?php endif; ?><span class="studiokraft-address"><?php if ( TRUE === get_theme_mod( 'studiokraft_show_address' ) ) echo get_theme_mod( 'studiokraft_address' ); ?></span><?php if ( TRUE === get_theme_mod( 'studiokraft_show_navigation' ) ) : ?></a><?php endif; ?>
                </p>
            </div>
            <div class="info">
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
        </div>
        <div class="logo-wthree text-center logo-wthree__top">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( has_custom_logo() ) : ?><?php the_custom_logo(); ?><?php else : ?>
                    <span class="blogname"><?php echo bloginfo( 'name' ); ?></span><?php endif; ?>
                <span class="blogdescription"><?php $studiokraft_description = get_bloginfo( 'description', 'display' );
                    if ( $studiokraft_description || is_customize_preview() ) : ?><?php echo $studiokraft_description; ?><?php endif; ?></span>
            </a>
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
</section>
