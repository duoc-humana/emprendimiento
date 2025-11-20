<?php
/**
 * Enqueue de estilos y scripts del tema
 */

function mi_tema_enqueue_assets() {

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), '5.3.8');

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');

    // Font Awesome
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // CSS principal del tema
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/scss/mi-estilo.css', array('bootstrap-css', 'swiper-css', 'fontawesome-css'), '1.0');

    // jQuery (incluido en WP)
    wp_enqueue_script('jquery');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.8', true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11', true);

    // JS del tema
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'bootstrap-js', 'swiper-js'), '1.0', true);

}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_assets');
