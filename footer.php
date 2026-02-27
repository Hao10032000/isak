<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package isak
 */
?>
</div><!-- #content -->
</div><!-- #main-content -->

<div id="footer" class="tf-footer flat-spacing">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="block-quote  fadeUp no-div">
                    <h5 class="quote-text font-3 fw-normal text-black-72">
                        <?php echo wp_kses_post(themesflat_get_opt('footer_cover_letter')); ?>
                    </h5>
                    <p class="quote-author font-3 text-black-56 h6 text-end ">
                        <?php echo wp_kses_post(themesflat_get_opt('footer_cover_letter_author')); ?>
                    </p>
                </div>
                <div class="br-line"></div>
                <div class="foot-inner">
                    <div class="isak  fadeUp no-div">
                        <?php
                                                echo file_get_contents( themesflat_get_opt('footer_signature_1') );
                                            ?>
                    </div>
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="f-logo  fadeZoom">
                        <div class="logo">
                            <img class="image-switch"
                                data-light="<?php echo esc_url(themesflat_get_opt('site_logo_white')); ?>"
                                data-dark="<?php echo esc_url(themesflat_get_opt('site_logo_white')); ?>" loading="lazy"
                                width="32" height="32" src="<?php echo esc_url(themesflat_get_opt('site_logo')); ?>"
                                alt="Image">
                        </div>
                    </a>
                </div>
                <div class="foot-bottom">
                    <p class="text-nocopy text-black-56  fadeUp no-div">
                        <?php echo wp_kses_post(themesflat_get_opt('footer_copyright')); ?>
                    </p>
                    <div class="isak  fadeUp no-div">
                        <?php
                                                echo file_get_contents( themesflat_get_opt('footer_signature_2') );
                                            ?>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>

</div><!-- /#boxed -->


<?php 
    $style_background = themesflat_get_opt('style_background');
    if (themesflat_get_opt_elementor('style_background') != '') {
        $style_background = themesflat_get_opt_elementor('style_background');
    }

    $video_option = themesflat_get_opt('video_background');
    if (themesflat_get_opt_elementor('video_background') != '') {
        $video_option = themesflat_get_opt_elementor('video_background');
    }

    if ($style_background === 'video'): 
        
        // Tự động lấy đường dẫn đến thư mục theme hiện tại
        $base_url = get_template_directory_uri() . '/images/video/';

        $video_data = '';
        // Kiểm tra và lấy tên file tương ứng (video1.mp4, video2.mp4,...)
        if (preg_match('/video-(\d+)/', $video_option, $matches)) {
            $video_data = $base_url . 'video' . $matches[1] . '.mp4';
        }

        if ($video_data !== ''):
    ?>
        <video class="body-overlay" muted autoplay loop playsinline>
            <source src="<?php echo esc_url($video_data); ?>" type="video/mp4">
        </video>
    <?php 
        endif; 
    endif; 
?>

<?php wp_footer(); ?>
</body>

</html>