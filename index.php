<?php
// Archivo base para cargar el tema.
get_header();
?>

<h1>Hola, este es mi tema desde cero</h1>



<!-- Banner de empresas con swiper !-->

<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <?php
$query = new WP_Query(array(
    'post_type' => 'empresas_home',
    'posts_per_page' => -1
));

while ($query->have_posts()) : $query->the_post();
    $fields = get_post_meta(get_the_ID(), 'empresa', true);
    $img_url = wp_get_attachment_url($fields);

?>

    <div class="swiper-slide ajuste"><img src="<?php echo esc_url($img_url); ?>"></div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>



<?php
get_footer();
?>
