<?php 

$wp_customize->add_setting(
    'footer_cover_letter',
    array(
        'default'   =>  themesflat_customize_default('footer_cover_letter'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'footer_cover_letter',
    array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Cover Letter', 'isak'),
        'section'   => 'section_footer',
        'priority'  =>  1
    )
);

$wp_customize->add_setting(
    'footer_cover_letter_author',
    array(
        'default'   =>  themesflat_customize_default('footer_cover_letter_author'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'footer_cover_letter_author',
    array(
        'type'      =>  'text',
        'label'     =>  esc_html__('Cover Letter Author', 'isak'),
        'section'   => 'section_footer',
        'priority'  =>  2
    )
);

$wp_customize->add_setting(
    'footer_signature_1',
    array(
        'default' => themesflat_customize_default('footer_signature_1'),
        'sanitize_callback' => 'esc_url_raw',
    )
);    
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'footer_signature_1',
        array(
           'label'          => esc_html__( 'Upload Your Left Image ', 'isak' ),
           'description'    => esc_html__( 'If you don\'t display logo please remove it your website display 
            Site Title default in General', 'isak' ),
           'type'           => 'image',
           'section'        => 'section_footer',
           'priority'       => 3,
        )
    )
);

$wp_customize->add_setting(
    'footer_signature_2',
    array(
        'default' => themesflat_customize_default('footer_signature_2'),
        'sanitize_callback' => 'esc_url_raw',
    )
);    
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'footer_signature_2',
        array(
           'label'          => esc_html__( 'Upload Your Right Image ', 'isak' ),
           'description'    => esc_html__( 'If you don\'t display logo please remove it your website display 
            Site Title default in General', 'isak' ),
           'type'           => 'image',
           'section'        => 'section_footer',
           'priority'       => 4,
        )
    )
);

// Footer Copyright
$wp_customize->add_setting(
    'footer_copyright',
    array(
        'default' => themesflat_customize_default('footer_copyright'),
        'sanitize_callback' => 'themesflat_sanitize_text',
    )
);
$wp_customize->add_control(
    'footer_copyright',
    array(
        'label' => esc_html__( 'Copyright', 'isak' ),
'section'        => 'section_footer',
        'type' => 'textarea',
        'priority' => 5
    )
);