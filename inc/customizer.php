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
        $wp_customize->selective_refresh->add_partial( 'studiokraft_phone', array(
            'selector'        => '.container_top .phone',
            'render_callback' => 'studiokraft_customize_partial_phone',
        ) );
        $wp_customize->selective_refresh->add_partial( 'studiokraft_mail', array(
            'selector'        => '.container_top .mail',
            'render_callback' => 'studiokraft_customize_partial_mail',
        ) );
        $wp_customize->selective_refresh->add_partial( 'studiokraft_address', array(
            'selector'        => '.container_top .address',
            'render_callback' => 'studiokraft_customize_partial_address',
        ) );
    }

    // Сustom section
    $wp_customize->add_section( 'studiokraft_site_data', array(
        'title'    => __( 'Информация о компании', 'studiokraft' ),
        'priority' => '20',
    ));
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

//    $wp_customize->add_section( 'studiokraft_site_data', array(
//        'title'    => __( 'Информация о компании', 'studiokraft' ),
//        'priority' => '20',
//    ));
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
