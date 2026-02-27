<?php
/**
 * @package isak
 */
global $themesflat_thumbnail;
$themesflat_thumbnail = 'themesflat-blog';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post blog-single' ); ?>>
    <!-- begin feature-post single  -->
    <div class="main-post">
        <div class="entry-content clearfix">

        <?php if ( is_singular( 'post' ) ) : ?>
    <div class="wrap-features-post-single">
        <?php get_template_part( 'tpl/feature-post-single' ); ?>
        <div class="post-date-item">
            <?php
                $archive_year  = get_the_time( 'Y' );
                $archive_month = get_the_time( 'm' );
                $archive_day   = get_the_time( 'd' );
            ?>
            <a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day ); ?>">
                <?php echo get_the_date( 'd' ); ?> <span><?php echo get_the_date( 'M' ); ?></span>
            </a>
        </div>
    </div>
<?php endif; ?>


            <?php the_content(); ?>
            <?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'isak' ),
				'after'  => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
				) );
				?>
        </div><!-- .entry-content -->
    </div><!-- /.main-post -->
</article><!-- #post-## -->
<?php if( themesflat_get_opt('show_entry_footer_content') == 1 ): ?>
<?php themesflat_entry_footer(); ?>
<?php endif; ?>