
<div class="nav-wrap">
    <nav id="mainnav" class="mainnav" role="navigation">
                        <?php if ( themesflat_get_opt_elementor('onepage_menu') == 1 ) :?>
                    <?php
                        wp_nav_menu( array( 'theme_location' => 'onepage', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );
                    ?>
                <?php else: ?>
                    <?php
                        wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );
                    ?>
                <?php endif; ?>
    </nav><!-- #site-navigation -->  
</div><!-- /.nav-wrap -->   