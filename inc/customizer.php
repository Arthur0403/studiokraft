<?php
/**
 * Studio Kraft Theme Customizer
 *
 * @package Studio_Kraft
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function studiokraft_customize_register( $wp_customize )
{
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_setting( 'studiokraft_header_background_color', array(
        'default'           => '#1572bb',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_header_background_color',
            array(
                'label'   => __( 'Цвет Header', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_header_background_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_header_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_header_color',
            array(
                'label'   => __( 'Цвет текста в Header', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_header_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_main_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_main_background_color',
            array(
                'label'   => __( 'Основной цвет', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_main_background_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_main_color', array(
        'default'           => '#272727',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_main_color',
            array(
                'label'   => __( 'Основной цвет текста', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_main_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_title_color', array(
        'default'           => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_title_color',
            array(
                'label'   => __( 'Цвет заголовков', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_title_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_accent_color', array(
        'default'           => '#1572bb',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_accent_color',
            array(
                'label'   => __( 'Акцентный цвет', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_accent2_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_accent2_color', array(
        'default'           => '#ffc107',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_accent2_color',
            array(
                'label'   => __( 'Акцентный цвет2', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_accent2_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_footer_background_color', array(
        'default'           => '#121213',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_footer_background_color',
            array(
                'label'   => __( 'Цвет футера', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_footer_background_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_footer_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_footer_color',
            array(
                'label'   => __( 'Цвет текста футера', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_footer_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_reservation_background_color', array(
        'default'           => '#121213',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_reservation_background_color',
            array(
                'label'   => __( 'Цвет кнопки бронирования', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_reservation_background_color',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_reservation_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_reservation_color',
            array(
                'label'   => __( 'Цвет текста кнопки бронирования', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_reservation_color',
            )
        )
    );

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.blogname',
            'render_callback' => 'studiokraft_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.blogdescription',
            'render_callback' => 'studiokraft_customize_partial_blogdescription',
        ) );
        // Custom info
        $wp_customize->selective_refresh->add_partial( 'studiokraft_address', array(
            'selector'        => '.container_top .address',
            'render_callback' => 'studiokraft_customize_partial_address',
        ) );
        $wp_customize->selective_refresh->add_partial( 'studiokraft_navigation', array(
            'selector'        => '.container_top .navigation',
            'render_callback' => 'studiokraft_customize_partial_address',
        ) );
        $wp_customize->selective_refresh->add_partial( 'studiokraft_phone', array(
            'selector'        => '.container_top .phone',
            'render_callback' => 'studiokraft_customize_partial_phone',
        ) );
        $wp_customize->selective_refresh->add_partial( 'studiokraft_mail', array(
            'selector'        => '.container_top .mail',
            'render_callback' => 'studiokraft_customize_partial_mail',
        ) );
    }

    // Сustom section
    $wp_customize->add_section( 'studiokraft_site_data', array(
        'title'    => __( 'Информация о компании', 'studiokraft' ),
        'priority' => '20',
    ));
    $wp_customize->add_setting( 'studiokraft_show_logo', array(
        'default'   => true,
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        'studiokraft_show_logo',
        array(
            'label'   => __( 'включить логотип', 'studiokraft' ),
            'section' => 'studiokraft_site_data',
            'type'    => 'checkbox',
        )
    );
    $wp_customize->add_setting( 'studiokraft_phone', array(
        'default'           => '',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        'studiokraft_phone',
        array(
            'label'   => __( 'Телефон', 'studiokraft' ),
            'section' => 'studiokraft_site_data',
            'type'    => 'text',
        )
    );
    $wp_customize->add_setting( 'studiokraft_show_phone', array(
        'default'   => true,
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        'studiokraft_show_phone',
        array(
            'label'   => __( 'показывать телефон', 'studiokraft' ),
            'section' => 'studiokraft_site_data',
            'type'    => 'checkbox',
        )
    );
    $wp_customize->add_setting( 'studiokraft_mail', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_mail',
            array(
                'label'   => __( 'Почта', 'studiokraft' ),
                'section' => 'studiokraft_site_data',
                'setting' => 'studiokraft_mail',
                'type'    => 'text',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_show_mail', array(
        'default'   => true,
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        'studiokraft_show_mail',
        array(
            'label'   => __( 'показывать e-mail', 'studiokraft' ),
            'section' => 'studiokraft_site_data',
            'type'    => 'checkbox',
        )
    );
    $wp_customize->add_setting( 'studiokraft_address', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_address',
            array(
                'label'   => __( 'Адрес', 'studiokraft' ),
                'section' => 'studiokraft_site_data',
                'type'    => 'textarea',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_show_address', array(
        'default'   => true,
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        'studiokraft_show_address',
        array(
            'label'   => __( 'показывать адрес', 'studiokraft' ),
            'section' => 'studiokraft_site_data',
            'type'    => 'checkbox',
        )
    );
    $wp_customize->add_setting( 'studiokraft_navigation', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_navigation',
            array(
                'label'   => __( 'Ссылка на карту', 'studiokraft' ),
                'section' => 'studiokraft_site_data',
                'type'    => 'text',
            )
        )
    );
    $wp_customize->add_setting( 'studiokraft_show_navigation', array(
        'default'   => true,
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control(
        'studiokraft_show_navigation',
        array(
            'label'   => __( 'включить ссылку на карту', 'studiokraft' ),
            'section' => 'studiokraft_site_data',
            'type'    => 'checkbox',
        )
    );

    $wp_customize->add_section( 'studiokraft_social', array(
        'title'    => __( 'Социальные сети', 'studiokraft' ),
        'priority' => '25',
    ));
    $wp_customize->add_setting( 'studiokraft_social_vk', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_vk',
        array(
            'label'   => __( 'Вконтакте', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_facebook', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_facebook',
        array(
            'label'   => __( 'Facebook', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_instagram', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_instagram',
        array(
            'label'   => __( 'Instagram', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_whatsapp', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_whatsapp',
        array(
            'label'   => __( 'WhatsApp', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_viber', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_viber',
        array(
            'label'   => __( 'Viber', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_telegram', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_telegram',
        array(
            'label'   => __( 'Telegram', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_skype', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_skype',
        array(
            'label'   => __( 'Skype', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_social_ok', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_social_ok',
        array(
            'label'   => __( 'Одноклассники', 'studiokraft' ),
            'section' => 'studiokraft_social',
            'type'    => 'text',
    ));

    $wp_customize->add_section( 'studiokraft_settings_gallery', array(
        'title'    => __( 'Настройки галереи', 'studiokraft' ),
        'priority' => '85',
    ));
    $wp_customize->add_setting( 'studiokraft_category_gallery', array(
        'default'   => 'gallery',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'studiokraft_category_gallery',
        array(
            'label'   => __( 'Категория для галлереи', 'studiokraft' ),
            'section' => 'studiokraft_settings_gallery',
            'type'    => 'text',
    ));
    $wp_customize->add_setting( 'studiokraft_number_records_gallery', array(
        'default'   => '21',
        'transport' => 'refresh',
    ));
}

add_action( 'customize_register', 'studiokraft_customize_register' );

function studiokraft_customize_css()
{
    ?>
    <style type="text/css">
        header{background-color:<?php echo get_theme_mod( 'studiokraft_header_background_color' );?>;}
        .header_top p,.header_top span,.header_top a,.info .studiokraft-address,.info .phone .studiokraft-phone,.info .mail .studiokraft-mail{color:<?php echo get_theme_mod( 'studiokraft_header_color' );?>;}
        html,body,section.contacts,section.rules,figure,.halls-title,.btn-light{background-color:<?php echo get_theme_mod( 'studiokraft_main_background_color' );?>;}
        .halls-block .inner-halls{background-color:<?php echo get_theme_mod( 'studiokraft_main_background_color' );?>bb;}
        section p,section span,.attention-title,.features-item,.rules-panel,.rules-panel p,.rules-panel span,.info-item_title,.info-section div.wpforms-container-full .wpforms-form .wpforms-field-label{color:<?php echo get_theme_mod( 'studiokraft_main_color' );?>;}
        .info-section div.wpforms-container-full .wpforms-form input[type="text"],.info-section div.wpforms-container-full .wpforms-form input[type="email"],.info-section div.wpforms-container-full .wpforms-form textarea{color:<?php echo get_theme_mod( 'studiokraft_main_color' );?>cc;}
        h1,h2,h3,h4,h5,h6{color:<?php echo get_theme_mod( 'studiokraft_title_color' );?>;}
        .custom-btn-white{border-color:<?php echo get_theme_mod( 'studiokraft_accent_color' );?>;}
        .wpsisac-slick-slider .slick-dots li.slick-active button::after,#toTop{background-color:<?php echo get_theme_mod( 'studiokraft_accent_color' );?>}
        .tittle,.halls-title,.custom-btn,.custom-btn:visited,.btn-light:hover,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"],.btn-warning,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:hover,.btn-warning:hover,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:not(:disabled),.btn-warning:not(:disabled):not(.disabled):active,.btn-warning:not(:disabled):not(.disabled).active,.show>.btn-warning.dropdown-toggle{color:<?php echo get_theme_mod( 'studiokraft_accent_color' );?>;}
        div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"],.btn-warning,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:hover,.btn-warning:hover,div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:not(:disabled),.btn-warning:not(:disabled):not(.disabled):active,.btn-warning:not(:disabled):not(.disabled).active,.show > .btn-warning.dropdown-toggle{background-color:<?php echo get_theme_mod( 'studiokraft_accent2_color' );?>;border-color:<?php echo get_theme_mod( 'studiokraft_accent2_color' );?>;}
        div.wpforms-container-full .wpforms-form button.btn-warning[type="submit"]:focus,.btn-warning:focus, .btn-warning.focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.btn-warning:not(:disabled):not(.disabled).active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow: 0 0 0 0.2rem <?php echo get_theme_mod( 'studiokraft_accent2_color' );?>;
}
        .navbar-light .navbar-nav .show>a,.navbar-light .navbar-nav .current-menu-item>a,.navbar-light .navbar-nav .menu-item>a:hover,.navbar-light .navbar-nav .menu-item>a:focus,.header_top a:hover span,.header_top a:focus span,.info .phone a:hover .studiokraft-phone,.info .phone a:focus .studiokraft-phone,.info .mail a:hover .studiokraft-mail,.info .mail a:focus .studiokraft-mail,.navbar-light .navbar-nav .current-menu-item>a:hover,.navbar-light .navbar-nav .current-menu-item>a:focus{color:<?php echo get_theme_mod( 'studiokraft_accent2_color' );?>;}
        .navbar-light .navbar-nav .menu-item>a:hover::before,.navbar-light .navbar-nav .menu-item>a:focus::before,.navbar-light .navbar-nav .current-menu-item>a::before,.navbar-light .navbar-nav .current-menu-item>a:hover::before,.navbar-light .navbar-nav .current-menu-item>a:focus::before{background-color:<?php echo get_theme_mod( 'studiokraft_accent2_color' );?>;}
        .attention-wrapper{background-color:<?php echo get_theme_mod( 'studiokraft_accent2_color' );?>88;}
        footer{background-color:<?php echo get_theme_mod( 'studiokraft_footer_background_color' );?>;}
        footer span, footer p, footer a,p.copy-right{color:<?php echo get_theme_mod( 'studiokraft_footer_color' );?>;}
        .social-icons{border-left-color:<?php echo get_theme_mod( 'studiokraft_footer_color' );?>;border-right-color:<?php echo get_theme_mod( 'studiokraft_footer_color' );?>;}
        ul.social-icons li a{border-color:<?php echo get_theme_mod( 'studiokraft_footer_color' );?>;}
        .call-us{background-color:<?php echo get_theme_mod( 'studiokraft_reservation_background_color' );?>;}
        .call-text{color:<?php echo get_theme_mod( 'studiokraft_reservation_color' );?>;}
}
    </style>
    <?php
    //  studiokraft_footer_color
}

add_action( 'wp_head', 'studiokraft_customize_css' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function studiokraft_customize_partial_blogname()
{
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function studiokraft_customize_partial_blogdescription()
{
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function studiokraft_customize_preview_js()
{
    wp_enqueue_script( 'studiokraft-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', TRUE );
}

add_action( 'customize_preview_init', 'studiokraft_customize_preview_js' );
