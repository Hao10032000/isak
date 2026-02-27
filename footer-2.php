                           <div id="footer" class="tf-footer flat-spacing">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                    <div class="block-quote  fadeUp no-div" >
                                    <h5 class="quote-text font-3 fw-normal text-black-72">
                                        <?php echo wp_kses_post(themesflat_get_opt('footer_cover_letter')); ?>
                                    </h5>
                                    <p class="quote-author font-3 text-black-56 h6 text-end ">
                                        <?php echo wp_kses_post(themesflat_get_opt('footer_cover_letter_author')); ?>
                                    </p>
                                </div>
                                <div class="br-line"></div>
                                <div class="foot-inner">
                                    <div class="isak  fadeUp no-div" >
                                            <?php
                                                echo file_get_contents( themesflat_get_opt('footer_signature_1') );
                                            ?>
                                    </div>
                                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="f-logo  fadeZoom" >
                                        <div class="logo">
                                            <img class="image-switch" data-light="<?php echo esc_url(themesflat_get_opt('site_logo_white')); ?>" data-dark="<?php echo esc_url(themesflat_get_opt('site_logo_white')); ?>" loading="lazy" width="32" height="32" src="<?php echo esc_url(themesflat_get_opt('site_logo')); ?>" alt="Image">
                                        </div>
                                    </a>
                                </div>
                                <div class="foot-bottom">
                                    <p class="text-nocopy text-black-56  fadeUp no-div" >
                                        <?php echo wp_kses_post(themesflat_get_opt('footer_copyright')); ?>
                                    </p>
                                    <div class="isak  fadeUp no-div" >
                                            <?php
                                                echo file_get_contents( themesflat_get_opt('footer_signature_2') );
                                            ?>
                                    </div>
                                </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
