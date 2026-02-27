<?php
/**
 * @package isak
 */
?>

<div class="item">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
        <div class="main-post entry-border">
            <?php get_template_part( 'tpl/feature-post'); ?>
            
            <div class="content-post">

                <?php 
                $content_elements = themesflat_layout_draganddrop(themesflat_get_opt( 'post_content_elements' ));
                
                foreach ( $content_elements as $content_element ) :
                    
                    if ( 'meta' == $content_element ) { 
                    ?>
                        <div class="meta-box">
                            <?php the_category( ', ' ); ?>
                        </div>

                    <?php 
                    } elseif ( 'title' == $content_element ) { 
                    ?>
                        <div class="wrap-entry-title">                          
                            <?php
                            if ( is_singular('post') ) :                        
                                the_title( '<h2 class="entry-title">', '</h2>' );
                            else :
                                the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                            endif;
                            ?>                              
                        </div><?php 
                    } elseif ( 'excerpt_content' == $content_element ) {
                        if ( is_single() ) {
                            echo '<div class="post-content clearfix">';    
                                the_content();
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'isak' ),
                                    'after'  => '</div>',
                                ) );
                            echo '</div>';

                        } else {
                            echo '<div class="post-content post-excerpt clearfix">';
                                if( strpos( get_the_content(), 'more-link' ) === false ) {
                                    add_filter( 'excerpt_more', 'themesflat_excerpt_not_more' );
                                    the_excerpt();     
                                } else {
                                    add_filter( 'the_content_more_link', 'themesflat_excerpt_not_more' );
                                    the_content();
                                }
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'isak' ),
                                    'after'  => '</div>',
                                ) );
                            echo '</div>';
                        }

                    } elseif ( 'readmore' == $content_element ) {
                        echo '<a class="tf-btn" href="'.get_the_permalink().'" rel="nofollow">'.themesflat_get_opt( 'blog_archive_readmore_text').'</a>';
                    }
                    
                endforeach;
                ?>
                
            </div></div></article></div>