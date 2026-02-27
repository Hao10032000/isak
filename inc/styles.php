<?php
/**
 * @package isak
 */
//Output all custom styles for this theme

function themesflat_custom_styles( $custom ) {
	$custom = '';


	    $white_color = themesflat_get_opt( 'white_color' );
    	if ( $white_color !='' ) {
    		$custom .= ' :root { --white:' . esc_attr($white_color) . " !important }"."\n";
    	}	

			    $black_color = themesflat_get_opt( 'black_color' );
    	if ( $black_color !='' ) {
    		$custom .= ' :root { --black:' . esc_attr($black_color) . " !important }"."\n";
    	}	

			    $primary_color = themesflat_get_opt( 'primary_color' );
    	if ( $primary_color !='' ) {
    		$custom .= ' :root { --primary:' . esc_attr($primary_color) . " !important }"."\n";
    	}	

			    $surface_color = themesflat_get_opt( 'surface_color' );
    	if ( $surface_color !='' ) {
    		$custom .= ' :root { --surface:' . esc_attr($surface_color) . " !important }"."\n";
    	}	


	$custom = apply_filters('themesflat/render/style',$custom);
	wp_add_inline_style( 'themesflat-inline-css', $custom );

}

add_action( 'wp_enqueue_scripts', 'themesflat_custom_styles' );