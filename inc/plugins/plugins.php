<?php
// Register action to declare required plugins
add_action('tgmpa_register', 'themesflat_recommend_plugin');
function themesflat_recommend_plugin() {
    
    $plugins = array(
        array(
            'name' => esc_html__('Elementor', 'isak'),
            'slug' => 'elementor',
            'required' => true
        ),
        array(
            'name' => esc_html__('ThemesFlat Core', 'isak'),
            'slug' => 'plugin-core',
            'source' => THEMESFLAT_DIR . 'inc/plugins/plugin-core.zip',
            'required' => true
        ),
        array(
            'name' => esc_html__('Contact Form 7', 'isak'),
            'slug' => 'contact-form-7',
            'required' => false
        ),    
        array(
            'name' => esc_html__('Mailchimp', 'isak'),
            'slug' => 'mailchimp-for-wp',
            'required' => false
        ),       
        array(
            'name' => esc_html__('Themesflat Addons For Elementor', 'isak'),
            'slug' => 'themesflat-addons-for-elementor',
            'required' => true
        ), 
        array(
            'name' => esc_html__('One Click Demo Import', 'isak'),
            'slug' => 'one-click-demo-import',
            'required' => false
        )   
    );
    
    tgmpa($plugins);
}

