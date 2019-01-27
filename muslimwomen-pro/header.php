<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="мусульманка, ассоциация, украина, всеукраинская ассоциация мусульманок, ислам, религия, добро, истина">

    <title><?php wp_title('|'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- loader -->
<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <a href="#" class="intro-banner-vdo-play-btn pinkBg" target="_blank">
                    <i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
                    <span class="ripple pinkBg"></span>
                    <span class="ripple pinkBg"></span>
                    <span class="ripple pinkBg"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /loader -->


<div class="container-fluid">
    <div class="row">
        <!-- меню -->
        <?php get_sidebar() ?>
        <!-- конец меню -->

        <div class="col-md-9 ml-sm-auto col-lg-10 pl-0 pr-0">
            <!-- шапка -->
            <div class="header">
                <div class="container-fluid d-flex flex-row flex-wrap align-items-center justify-content-center">
                    <a href="#">
                        <img class="logo" src="<?php bloginfo('template_directory'); ?>/images/Logo_VAM_2_square.png" width="169px" height="169px" alt="Logo">
                    </a>
                    <?php if (get_locale() == 'uk'): ?>
                        <img class="title" src="<?php bloginfo('template_directory'); ?>/images/VAM_UKR.png" width="489px" alt="Title">
                    <?php elseif (get_locale() == 'en_US'): ?>
                        <img class="title" src="<?php bloginfo('template_directory'); ?>/images/vam_eng.png" width="489px" alt="Title">
                    <?php else: ?>
                        <img class="title" src="<?php bloginfo('template_directory'); ?>/images/7_1.png" width="489px" alt="Title">
                    <?php endif; ?>
                    <div class="ls-container ml-sm-auto mt-3 mt-sm-0 d-flex flex-column justify-content-between">
                        <?php dynamic_sidebar( 'mw-lang-switch' ); ?>
                        <div class="mw-social d-flex flex-row justify-content-center align-items-center">
                            <a class="mw-social--link" href="<?php echo get_option('facebook'); ?>">
                                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/facebook.svg" />
                            </a>
                            <a class="mw-social--link" href="<?php echo get_option('instagram'); ?>">
                                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/instagram.svg" />
                            </a>
                            <a class="mw-social--link" href="<?php echo get_option('youtube'); ?>">
                                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/youtube.svg" />
                            </a>
                            <a class="mw-social--link" href="<?php echo get_option('telegram'); ?>">
                                <img class="mw-icon" src="<?php bloginfo('template_directory'); ?>/icons/telegram.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- конец шапки -->

            <!-- строка поиска -->
            <div class="search-wrapper">
                <?php get_search_form() ?>
            </div>
            <!-- конец строки поиска -->

            <!-- меню для мобильных устройств -->
            <nav class="navbar navbar-light sticky-top bg-white d-block d-sm-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mwNavbarNavDropdown" aria-controls="mwNavbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'secondary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'mwNavbarNavDropdown',
                            'menu_class' => 'navbar-nav',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        )
                    );
                ?>
            </nav>
            <!-- конец меню для мобильных устройств -->

            <!-- область для рекламы -->
            <!-- конец области для рекламы -->

            <!-- основной контент -->
            <main role="main" class="mt-20 mw-main">
