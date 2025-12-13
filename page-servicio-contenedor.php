<?php
// Archivo base para cargar el tema.
/*
Template Name: Página de servicios de contenedor
*/
get_header();
?>
  <main>
        <section class="reciclaje container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contendorh1">
                        <h2 class="titulo-seccion">Reciclaje de prendas y textiles en contenedores</h2>
                    </div>
                    <p class="descripcion">
                        Instalamos contenedores para acopio seguro de textiles en empresas, municipios o instituciones.
                        El servicio incluye retiro programado, clasificación en planta, registro del volumen gestionado
                        y posterior transformación del textil en nuevos productos.
                        Este sistema facilita que las organizaciones implementen economía circular sin complejidad
                        logística.
                    </p>
                </div>
                <div class="col-lg-5 text-center imgcontebasu">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contenedor.webp" alt="Contenedor" class="img-fluid contenedor-img">
                </div>
            </div>

            <!-- Iconos -->
            <div class="row text-center mt-5 iconos-tipo">

                <div class="col-6 col-md-3 mb-4">
                    <div class="icono-circulo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pantalonesicono.svg" class="icono-tipo" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3 mb-4">
                    <div class="icono-circulo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-shirt_5693.png" class="icono-tipo" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3 mb-4">
                    <div class="icono-circulo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sweater_78200.svg" class="icono-tipo" alt="">
                    </div>
                </div>

                <div class="col-6 col-md-3 mb-4">
                    <div class="icono-circulo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mens-sleeveless-jacket_78087.svg" class="icono-tipo" alt="">
                    </div>
                </div>

            </div>


        </section>

        <!-- ===========================
     SECCIÓN: Importancia
=========================== -->
        <section class="impacto py-5">
            <div class="container">
                <div class="row align-items-center fondo-azul p-4 rounded-4">
                    <div class="col-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contenedores.png" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-8">
                        <div class="conth2">
                            <h2 class="impacto-titulo">✨¡Tu huella ambiental sí importa!✨</h2>
                        </div>
                        <div class="contp">
                            <p class="impacto-texto">
                                Cada prenda cuenta una historia y la tuya aún no termina. En lugar de dejar que tu ropa
                                quede olvidada,
                                deposítala en los contenedores de reciclaje textil. Así ayudas a reducir residuos,
                                cuidar el
                                planeta y
                                dar nuevas oportunidades a quienes más lo necesitan ♻️.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===========================
     SECCIÓN: Ubicación
=========================== -->
        <section class="ubicacion container py-5">
            <h3 class="titulo-seccion mb-4">Dónde lo encuentras</h3>

            <div class="row">

                <!-- Texto izquierda -->
                <div class="col-lg-4 d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Ubicacíon</p>
                        <span class="ubicacion-text">Viña del Mar, plaza</span>
                    </div>

                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-clock"></i>
                        <p>Horario</p>
                        <span class="ubicacion-text">lunes a viernes</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-clock"></i>
                        <p>Hora</p>
                        <span class="ubicacion-text">10:00 – 18:00</span>
                    </div>
                </div>

                <!-- Mapa derecha -->
                <div class="col-lg-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.847856452866!2d-71.551133!3d-33.015348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689de60f09841bb%3A0x566327582f5ea182!2sPlaza%20Vi%C3%B1a%20del%20Mar!5e0!3m2!1ses!2scl!4v1731288880000!5m2!1ses!2scl"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="mapa-sombra rounded-4">
                    </iframe>
                </div>

            </div>
        </section>
    </main>

<?php
get_footer();
?>
