<?php 

// Enable Header Absolute
$wp_customize->add_setting(
  'header_absolute',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_absolute'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_absolute',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Absolute ( OFF | ON )', 'isak'),
        'section' => 'section_options',
        'priority' => 2,
    ))
);

// Enable Header Sticky
$wp_customize->add_setting(
  'header_sticky',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_sticky'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_sticky',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Sticky ( OFF | ON )', 'isak'),
        'section' => 'section_options',
        'priority' => 3,
    ))
);    


$wp_customize->add_setting(
  'header_time',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_time'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_time',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Time ( OFF | ON )', 'isak'),
        'section' => 'section_options',
        'priority' => 3,
    ))
);  
