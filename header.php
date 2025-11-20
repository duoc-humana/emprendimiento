<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header d-flex justify-content-between align-items-center p-2">
        <div class="header-left d-flex">
            <a href="#"><i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i></a>
            <a href="#" class="ms-2"><i class="fa-brands fa-facebook fa-xl" style="color: #ffffff;"></i></a>
        </div>

        <div class="header-right d-flex align-items-center">
            <a href="<?php echo esc_url(home_url('/carrito')); ?>"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i></a>
            <div class="search-container ms-3">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoheader.png" alt="Logo" class="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'mi-tema'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'container' => false,
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                        'fallback_cb' => '__return_false',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
            </div>
        </div>
    </nav>
