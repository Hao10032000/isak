<?php 
$logo_site = themesflat_get_opt('site_logo'); 
?>
<div class="modal-menu-left">
	<div class="modal-menu__backdrop"></div>
	<div class="modal-menu__body">
		<button class="modal-menu__close" type="button">
		    <i class="icon-isak-close"></i>
		</button>
		<div class="modal-menu__panel">
			<div class="modal-menu__panel-header">
		        <div class="modal-menu__panel-title">
		        	<div class="header-modal-menu-left-btn">
		            </div>
		        </div>
		    </div>
		    <div class="modal-menu__panel-body">
				<div class="nav-wrap-secondary">				    
			        <?php dynamic_sidebar('aside-toggler-sidebar'); ?>				    
				</div><!-- /.nav-wrap --> 
			</div>
		</div>
	</div>
</div>  

<div class="submenu top-search widget_search">
    <div class="search-overlay"></div>
    <div class="search-content">
        <div class="top-inner-search">
            <?php get_template_part( 'tpl/header/brand-mobile'); ?>
            <div class="button-close-search">
                <i class="icon-isak-close"></i>
            </div>
        </div>
        <?php get_search_form(); ?>
    </div>
</div>