<?php
// Archivo base para cargar el tema.
get_header();
?>

<h1>Hola, este es mi tema desde cero</h1>

<?php
$query = new WP_Query(array(
    'post_type' => 'empresas_home',
    'posts_per_page' => -1
));

while ($query->have_posts()) : $query->the_post();
    $fields = get_post_meta(get_the_ID(), 'empresa_campos', true);
?>
    <section>
        <img src="<?php echo esc_url(wp_get_attachment_url($fields['empresa'])); ?>">
    </section>

<?php endwhile; wp_reset_postdata(); ?>

<?php
get_footer();
?>
