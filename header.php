<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php wp_head(); ?>
</head>

<<<<<<< HEAD
<body <?php body_class(); ?>> 
      <header class="sticky-top">
        <nav class="navbar navbar-expand-xl ">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="#">Radical Pop</a>
                <!-- Botón para abrir el offcanvas -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Offcanvas -->
                <div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" >

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-principal',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
            
        
                        <div class="d-flex iconos gap-1">
                            <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="d-flex position-relative" role="search" style="width: 250px;">
                                <input name="s" class="form-control pe-5" type="text" placeholder="Buscar" aria-label="Buscar">

                                <button type="submit" class="search-button position-absolute top-50 end-0 translate-middle-y pe-2" style="background: none; border: none; padding: 0; margin-top: -1px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gray"
                                        class="bi bi-search-heart" viewBox="0 0 16 16">
                                    <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
                                    <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11" />
                                    </svg>
                                </button>
                            </form>


                            
                            <!-- Ícono de carrito-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="gray" class="bi bi-cart2 mt-1" viewBox="0 0 16 16">
                                <path
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                            </svg>
                        </div>
                </div><!--fin offcanvas-body-->
            </div><!--fin container-->
        </nav>
    </header>
=======
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
>>>>>>> b7259879f32fd8981ecd9a5b6747e1659c59a62c
