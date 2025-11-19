<?php

function reciclados_enqueue_assets() {

    /* Bootstrap CSS (CDN) */
    wp_enqueue_style(
        'bootstrap-header', // Nombre identificativo (ID) debe ser unico.
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', // URL, en este caso el link del CDN de Bootstrap.
        array(), // Orden de carga, opcional si existe alguna dependencia.
        '5.3.7' // Version, en este caso la version de la libreria de Bootstrap.
    ); 
    wp_enqueue_style(
        'swiper', // Nombre identificativo (ID) debe ser unico.
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', // URL, en este caso el link del CDN de Bootstrap.
        array() // Orden de carga, opcional si existe alguna dependencia.
        
    ); 

    /* CSS Principal + Bootstrap */
    wp_enqueue_style (
        'estilo', // Nombre identificativo (ID) debe ser unico.
        get_template_directory_uri() . '/assets/scss/mi-estilo.css', // URL, en este caso la ubicacion del archivo .css
        array('bootstrap-header', 'swiper'), // Orden de carga, opcional si existe alguna dependencia, en este caso al usar Boostrap el css dependera de Bootstrap, es decir que nuestro css se cargara despues de Boostrap.
        '1.0' // Version, en este caso es la version de nuestro css pero es completamente opcional.
    );


    /* # Ejemplos Scripts # */
    /* jQuery (ya incluido en WP) */
    wp_enqueue_script('jquery');

    /* Bootstrap JS */
    wp_enqueue_script(
        'bootstrap-footer', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', 
        array('jquery'), 
        '5.3.7', 
        true // Carga al final del body
    );
     wp_enqueue_script(
        'swiper-footer', 
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', 
        array('jquery'),  
        '11.0',            
        true               // carga en el footer
    );
     
       wp_register_script(
        'script',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery', 'bootstrap-footer', 'swiper-footer'),
        '1.0',
        true
    );

    

    wp_enqueue_script('script');

}
add_action('wp_enqueue_scripts', 'reciclados_enqueue_assets');


?>