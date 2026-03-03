<?php
/**
 * @package zeng
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

		//GROUP FONT
		$font = themesflat_get_json('typography_body');

		$font_style = themesflat_font_style($font['style']);

		/*Typography Body*/
			$body_fonts = $font['family'];
			$body_line_height = $font['line_height'];
			$body_font_weight = $font_style[0];
			$body_font_style = $font_style[1];
			$body_size = $font['size'];
			$body_letter_spacing = $font['letter_spacing'];
		
			// font family
			if ( $body_fonts !='' ) {
				$custom .= "body,button,input,select,textarea, p { font-family:" . $body_fonts . ";}"."\n";
			}

			// font weight
			if ( $body_font_weight !='' ) {
				$custom .= "body,button,input,select,textarea, p { font-weight:" . $body_font_weight . ";}"."\n";
			}
			// font style
			if ( isset( $body_font_style ) ) {
		        $custom .= "body,button,input,select,textarea, p { font-style:" . $body_font_style . "; }"."\n";        
			}
		    // font size
		    if ( $body_size !=''  ) {
		        $custom .= "body,button,input,select,textarea, p { font-size:" . intval( $body_size ) . "px; }"."\n";    
		    }
		    // line height
		    if ( $body_line_height != '' ) {
		        $custom .= "body,button,input,select,textarea, p { line-height:" . $body_line_height . ";}"."\n";    
		    }
		    // letter spacing
		    if ( $body_letter_spacing != '' ) {
		        $custom .= "body,button,input,select,textarea, p { letter-spacing:" . $body_letter_spacing . ";}"."\n";    
		    }

			/*Typography Headings*/
			$headings_fonts_ = themesflat_get_json('typography_headings');
			$headings_fonts_family = $headings_fonts_['family'];
			$headings_style = themesflat_font_style( $headings_fonts_['style'] );
			$headings_font_weight = $headings_style[0];
			$headings_font_style = $headings_style[1];
			$headings_line_height = $headings_fonts_['line_height'];
			$headings_letter_spacing = $headings_fonts_['letter_spacing'];
	    	    	
			// font family
			if ( $headings_fonts_family !='' ) {
				$custom .= "h1,h2,h3,h4,h5,h6 { font-family:" . $headings_fonts_family . ";}"."\n";

			}
			//font weight
			if ( $headings_font_weight !='' ) {
				$custom .= "h1,h2,h3,h4,h5,h6 { font-weight:" . $headings_font_weight . ";}"."\n";
			}
			//line height
			if ( $headings_line_height !='' ) {
				$custom .= "h1,h2,h3,h4,h5,h6 { line-height:" . $headings_line_height . ";}"."\n";
			}
			// letter spacing
			if ( $headings_letter_spacing !='' ) {
				$custom .= "h1,h2,h3,h4,h5,h6 { letter-spacing:" . $headings_letter_spacing . ";}"."\n";
			}
			// font style
			if ( isset( $headings_font_style )) {
		        $custom .= "h1,h2,h3,h4,h5,h6  { font-style:" . $headings_font_style . "; }"."\n";
			}

			// H1 font size
			if ( $h1_size = themesflat_get_opt( 'h1_size' ) ) {
				$custom .= "h1 { font-size:" . intval($h1_size) . "px; }"."\n";
			}
		    // H2 font size
		    if ( $h2_size = themesflat_get_opt( 'h2_size' ) ) {
		        $custom .= "h2 { font-size:" . intval($h2_size) . "px; }"."\n";
		    }
		    // H3 font size
		    if ( $h3_size = themesflat_get_opt( 'h3_size' ) ) {
		        $custom .= "h3 { font-size:" . intval($h3_size) . "px; }"."\n";
		    }
		    // H4 font size
		    if ( $h4_size = themesflat_get_opt( 'h4_size' ) ) {
		        $custom .= "h4 { font-size:" . intval($h4_size) . "px; }"."\n";
		    }
		    // H5 font size
		    if ( $h5_size = themesflat_get_opt( 'h5_size' ) ) {
		        $custom .= "h5 { font-size:" . intval($h5_size) . "px; }"."\n";
		    }
		    // H6 font size
		    if ( $h6_size = themesflat_get_opt( 'h6_size' ) ) {
		        $custom .= "h6 { font-size:" . intval($h6_size) . "px; }"."\n";
		    }

			/*Typography Menu*/	
			$menu_fonts_ = themesflat_get_json('typography_menu');
			$menu_fonts_family = $menu_fonts_['family'];
			$menu_fonts_size = $menu_fonts_['size'];
			$menu_line_height = $menu_fonts_['line_height'];
			$menu_letter_spacing = $menu_fonts_['letter_spacing'];
			$menu_style = themesflat_font_style( $menu_fonts_['style'] );
			$menu_font_weight = $menu_style[0];
			$menu_font_style = $menu_style[1];
				
			// font family
			if ( $menu_fonts_family != '') {
				$custom .= "#mainnav > ul > li > a , .nav-menu .nav_link { font-family:" . $menu_fonts_family . ";}"."\n";
			}
			// font weight
			if ( $menu_font_weight != '' ) {
				$custom .= "#mainnav > ul > li > a, .nav-menu .nav_link { font-weight:" . $menu_font_weight . ";}"."\n";
			}
			// font style
			if ( isset( $menu_font_style )) {
		        $custom .= "#mainnav > ul > li > a, .nav-menu .nav_link  { font-style:" . $menu_font_style . "; }"."\n";   
			}
		    // font size
		    if ( $menu_fonts_size != '' ) {
		        $custom .= "#mainnav ul li a, .nav-menu .nav_link { font-size:" . intval($menu_fonts_size) . "px;}"."\n";
		    }
		    // line height
		    if ( $menu_line_height != '' ) {
		        $custom .= "#mainnav > ul > li > a, .nav-menu .nav_link { line-height:" . $menu_line_height . ";}"."\n";
		    }
		    // letter spacing
		    if ( $menu_letter_spacing != '' ) {
		        $custom .= "#mainnav > ul > li > a, .nav-menu .nav_link { letter-spacing:" . $menu_letter_spacing . ";}"."\n";
		    }

		/*Typography Sub menu*/
			$sub_menu_fonts_ = themesflat_get_json('typography_sub_menu');
			$sub_menu_fonts_family = $sub_menu_fonts_['family'];
			$sub_menu_fonts_size = $sub_menu_fonts_['size'];
			$sub_menu_line_height = $sub_menu_fonts_['line_height'];
			$sub_menu_letter_spacing = $sub_menu_fonts_['letter_spacing'];
			$sub_menu_style = themesflat_font_style( $sub_menu_fonts_['style'] );
			$sub_menu_font_weight = $sub_menu_style[0];
			$sub_menu_font_style = $sub_menu_style[1];
		
			// font family
			if ( $sub_menu_fonts_family != '') {
				$custom .= ".sub-menu .nav_link { font-family:" . $sub_menu_fonts_family . " !important;}"."\n";
			}
			// font weight
			if ( $sub_menu_font_weight != '' ) {
				$custom .= ".sub-menu .nav_link { font-weight:" . $sub_menu_font_weight . " !important;}"."\n";
			}
			// font style
			if ( isset( $sub_menu_font_style )) {
		        $custom .= ".sub-menu .nav_link  { font-style:" . $sub_menu_font_style . " !important; }"."\n";   
			}
		    // font size
		    if ( $sub_menu_fonts_size != '' ) {
		        $custom .= ".sub-menu .nav_link { font-size:" . intval($sub_menu_fonts_size) . "px !important;}"."\n";
		    }
		    // line height
		    if ( $sub_menu_line_height != '' ) {
		        $custom .= ".sub-menu .nav_link { line-height:" . $sub_menu_line_height . " !important;}"."\n";
		    } 
		    // letter spacing
		    if ( $sub_menu_letter_spacing != '' ) {
		        $custom .= ".sub-menu .nav_link { letter-spacing:" . $sub_menu_letter_spacing . " !important;}"."\n";
		    } 

	//GROUP LAYOUT
		$content_controls = themesflat_decode(themesflat_get_opt('content_controls'));
	    themesflat_render_box_position("#themesflat-content",$content_controls);

	    $logo_width = themesflat_get_opt( 'logo_width');
		if ( $logo_width !='' ) {
			$custom .= "header .site-logo img { max-width:" . esc_attr($logo_width) . "px;height: auto;}"."\n";
		}

		$menu_distance_between = themesflat_get_opt( 'menu_distance_between');
		if ( $menu_distance_between !='' ) {
			$custom .= "#mainnav > ul > li { margin-left:" . esc_attr($menu_distance_between) . "px; margin-right:". esc_attr($menu_distance_between) ."px;}"."\n";
		}

	//GROUP FOOTER
		$footer_controls = themesflat_decode(themesflat_get_opt('footer_controls'));
	    themesflat_render_box_position("#footer",$footer_controls);

    //GROUP PAGE TITLE
		$page_title_controls = themesflat_decode(themesflat_get_opt('page_title_controls'));
	    themesflat_render_box_position(".page-title.style-default",$page_title_controls);


    	if ( themesflat_get_opt('primary_color') !='' || themesflat_get_opt('body_text_color') !='' || themesflat_get_opt('header1_background') !=''  || themesflat_get_opt('header2_background') !='') {

			// Root Primary Color
			$custom .= ' :root { --Primary:' . esc_attr(themesflat_get_opt('primary_color')) . " }"."\n";
			$custom .= ' :root { --body-text:' . esc_attr(themesflat_get_opt('body_text_color')) . " }"."\n";

		} 	

	   
	$custom = apply_filters('themesflat/render/style',$custom);
	wp_add_inline_style( 'themesflat-inline-css', $custom );

}

add_action( 'wp_enqueue_scripts', 'themesflat_custom_styles' );