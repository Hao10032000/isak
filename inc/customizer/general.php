<?php 

$wp_customize->add_setting(
    'style_background',
    array(
        'default'           => 'none', 
        'sanitize_callback' => 'esc_attr',
    )
);

$wp_customize->add_control( 
    'style_background',
    array (
        'type'      => 'select',           
        'section'   => 'general_panel',
        'priority'  => 1,
        'label'     => esc_html__('Style Background Page', 'isak'),
        'choices'   => array (
            'none'  => esc_html__( 'None (Default)','isak' ),
            'video' => esc_html__( 'Page Background Video','isak' ),
        ),
    )
);

$wp_customize->add_setting(
    'video_background',
    array(
        'default'           => themesflat_customize_default('video_background'),
        'sanitize_callback' => 'esc_attr',
    )
);

$wp_customize->add_control( new themesflat_RadioImages($wp_customize,
    'video_background',
    array (
        'type'      => 'radio-images',           
        'section'   => 'general_panel',
        'priority'  => 3,
        'label'     => esc_html__('Select Video', 'isak'),
        'choices'   => array (
            'video-1' => array (
                'tooltip'   => esc_html__( 'Video 1','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/features/feature-bg-1.jpg'
            ),
            'video-2' => array (
                'tooltip'   => esc_html__( 'Video 2','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/features/feature-bg-2.jpg'
            ),
        ),
        'active_callback' => function () use ( $wp_customize ) {
 
            return 'video' === $wp_customize->get_setting( 'style_background' )->value();
        }, 
    ))
);

// Enable Smooth Scroll
$wp_customize->add_setting(
  'enable_smooth_scroll',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_smooth_scroll'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'enable_smooth_scroll',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Smooth Scroll ( OFF | ON )', 'isak'),
        'section' => 'general_panel',
        'priority' => 4,
    ))
);

// Enable Preload
$wp_customize->add_setting(
  'enable_preload',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_preload'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'enable_preload',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Preload ( OFF | ON )', 'isak'),
        'section' => 'general_panel',
        'priority' => 5,
    ))
);

// Preload
$wp_customize->add_setting(
    'preload',
    array(
        'default'           => themesflat_customize_default('preload'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( new themesflat_RadioImages($wp_customize,
    'preload',
    array (
        'type'      => 'radio-images',           
        'section'   => 'general_panel',
        'priority'  => 6,
        'label'         => esc_html__('Preload', 'isak'),
        'choices'   => array (
            'preload-1' => array (
                'tooltip'   => esc_html__( 'Circle Loaders 1','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-1.png'
            ) ,
            'preload-3'=>  array (
                'tooltip'   => esc_html__( 'Circle Loaders 2','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-3.png'
            ) ,
            'preload-4'=>  array (
                'tooltip'   => esc_html__( 'Circle Loaders 3','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-4.png'
            ) ,
            'preload-5'=>  array (
                'tooltip'   => esc_html__( 'Spinner Loaders','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-5.png'
            ) ,
            'preload-6'=>  array (
                'tooltip'   => esc_html__( 'Pulse Loaders','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-6.png'
            ) ,
            'preload-7'=>  array (
                'tooltip'   => esc_html__( 'Square Loaders','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-7.png'
            ) ,
            'preload-8'=>  array (
                'tooltip'   => esc_html__( 'Line Loaders','isak' ),
                'src'       => THEMESFLAT_LINK . 'images/controls/preload-8.png'
            ) ,
        ),
    ))
);

//Socials
$wp_customize->add_setting(
    'social_links',
    array(
      'sanitize_callback' => 'esc_attr',
      'default' => themesflat_customize_default('social_links'),     
    )   
  );
  $wp_customize->add_control( new themesflat_SocialIcons($wp_customize,
      'social_links',
      array(
          'type' => 'social-icons',
          'label' => esc_html__('Social Media', 'isak'),
          'section' => 'general_panel',
          'priority' => 7,
      ))
  );


// Go To Button
$wp_customize->add_setting(
  'go_top',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('go_top'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'go_top',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Go To Button ( OFF | ON )', 'isak'),
        'section' => 'general_panel',
        'priority' => 8,
    ))
);

$wp_customize->add_setting(
  'btn_darkmode',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('btn_darkmode'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'btn_darkmode',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Dark Mode Button ( OFF | ON )', 'isak'),
        'section' => 'general_panel',
        'priority' => 9,
    ))
);


