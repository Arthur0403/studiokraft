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

    $wp_customize->add_setting( 'studiokraft_background_color', array(
        'default'           => '#1572bb',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'studiokraft_background_color',
            array(
                'label'   => __( 'Цвет фона', 'studiokraft' ),
                'section' => 'colors',
                'setting' => 'studiokraft_background_color',
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
        .content-main-w3 { background : <?php echo get_theme_mod( 'studiokraft_background_color' ); ?>; }
    </style>
    <?php
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
