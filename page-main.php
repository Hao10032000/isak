<?php 
/**
 * Template Name: Page Main
 * @package isak
 */
get_header(); 

$logo_site_black = themesflat_get_opt('site_logo');
$logo_site_white = themesflat_get_opt('site_logo_white');

// 1. Get Options
$sidebar_data = get_option('isak_sidebar_data');

// 2. Define Defaults (using Null Coalescing Operator)
$avatar_url = $sidebar_data['avatar'] ?? 'http://127.0.0.1:5500/isak/assets/images/avatar/avatar.png';
$badge_text = $sidebar_data['badge'] ?? 'Available for Work';
$title_text = $sidebar_data['title'] ?? 'Hey, I’m Isak';
$desc_text  = $sidebar_data['desc'] ?? 'I help startups grow with smart design and no-code development, based in Cupertino, CA.';

$btn_pri_text = $sidebar_data['btn_pri_text'] ?? 'Let’s talk';
$btn_pri_url  = $sidebar_data['btn_pri_url'] ?? '#';
$btn_sec_text = $sidebar_data['btn_sec_text'] ?? 'Download CV';
$btn_sec_url  = $sidebar_data['btn_sec_url'] ?? '#';

// 3. Map Social Keys to CSS Classes (Ensure these classes exist in your CSS)
$icon_map = [
    'facebook'  => 'icon-isak-facebook',
    'x'         => 'icon-isak-x',
    'instagram' => 'icon-isak-instagram',
    'whatsapp'  => 'icon-isak-send',
    'linkedin'  => 'icon-isak-linkin',
    'google'    => 'icon-isak-google-plus', // or icon-isak-gmail
    'tiktok'    => 'icon-isak-tiktok',
    'youtube'   => 'icon-isak-youtube',
    'pinterest' => 'icon-isak-pinterest',
    'github'    => 'icon-isak-github',
    'behance'   => 'icon-isak-behance',
    'dribbble'  => 'icon-isak-dribbble',
    'reddit'    => 'icon-isak-reddit',
    'medium'    => 'icon-isak-medium',
    'telegram'  => 'icon-isak-send',
    'discord'   => 'icon-isak-discord',
    'spotify'   => 'icon-isak-spotify',
    'snapchat'  => 'icon-isak-snapchat',
];
?>


    <!-- Menu Mobile -->
    <div class="action-open-mobile d-lg-none">
        <div class="tf-btn-icon style-2">
            <div class="btn-mobile-menu">
                <span></span>
            </div>
        </div>
        <div class="nav-mobile-list">
            <?php
            wp_nav_menu([
                'theme_location' => 'one-page',
                'container'      => false,
                'menu_class'     => 'nav-mobile-item',
                'walker'         => new Isak_Mobile_Menu_Walker(),
                'depth'          => 1, // no submenu
            ]);
            ?>
        </div>
    </div>
    <!-- /Menu Mobile -->



    <div class="overlay-pop"></div>
    <main id="wrapper">

        <!-- Time Local -->
        <div class="tf-header-wrap">
            <a href="index.html" class="logo-site d-lg-none">
                <img class="image-switch" data-light="<?php echo esc_url($logo_site_black); ?>" data-dark="<?php echo esc_url($logo_site_white); ?>" loading="lazy" width="40"
                    height="40" src="<?php echo esc_url($logo_site_black); ?>" alt="Image">
            </a>
            <div class="left">
                <div class="time-local text-body-3">
                    <p class="date"></p>
                    <p class="clock"></p>
                </div>

            </div>
        </div>
        <!-- /Time Local -->

        <!-- User Sidebar -->
        <div class="sidebar-user">
            <div class="wrap">
                <div class="user-image">
                    <div class="image">
                        <img loading="lazy" width="468" height="856" src="<?php echo esc_url($avatar_url); ?>" alt="<?php esc_attr_e('User Avatar', 'isak'); ?>">
                    </div>
                    <div class="meta-left d-none d-sm-block">
                        <div class="bg-item-svg">
                            <img class="image-switch"
                                data-dark="<?php echo esc_url(get_template_directory_uri() . '/images/item/vector-user_dark.svg'); ?>"
                                width="32"
                                height="227"
                                src="<?php echo esc_url(get_template_directory_uri() . '/images/item/vector-user.svg'); ?>"
                                alt="<?php esc_attr_e('Decoration', 'isak'); ?>">
                        </div>
                        <p class="avaiable-dot vertical text-body-3 text-black-72 fw-medium">
                            <span class="text-vertical"><?php echo esc_html($badge_text); ?></span>
                            <span class="dot"></span>
                        </p>
                    </div>
                </div>
                
                <div class="user-logo d-none d-lg-block">
                    <?php 
                    // Assuming these variables are defined in header or globally
                    $logo_b = isset($logo_site_black) ? $logo_site_black : ''; 
                    $logo_w = isset($logo_site_white) ? $logo_site_white : '';
                    ?>
                    <img class="image-switch" 
                        data-light="<?php echo esc_url($logo_b); ?>" 
                        data-dark="<?php echo esc_url($logo_w); ?>" 
                        loading="lazy"
                        width="40" height="40" 
                        src="<?php echo esc_url($logo_b); ?>" 
                        alt="<?php esc_attr_e('Site Logo', 'isak'); ?>">
                </div>

                <ul class="tf-social-icon-2 user-social d-grid">
                    <?php 
                    if (!empty($sidebar_data['social']) && is_array($sidebar_data['social'])) : 
                        foreach ($sidebar_data['social'] as $key => $url) :
                            if (!empty($url)) :
                                // Default to link icon if key not found in map
                                $icon_class = $icon_map[$key] ?? 'icon-isak-link'; 
                    ?>
                            <li>
                                <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="icon <?php echo esc_attr($icon_class); ?>"></i>
                                </a>
                            </li>
                    <?php 
                            endif; 
                        endforeach; 
                    endif; 
                    ?>
                </ul>

                <div class="user-info">
                    <p class="avaiable-dot text-body-3 fw-medium d-sm-none">
                        <span class="dot"></span>
                        <span><?php echo esc_html($badge_text); ?></span>
                    </p>
