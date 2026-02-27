<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package isak
 */


/**
 * Prints HTML with meta information for the current post-date/time, post categories and author.
 */


if ( ! function_exists( 'themesflat_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function themesflat_entry_footer() {
	// Hide category and tag text for pages.
	$tags_links = '';
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( ' ', ' ' );
		if ( $tags_list && is_single() ) {
			$tags_links = sprintf( '<div class="tags-links"><h5>' . esc_html__( 'Popular Tags ', 'isak' ) . '</h5>' . esc_html__( ' %1$s', 'isak' ) . '</div>', $tags_list  );

		}			
	}

	?>
<div class="entry-footer">
    <?php 
			printf($tags_links); 
			themesflat_social_single();
		?>
</div>
<?php

}
endif;

if ( ! function_exists( 'themesflat_post_navigation' ) ) :
function themesflat_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
<nav class="navigation posts-navigation" role="navigation">
    <h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'isak' ); ?></h2>
    <ul class="nav-links">
        <?php
			if ( is_attachment() ) :

				$prevPost = get_adjacent_post( false, '', true);
				if( is_object( $prevPost ) ){
					$prev_title = get_the_title($prevPost->ID);
				}
				$prev = esc_html__( 'Published In', 'isak' );
				$date = get_the_date();
				echo '<li class="post-navigation previous-post">';
					echo '<div class="content">';
						previous_post_link('<div class="prev-button">%link</div>', $date); 
						previous_post_link('<div class="title-post">%link</div>', $prev_title); 
					echo '</div>';
				echo '</li>';
			else :

				$prevPost = get_adjacent_post( false, '', true);
				if( is_object( $prevPost ) ){
					$prev_title = get_the_title($prevPost->ID);
					$prev = esc_html__( '', 'isak' );
					$date = get_the_date();

					echo '<li class="post-navigation previous-post">';
						echo '<div class="content">';
							previous_post_link('<div class="post-button prev-button"><i class="icon-isak-chevron-left"></i>%link</div>', $prev); 
							previous_post_link('<div class="title-post">%link</div>', $prev_title); 
						echo '</div>';
					echo '</li>';
				}

				$nextPost = get_adjacent_post( false, '', false);
				if( is_object( $nextPost ) ){
					$next_title = get_the_title($nextPost->ID);
					$next = esc_html__( '', 'isak' );
					$date = get_the_date();
					echo '<li class="post-navigation next-post">';
						echo '<div class="content">';
						    next_post_link('<div class="post-button next-button"><i class="icon-isak-chevron-right"></i>%link</div>', $next); 
							next_post_link('<div class="title-post">%link</div>', $next_title); 
						echo '</div>';
					echo '</li>';
				}
				
			endif;
			?>
    </ul><!-- .nav-links -->
</nav><!-- .navigation -->
<?php
}
endif;