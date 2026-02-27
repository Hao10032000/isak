<?php 
$wp_customize->add_setting(
    'sidebar_layout',
    array(
        'default'           => themesflat_customize_default('sidebar_layout'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    'sidebar_layout',
    array (
        'type'      => 'select',           
        'section'   => 'section_content_blog_archive',
        'priority'  => 1,
        'label'         => esc_html__('Sidebar Position', 'isak'),
        'default'           => 'sidebar-right',
        'choices'   => array (
            'fullwidth'         =>   esc_html__( 'Full Width','isak' ),
            'sidebar-right'     => esc_html__( 'Sidebar Right','isak' ),
            'sidebar-left'      =>  esc_html__( 'Sidebar Left','isak' ),
        ),
    )
);


$wp_customize->add_setting (
    'blog_sidebar_list',
    array(
        'default'           => themesflat_customize_default('blog_sidebar_list'),
        'sanitize_callback' => 'esc_html',
    )
);
$wp_customize->add_control( new themesflat_DropdownSidebars($wp_customize,
    'blog_sidebar_list',
    array(
        'type'      => 'dropdown',           
        'section'   => 'section_content_blog_archive',
        'priority'  => 4,
        'label'         => esc_html__('List Sidebar', 'isak'),
        
    ))
);

// Entry Content Elements
$wp_customize->add_setting (
    'post_content_elements',
    array (
        'sanitize_callback' => 'themesflat_sanitize_text',
        'default' => themesflat_customize_default('post_content_elements'),     
    )
);
$wp_customize->add_control( new themesflat_Control_Drag_And_Drop( $wp_customize,
    'post_content_elements',
    array(
        'type'      => 'draganddrop-controls',
        'label'     => esc_html__('Post Content Elements', 'isak'),
        'description' => esc_html__( 'Drag and drop elements to re-order.', 'isak' ),
        'section'   => 'section_content_blog_archive',
        'priority'  => 5,
        'choices' => array(
            'meta'            => esc_html__( 'Category', 'isak' ),
            'title'           => esc_html__( 'Title', 'isak' ),
            'excerpt_content' => esc_html__( 'Excerpt', 'isak' ),
            'readmore'        => esc_html__( 'Read More', 'isak' ),
        ),        
    ))
); 

// Excerpt
$wp_customize->add_setting(
    'blog_archive_post_excepts_length',
    array(
        'default'   =>  themesflat_customize_default('blog_archive_post_excepts_length'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( new themesflat_Slide_Control( $wp_customize,
    'blog_archive_post_excepts_length',
        array(
            'type'      =>  'slide-control',
            'section'   =>  'section_content_blog_archive',
            'label'     =>  'Post Excepts Length',
            'priority'  => 6,
            'input_attrs' => array(
                'min' => 0,
                'max' => 500,
                'step' => 1,
            ),
        )

    )
); 

// Read More Text
$wp_customize->add_setting (
    'blog_archive_readmore_text',
    array(
        'default' => themesflat_customize_default('blog_archive_readmore_text'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'blog_archive_readmore_text',
    array(
        'type'      => 'text',
        'label'     => esc_html__('Read More Text', 'isak'),
        'section'   => 'section_content_blog_archive',
        'priority'  => 7
    )
);

// Pagination
$wp_customize->add_setting(
    'blog_archive_pagination_style',
    array(
        'default'           => themesflat_customize_default('blog_archive_pagination_style'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( 
    'blog_archive_pagination_style',
    array(
        'type'      => 'select',           
        'section'   => 'section_content_blog_archive',
        'priority'  => 9,
        'label'         => esc_html__('Pagination Style', 'isak'),
        'choices'   => array(
            'numeric'         =>  esc_html__('Numeric','isak'),
            'pager-numeric'         =>  esc_html__('Page & Numeric','isak'),
            'loadmore'         =>  esc_html__('Load More','isak'),
        ),
    )
);