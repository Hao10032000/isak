<?php 

// ADD SECTION LOGO
$wp_customize->add_section('section_logo',array(
    'title'         => 'Logo',
    'priority'      => 2,
    'panel'         => 'header_panel',
));
require THEMESFLAT_DIR . "inc/customizer/header/logo.php";


// ADD SECTION HEADER OPTION
$wp_customize->add_section('section_options',array(
    'title'         => 'Header Options',
    'priority'      => 4,
    'panel'         => 'header_panel',
)); 
require THEMESFLAT_DIR . "inc/customizer/header/header-options.php";