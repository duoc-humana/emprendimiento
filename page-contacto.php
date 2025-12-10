<?php
/*
Template Name: Página de Contacto
*/
?>
<?php
// Archivo base para cargar el tema.
get_header();
?>

<div class="container">
    <div class="row">
        <a href="<?php echo home_url(); ?>">Ir al home</a>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="row caja-iconos-sy d-flex flex-column justify-content-center">
                <div class="col-3">
                <img class="img-iconos-sy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-ubicacion.png" alt="">
                </div>
                <div class="col-3">
                    <p>Dirección</p>
                </div>
            </div>
        </div>
        <div class="col-6"></div>
    </div>
</div>

<?php
get_footer();
?>