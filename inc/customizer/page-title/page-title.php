<?php 
// Page title heading
$wp_customize->add_setting(
  'page_title_heading_enabled',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('page_title_heading_enabled'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'page_title_heading_enabled',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Heading ( OFF | ON )', 'isak'),
        'section' => 'section_page_title',
        'priority' => 1,
    ))
);

$wp_customize->add_setting('themesflat_options[info]', array(
        'type'              => 'info_control',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',            
    )
);

$wp_customize->add_setting(
    'page_title_alignment',
    array(
        'default'           => themesflat_customize_default('page_title_alignment'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    'page_title_alignment',
    array (
        'type'      => 'select',           
        'section'   => 'section_page_title',
        'priority'  => 22,
        'label'         => esc_html__('Page Title Alignment', 'isak'),
        'choices'   => array (
            'left' =>  esc_html__( 'Left','isak' ),
            'center' =>  esc_html__( 'Center','isak' ),
            'right' =>  esc_html__( 'Right','isak' )
            ) ,
    )
); 

$wp_customize->add_setting(
    'page_title_image_size',
    array(
        'default'           => themesflat_customize_default('page_title_image_size'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    'page_title_image_size',
    array (
        'type'      => 'select',           
        'section'   => 'section_page_title',
        'priority'  => 24,
        'label'         => esc_html__('Page Title Image Size', 'isak'),
        'choices'   => array (
            'auto' =>  esc_html__( 'Original','isak' ),
            'contain' =>  esc_html__( 'Fit to Screen','isak' ),
            'cover' =>  esc_html__( 'Fill Screen','isak' )
            ) ,
    )
);

// Page Title Overlay
$wp_customize->add_setting(
    'page_title_background_color',
    array(
        'default'           => themesflat_customize_default('page_title_background_color'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( new themesflat_ColorOverlay(
        $wp_customize,
        'page_title_background_color',
        array(
            'label'         => esc_html__('Background Color', 'isak'),
            'section'       => 'section_page_title',
            'priority'      => 26
        )
    )
);   

$wp_customize->add_setting(
    'page_title_background_color_opacity',
    array(
        'default'   =>  themesflat_customize_default('page_title_background_color_opacity'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( new themesflat_Slide_Control( $wp_customize,
    'page_title_background_color_opacity',
        array(
            'type'      =>  'slide-control',
            'section'   =>  'section_page_title',
            'label'     =>  'Opacity for Background Color (%)',
            'priority'  => 27,
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
            ),
        )

    )
);  

// Box control
$wp_customize->add_setting(
    'page_title_controls',
    array(
        'default' => themesflat_customize_default('page_title_controls'),
        'sanitize_callback' => 'themesflat_sanitize_text',
    )
);
$wp_customize->add_control( new themesflat_BoxControls($wp_customize,
    'page_title_controls',
    array(
        'label' => esc_html__( 'Page Title Controls (px)', 'isak' ),
        'section' => 'section_page_title',
        'type' => 'box-controls',
        'priority' => 28
    ))
);  