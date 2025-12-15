<?php
/*
Template Name: Página de Contacto
*/
?>
<?php
// Archivo base para cargar el tema.
get_header();
?>

<div class="container py-4">

    <div class="row">
        <div class="col-12">
            <a class="links-sy" href="<?php echo home_url(); ?>">Ir al home</a>
        </div>
    </div>

    <div class="row my-5">

        <!-- COLUMNA IZQUIERDA -->
        <div class="col-12 col-md-6">

            <!-- Bloque de icono -->
            <div class="d-flex align-items-center my-4">
                <img class="img-iconos-sy img-fluid w-25 me-3"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-ubicacion.png" alt="">
                <p class="mb-0">Dirección</p>
            </div>

            <div class="d-flex align-items-center my-4">
                <img class="img-iconos-sy img-fluid w-25 me-3"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-telefono.png" alt="">
                <p class="mb-0">+56 9 00000000</p>
            </div>

            <div class="d-flex align-items-center my-4">
                <img class="img-iconos-sy img-fluid w-25 me-3"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icono-mail.png" alt="">
                <a class="links-sy" href="mailto:consuelo.miranda@gmail.com">consuelo.miranda@gmail.com</a>
            </div>

        </div>

        <!-- COLUMNA DERECHA -->
        <div class="col-12 col-md-6">

            <h1>Formulario de contacto</h1>

            <p class="py-3">
                No dudes en comunicarte con el equipo Recicla2, estaremos felices de resolver cualquier duda que tengas
                sobre nuestros productos, procesos y proyectos especiales
            </p>

            <ul class="ps-4">
                <li class="fw-light">Diferentes medios de pago</li>
                <li class="fw-light">Plazo de respuesta de 1 a 3 días hábiles.</li>
            </ul>

            <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" class="mt-4">
                <input type="hidden" name="action" value="enviar_contacto">
                <?php wp_nonce_field('form_contacto', 'nonce_contacto'); ?>

                <div class="row g-3">
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

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="boton-enviar-sy">Enviar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<?php
get_footer();
?>