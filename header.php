<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recicla2</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <!-- Barra superior -->
    <div class="barra-superior d-none d-lg-flex justify-content-between align-items-center">
        <div class="header-left d-flex gap-3">
            <i class="fa-brands fa-instagram fa-xl"></i>
            <i class="fa-brands fa-facebook fa-xl"></i>
        </div>
        <div class="header-right d-flex align-items-center gap-3" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <form class="search-container d-flex align-items-center">
                <input type="search" class="search-input form-control" placeholder="Buscar..." value="<?php echo get_search_query(); ?>" name="s">
                <i class="fa-solid fa-magnifying-glass search-btn fa-2xl"></i>
            </form>
           <a href="<?php echo wc_get_cart_url(); ?>" class="position-relative">
                <i class="fa-solid fa-cart-shopping fa-xl carrito-icon"></i>
                <?php if (WC()->cart->get_cart_contents_count() > 0): ?>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white text-dark border">
                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </span>
                <?php endif; ?>
            </a>
        </div>
    </div>

    <!-- Navbar principal -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoheader.png" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler custom-toggle" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Buscador móvil -->
                <div class="mobile-search d-lg-none mb-3">
                    <input type="text" class="form-control" placeholder="Buscar...">
                </div>

                <!-- Menú dinámico de WordPress -->
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal',
                    'container'      => false,
                    'menu_class'     => 'navbar-nav ms-auto gap-2',
                    'fallback_cb'    => '__return_false',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'          => 2,
                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>

                <!-- Redes sociales en móvil -->
                <div class="mobile-socials d-lg-none d-flex justify-content-center gap-4 mt-4 mb-3">
                    <i class="fa-brands fa-instagram fa-xl"></i>
                    <i class="fa-brands fa-facebook fa-xl"></i>
                </div>
                <div class="mobile-menu-divider d-lg-none"></div>
            </div>
        </div>
    </nav>
</header>
