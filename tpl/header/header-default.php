<header id="header" class="header header-default <?php echo themesflat_get_opt_elementor('extra_classes_header'); ?>">
    <div class="inner-header">
        <div class="container tf-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-wrap clearfix">
                        <div class="header-ct-left">
                            <?php get_template_part( 'tpl/header/brand'); ?>
                        </div>
                        <div class="header-ct-center">
                            <div class="inner-center">
                                <?php get_template_part( 'tpl/header/navigator'); ?>
                            </div>
                        </div>
                            <div class="header-ct-right">

                                <?php if ( themesflat_get_opt('header_time') ) : ?>
                                    <div class="wrap-location">
                                        <?php echo date_i18n('D, M d H:i'); ?>
                                    </div>
                                <?php endif; ?>
                            
                            </div>
                        <div class="btn-menu">
                            <span class="line-1"></span>
                        </div><!-- //mobile menu button -->
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <div class="canvas-nav-wrap">
        <div class="overlay-canvas-nav">
            <div class="canvas-menu-close"><span></span></div>
        </div>
        <div class="inner-canvas-nav">
            <?php get_template_part( 'tpl/header/brand-mobile'); ?>
            <nav id="mainnav_canvas" class="mainnav_canvas" role="navigation">
                <?php
                    wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );
                ?>
            </nav><!-- #mainnav_canvas -->
        </div>
    </div><!-- /.canvas-nav-wrap -->

</header><!-- /.header -->
