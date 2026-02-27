<?php
$logo_site = themesflat_get_opt('site_logo');
if (!empty(themesflat_get_opt_elementor('site_logo'))) {
    if (themesflat_get_opt_elementor('site_logo')['url'] != '') {
        $logo_site = themesflat_get_opt_elementor('site_logo')['url'];
    }else {
        $logo_site = themesflat_get_opt('site_logo');
    }    
}
$site_logo_white = themesflat_get_opt('site_logo_white');
if (!empty(themesflat_get_opt_elementor('site_logo_white'))) {
    if (themesflat_get_opt_elementor('site_logo_white')['url'] != '') {
        $site_logo_white = themesflat_get_opt_elementor('site_logo_white')['url'];
    }else {
        $site_logo_white = themesflat_get_opt('site_logo_white');
    }    
}
?>

    <div id="logo" class="logo" >                  
        <a href="<?php echo esc_url( home_url('/') ); ?>"  title="<?php bloginfo('name'); ?>">
                <img class="image-switch" data-light="<?php echo esc_url($logo_site); ?>" data-dark="<?php echo esc_url($site_logo_white); ?>" loading="lazy" width="40"
                    height="40" src="<?php echo esc_url($logo_site); ?>" alt="Image">
        </a>
    </div>       