<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recicla2</title>
    <?php wp_head(); ?>
    
</head>

<body>
    <header class="header">
        <div class="header-left d-flex justify-content-center">
            <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff;"></i>
            <i class="fa-brands fa-facebook fa-xl ms-2" style="color: #ffffff;"></i>
        </div>

        <div class="header-right">
            <a href="carrito.html"><i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i></a>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Buscar...">
            </div>
            <i class="fa-solid fa-magnifying-glass fa-xl search-btn punto" style="color: #ffffff;"></i>
        </div>
    </header>
    <nav class="navbar">
        <div class="nav-left">
            <a href="index.html"><img src="assets/img/logoheader.png" alt="Logo" class="logo"></a>
        </div>

        <div class="nav-right">
            
            <!--Menú hamburguesa-->
            <div class="hamburger">
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
            </div>
        </div>
    </nav>