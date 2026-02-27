<?php 
 // ADD SECTION GENERAL
$wp_customize->add_section('color_general',array(
    'title'         => 'General',
    'priority'      => 1,
    'panel'         => 'color_panel',
));
require THEMESFLAT_DIR . "inc/customizer/color/general.php";