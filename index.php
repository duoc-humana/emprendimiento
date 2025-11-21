<?php
// Archivo base para cargar el tema.
get_header();
?>

<h1>Hola, este es mi tema desde cero</h1>

<!--Banner de empresas con swiper !--> 
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    $query = new WP_Query(array(
        'post_type' => 'empresas_home',
        'posts_per_page' => -1
    ));

    while ($query->have_posts()) : $query->the_post();

        // Obtener el campo (ID de la imagen)
        $imagen_id = SCF::get('empresa', get_the_ID());

        // Obtener la URL correcta
        $img = wp_get_attachment_image_src($imagen_id, 'full');
    ?>
        <div class="swiper-slide">
            <img src="<?php echo esc_url($img[0]); ?>" alt="">
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>

<?php
get_footer();
?>
