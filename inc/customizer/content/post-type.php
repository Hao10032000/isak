<?php 

if (function_exists('themesflat_register_services_post_type')) {

    /* Services Archive 
    ===============================================*/ 
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'services', array(
        'label' => esc_html__('SERVICES ARCHIVE', 'isak'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 25
        ) )
    );

    // Services Slug
    $wp_customize->add_setting (
        'services_slug',
        array(
            'default' =>  themesflat_customize_default('services_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Services Slug', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 26
        )
    );  

    // Services Name
    $wp_customize->add_setting (
        'services_name',
        array(
            'default' =>  themesflat_customize_default('services_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Services Name', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 27
        )
    );

    $wp_customize->add_setting(
        'services_layout',
        array(
            'default'           => themesflat_customize_default('services_layout'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control( 
        'services_layout',
        array (
            'type'      => 'select',           
            'section'   => 'section_content_post_type',
            'priority'  => 28,
            'label'         => esc_html__('Sidebar Position', 'isak'),
            'choices'   => array (
                'sidebar-right'     => esc_html__( 'Sidebar Right','isak' ),
                'sidebar-left'      =>  esc_html__( 'Sidebar Left','isak' ),
                'fullwidth'         =>   esc_html__( 'Full Width','isak' ),
            ),
        )
    );

    $wp_customize->add_setting (
        'services_sidebar_list',
        array(
            'default'           => themesflat_customize_default('services_sidebar_list'),
            'sanitize_callback' => 'esc_html',
        )
    );
    $wp_customize->add_control( new themesflat_DropdownSidebars($wp_customize,
        'services_sidebar_list',
        array(
            'type'      => 'dropdown',           
            'section'   => 'section_content_post_type',
            'priority'  => 28,
            'label'         => esc_html__('List Sidebar', 'isak'),
            
        ))
    );

    // Number Posts therapists
    $wp_customize->add_setting (
        'services_number_post',
        array(
            'default' => themesflat_customize_default('services_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 28
        )
    );

    // Order By services
    $wp_customize->add_setting(
        'services_order_by',
        array(
            'default' => themesflat_customize_default('services_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 30,
            'choices' => array(
                'date'          => esc_html( 'Date', 'isak' ),
                'id'            => esc_html( 'Id', 'isak' ),
                'author'        => esc_html( 'Author', 'isak' ),
                'title'         => esc_html( 'Title', 'isak' ),
                'modified'      => esc_html( 'Modified', 'isak' ),
                'comment_count' => esc_html( 'Comment Count', 'isak' ),
                'menu_order'    => esc_html( 'Menu Order', 'isak' )
            )        
        )
    );

    // Order Direction services
    $wp_customize->add_setting(
        'services_order_direction',
        array(
            'default' => themesflat_customize_default('services_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 31,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'isak' ),
                'ASC'  => esc_html( 'Assending', 'isak' )
            )        
        )
    );

    // services Exclude Post
    $wp_customize->add_setting (
        'services_exclude',
        array(
            'default' =>  themesflat_customize_default('services_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 32
        )
    );


    /* Services Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'servicessingle', array(
        'label' => esc_html__('SERVICES SINGLE', 'isak'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 40
        ) )
    ); 


    // Customize Services Featured Title
    $wp_customize->add_setting (
        'services_featured_title',
        array(
            'default' => themesflat_customize_default('services_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize Services Featured Title', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 41
        )
    );

     // Show Post Navigator services
     $wp_customize->add_setting (
         'services_title_single',
         array (
             'sanitize_callback' => 'themesflat_sanitize_checkbox',
             'default' => themesflat_customize_default('services_title_single'),     
         )
     );
     $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
         'services_title_single',
         array(
             'type'      => 'checkbox',
             'label'     => esc_html__('Single Title ( OFF | ON )', 'isak'),
             'section'   => 'section_content_post_type',
             'priority'  => 41
         ))
     ); 

}

if (function_exists('themesflat_register_doctor_post_type')) {

    /* doctor Archive 
    ===============================================*/ 
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'doctor', array(
        'label' => esc_html__('DOCTOR ARCHIVE', 'isak'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 42
        ) )
    );

    // doctor Slug
    $wp_customize->add_setting (
        'doctor_slug',
        array(
            'default' =>  themesflat_customize_default('doctor_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'doctor_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Doctor Slug', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 43
        )
    );  

    // doctor Name
    $wp_customize->add_setting (
        'doctor_name',
        array(
            'default' =>  themesflat_customize_default('doctor_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'doctor_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Doctor Name', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 44
        )
    );


    // Number Posts therapists
    $wp_customize->add_setting (
        'doctor_number_post',
        array(
            'default' => themesflat_customize_default('doctor_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'doctor_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 45
        )
    );

    // Order By doctor
    $wp_customize->add_setting(
        'doctor_order_by',
        array(
            'default' => themesflat_customize_default('doctor_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'doctor_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 46,
            'choices' => array(
                'date'          => esc_html( 'Date', 'isak' ),
                'id'            => esc_html( 'Id', 'isak' ),
                'author'        => esc_html( 'Author', 'isak' ),
                'title'         => esc_html( 'Title', 'isak' ),
                'modified'      => esc_html( 'Modified', 'isak' ),
                'comment_count' => esc_html( 'Comment Count', 'isak' ),
                'menu_order'    => esc_html( 'Menu Order', 'isak' )
            )        
        )
    );

    // Order Direction doctor
    $wp_customize->add_setting(
        'doctor_order_direction',
        array(
            'default' => themesflat_customize_default('doctor_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'doctor_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 47,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'isak' ),
                'ASC'  => esc_html( 'Assending', 'isak' )
            )        
        )
    );

    // doctor Exclude Post
    $wp_customize->add_setting (
        'doctor_exclude',
        array(
            'default' =>  themesflat_customize_default('doctor_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'doctor_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 48
        )
    );


    /* doctor Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'doctorsingle', array(
        'label' => esc_html__('DOCTOR SINGLE', 'isak'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 49
        ) )
    ); 


    $wp_customize->add_setting (
        'doctor_featured_title',
        array(
            'default' => themesflat_customize_default('doctor_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'doctor_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize Doctor Featured Title', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 50
        )
    );
}

if (function_exists('themesflat_register_portfolio_post_type')) {

    /* portfolio Archive 
    ===============================================*/ 
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'portfolio', array(
        'label' => esc_html__('PORTFOLIO ARCHIVE', 'isak'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 51
        ) )
    );

    // portfolio Slug
    $wp_customize->add_setting (
        'portfolio_slug',
        array(
            'default' =>  themesflat_customize_default('portfolio_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'portfolio_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Portfolio Slug', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 52
        )
    );  

    // portfolio Name
    $wp_customize->add_setting (
        'portfolio_name',
        array(
            'default' =>  themesflat_customize_default('portfolio_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'portfolio_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Portfolio Name', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 53
        )
    );

    // Number Posts therapists
    $wp_customize->add_setting (
        'portfolio_number_post',
        array(
            'default' => themesflat_customize_default('portfolio_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'portfolio_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 56
        )
    );

    // Order By portfolio
    $wp_customize->add_setting(
        'portfolio_order_by',
        array(
            'default' => themesflat_customize_default('portfolio_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'portfolio_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 57,
            'choices' => array(
                'date'          => esc_html( 'Date', 'isak' ),
                'id'            => esc_html( 'Id', 'isak' ),
                'author'        => esc_html( 'Author', 'isak' ),
                'title'         => esc_html( 'Title', 'isak' ),
                'modified'      => esc_html( 'Modified', 'isak' ),
                'comment_count' => esc_html( 'Comment Count', 'isak' ),
                'menu_order'    => esc_html( 'Menu Order', 'isak' )
            )        
        )
    );

    // Order Direction portfolio
    $wp_customize->add_setting(
        'portfolio_order_direction',
        array(
            'default' => themesflat_customize_default('portfolio_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'portfolio_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 58,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'isak' ),
                'ASC'  => esc_html( 'Assending', 'isak' )
            )        
        )
    );

    // portfolio Exclude Post
    $wp_customize->add_setting (
        'portfolio_exclude',
        array(
            'default' =>  themesflat_customize_default('portfolio_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'portfolio_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 59
        )
    );


    /* portfolio Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'portfoliosingle', array(
        'label' => esc_html__('portfolio SINGLE', 'isak'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 60
        ) )
    ); 


    // Customize portfolio Featured Title
    $wp_customize->add_setting (
        'portfolio_featured_title',
        array(
            'default' => themesflat_customize_default('portfolio_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'portfolio_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize portfolio Featured Title', 'isak'),
            'section'   => 'section_content_post_type',
            'priority'  => 61
        )
    );

}