<?php 
// LẤY DỮ LIỆU TỪ DATABASE (Quan trọng nhất)
$options = get_option('isak_sidebar_data'); 

// 1. Gom các từ vào mảng
$words = [
    $options['word_1'] ?? '',
    $options['word_2'] ?? '',
    $options['word_3'] ?? ''
];

// 2. Lọc bỏ các ô trống
$active_words = array_filter($words);

// 3. Nếu trống hết thì hiện mặc định
if (empty($active_words)) {
    $active_words = ['Isak'];
}

$static_text = $options['static_text'] ?? 'Hey, I’m';
?>

<h5 class="greeting letter-space--2 text-white animationtext clip">
    <?php echo esc_html($static_text); ?> 
    
    <span class="cd-words-wrapper">
        <?php 
        $count = 0;
        foreach ($active_words as $word): 
            $visibility = ($count === 0) ? 'is-visible' : 'is-hidden';
        ?>
            <span class="item-text <?php echo $visibility; ?>">
                <?php echo esc_html($word); ?>
            </span>
        <?php 
            $count++;
        endforeach; 
        ?>
    </span>
</h5>
                    <p class="introduce text-white-56 letter-space--05 text-body-3">
                        <?php echo nl2br(esc_html($desc_text)); ?>
                    </p>

                    <div class="br-line"></div>
                    
                    <div class="action-group">
                        <a href="<?php echo esc_url($btn_pri_url); ?>" class="tf-btn-action">
                            <span class="ic-wrap">
                                <i class="icon icon-isak-arrow-right-top"></i>
                            </span>
                            <span class="text text-body-3 letter-space--05 fw-medium">
                                <?php echo esc_html($btn_pri_text); ?>
                            </span>
                            <span class="ic-wrap">
                                <i class="icon icon-isak-arrow-right-top"></i>
                            </span>
                        </a>

                        <a href="<?php echo esc_url($btn_sec_url); ?>" class="action-down">
                            <i class="icon icon-isak-download"></i>
                            <span class="text-body-3">
                                <?php echo esc_html($btn_sec_text); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /User Sidebar -->

            <!-- Tool Sidebar -->
    <div class="sidebar-tools pst-v1">
        <div class="nav-top">
            <div class="tf-btn-icon toggle-switch-mode">
                <i class="icon icon-isak-light"></i>
            </div>
        </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'one-page',
            'container'      => false,
            'menu_class'     => 'nav-list',
            'walker'         => new Isak_Mobile_Menu_Walker(),
            'depth'          => 1, 
        ]);
        ?>
        <div class="nav-bottom">
            <a href="#" class="tf-btn-icon go-top">
                <i class="icon icon-isak-arrow-top"></i>
            </a>
        </div>
    </div>
    <!-- /Tool Sidebar -->

        <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-xl-8 ms-auto">
                        <div class="wrap-container">

                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part( 'content', 'page' ); ?>
                            <?php endwhile; // end of the loop. ?>

                            <!-- Footer -->

                            <?php get_template_part( 'footer-2' ); ?>
                          
                            <!-- /Footer -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>