<?php 
$wp_customize->add_setting(
    'primary_color',
    array(
        'default'           => themesflat_customize_default('primary_color'),
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'primary_color',
        array(
            'label'         => esc_html__('Primary Color', 'isak'),
            'section'       => 'color_general',
            'settings'      => 'primary_color',
            'priority'      => 1
        )
    )
);

$wp_customize->add_setting(
    'white_color',
    array(
        'default'           => themesflat_customize_default('white_color'),
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'white_color',
        array(
            'label'         => esc_html__('Light Color', 'isak'),
            'section'       => 'color_general',
            'settings'      => 'white_color',
            'priority'      => 1
        )
    )
);


$wp_customize->add_setting(
    'black_color',
    array(
        'default'           => themesflat_customize_default('black_color'),
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'black_color',
        array(
            'label'         => esc_html__('Dark Color', 'isak'),
            'section'       => 'color_general',
            'settings'      => 'black_color',
            'priority'      => 1
        )
    )
);


$wp_customize->add_setting(
    'surface_color',
    array(
        'default'           => themesflat_customize_default('surface_color'),
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'surface_color',
        array(
            'label'         => esc_html__('Surface Color', 'isak'),
            'section'       => 'color_general',
            'settings'      => 'surface_color',
            'priority'      => 1
        )
    )
);
