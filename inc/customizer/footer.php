<?php 
// ADD SECTION FOOTER
$wp_customize->add_section('section_footer',array(
    'title'         => 'Footer',
    'priority'      => 4,
    'panel'         => 'footer_panel',
));
require THEMESFLAT_DIR . "inc/customizer/footer/footer.php";