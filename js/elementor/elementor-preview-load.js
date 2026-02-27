;(function($) {
    "use strict";

    jQuery(document).ready(function(){
        //Header
        elementor.settings.page.addChangeCallback( 'style_header', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'site_logo', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'site_logo_sticky', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_absolute', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_sticky', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_wishlist_icon', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'style_blog_single', handleReloadPreview );

         elementor.settings.page.addChangeCallback( 'style_background', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'video_background', handleReloadPreview );
        //Page
        elementor.settings.page.addChangeCallback( 'sidebar_layout', handleReloadPreview );
        
        //Footer
        elementor.settings.page.addChangeCallback( 'show_footer_info', handleReloadPreview );
        // Services
        elementor.settings.page.addChangeCallback( 'services_single_style', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'services_layout', handleReloadPreview );
    });

    function handleReloadPreview ( newValue ) {
        elementor.saver.saveEditor({
            status: elementor.settings.page.model.get('post_status'),
            onSuccess: () => {
                elementor.reloadPreview();

                elementor.once("preview:loaded", function() {
                    elementor.getPanelView().setPage("page_settings");
                });
            }
        })
    }

})(jQuery);