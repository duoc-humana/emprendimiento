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
        <a class="links-sy" href="<?php echo home_url(); ?>">Ir al home</a>
    </div>
    <div class="row my-5">
        <div class="col-6">
            <div class="row my-5 caja-iconos-sy d-flex justify-content-center">
                <div class="col-2">
                <img class="img-iconos-sy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-ubicacion.png" alt="">
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <p class="text-center">Dirección</p>
                    </div>  
                </div>
            </div>
            <div class="row my-5 caja-iconos-sy d-flex justify-content-center">
                <div class="col-2">
                <img class="img-iconos-sy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-telefono.png" alt="">
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <p class="text-center">+56 9 00000000</p>
                    </div>  
                </div>
            </div>
            <div class="row my-5 caja-iconos-sy d-flex justify-content-center">
                <div class="col-2">
                <img class="img-iconos-sy" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-mail.png" alt="">
                </div>
                <div class="row my-2">
                    <div class="col-12 d-flex justify-content-center">
                        <a class="links-sy" href="mailto:consuelo.miranda@gmail.com">consuelo.miranda@gmail.com</a>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-6"></div>
    </div>
</div>

<?php
get_footer();
?>