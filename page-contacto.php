<?php
/*
Template Name: Página de Contacto
*/
?>
<?php
// Archivo base para cargar el tema.
get_header();
?>

<div class="container py-5 contacto-wrapper">
    <div class="row">
        <div class="col">
            <a class="links-sy" href="<?php echo home_url(); ?>">Ir al home</a>
        </div> 
    </div>
    <div class="row g-5 my-5">
        <div class="col-12 col-lg-5 order-2 order-lg-1">

            |<div class="info-card text-center p-4 mb-4">
                <img class="icono-contacto mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-ubicacion.png" alt="Icono ubicación">
                <p class="fw-semibold mb-0">Dirección</p>
            </div>

            <div class="info-card text-center p-4 mb-4">
                <img class="icono-contacto mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-telefono.png" alt="Icono teléfono">
                <p class="fw-semibold mb-0">+56 9 00000000</p>
            </div>

            <div class="info-card text-center p-4 mb-4">
                <img class="icono-contacto mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-mail.png" alt="Icono mail">
                <a class="links-sy mb-0 fw-semibold" href="mailto:consuelo.miranda@gmail.com">consuelo.miranda@gmail.com</a>
            </div>
        </div>
        <div class="col-12 col-lg-7 order-1 order-lg-2">
                <h1>Formulario de contacto</h1>
                <p class="py-3 text-muted">No dudes en comunicarte con el equipo Recicla2, estaremos felices de resolver cualquier duda que tengas sobre nuestros productos, procesos y proyectos especiales</p>
                <ul class="ps-5 text-muted">
                    <li class="fw-light">Diferentes medios de pago</li>
                    <li class="fw-light">Plazo de respuesta de 1 a 3 días hábiles.</li>
                </ul>

                <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
                    <input type="hidden" name="action" value="enviar_contacto">

                    <?php wp_nonce_field('form_contacto', 'nonce_contacto'); ?>
                    
                    <div class="row my-3 g-3">
                    <div class="col-md-6">
                        <label for="nombre">Nombre y Apellido</label>
                        <input id="nombre" name="nombre" class="form-control" type="text">  
                    </div>
                    <div class="col-md-6">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono">
                    </div>
                        <div class="col-12">
                            <label for="mail">Correo electrónico</label>
                            <input type="email" class="form-control" name="email" id="mail">
                        </div>
                        <div class="col-12">
                            <label for="asunto">Asunto</label>
                            <input name="asunto" id="asunto" class="form-control" type="text">
                        </div>
                        <div class="col-12">
                            <label for="mensaje">Escribe tu mensaje</label>
                            <textarea name="mensaje" class="form-control" id="mensaje"></textarea>
                        </div>
                    <div class="col-12 d-flex justify-content-end mb-5 mt-3">
                        <button type="submit" class="boton-enviar-sy">Enviar</button>
                    </div>     
            </form>
        </div>
    </div>
</div>

<?php
get_footer();
?>