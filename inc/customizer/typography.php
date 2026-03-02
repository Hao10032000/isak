<?php 
// ADD SECTION BODY
$wp_customize->add_section('section_typo_body',array(
    'title'         => 'Body',
    'priority'      => 1,
    'panel'         => 'typography_panel',
));
require THEMESFLAT_DIR . "inc/customizer/typography/body.php";

// ADD SECTION NAVIGATION
$wp_customize->add_section('section_typo_navigation',array(
    'title'         => 'Navigation',
    'priority'      => 3,
    'panel'         => 'typography_panel',
));
require THEMESFLAT_DIR . "inc/customizer/typography/navigation.php";


// ADD SECTION BOTTOM
$wp_customize->add_section('section_typo_heading',array(
    'title'         => 'Heading H1 - H6',
    'priority'      => 4,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "inc/customizer/typography/heading.php";
