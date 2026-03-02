<?php 
$wp_customize->add_setting('themesflat_options[info]', array(
        'type'              => 'info_control',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',            
    )
);
$wp_customize->add_control( new themesflat_Info( $wp_customize, 'typography-body', array(
    'label' => esc_html__('Body', 'isak'),
    'section' => 'section_typo_body',
    'settings' => 'themesflat_options[info]',
    'priority' => 1
    ) )
);
// Body fonts
$wp_customize->add_setting(
    'typography_body',
    array(
        'default' => themesflat_customize_default('typography_body'),
        'sanitize_callback' => 'esc_html',
    )
);
$wp_customize->add_control( new themesflat_Typography($wp_customize,
    'typography_body',
    array(
        'label' => esc_html__( 'Font name/style/sets', 'isak' ),
        'section' => 'section_typo_body',
        'type' => 'typography',
        'fields' => array('family','style','line_height','size','letter_spacing'),
        'priority' => 2
    ))
);
