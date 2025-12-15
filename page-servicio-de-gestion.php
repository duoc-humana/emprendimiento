<?php
// Archivo base para cargar el tema.
/*
Template Name: Página de servicios de gestion
*/
get_header();
?>

<main>
    <section class="seccion-residuos py-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <!-- Texto -->
                    <div class="col-lg-6 col-md-6">
                        <h1>
                            Gestión de residuos textiles<br>
                            para empresas
                        </h1>

                        <p class="parrafo-seccion mt-5">
                            Ofrecemos un servicio integral de gestión de residuos textiles con trazabilidad
                            completa, orientado a empresas que buscan reducir su impacto ambiental y dar un
                            nuevo propósito a sus materiales.
                        </p>
                    </div>

                    <!-- Imagen -->
                    <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
                        <div class="contenedor-img imgprimergest">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home1.png" alt="Gestión de residuos"
                                class="img-fluid imagen-residuos">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container py-5">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h2 class="mb-4">Información del servicio</h2>

                    <ul class="lista-servicios">
                        <li>Acopio autorizado de textiles.</li>
                        <li>Eliminación de logos o elementos de identidad corporativa.</li>
                        <li>Transformación del material en nuevos productos sostenibles (como macetas, bloques o
                            merchandising).</li>
                        <li>Si requiere destrucción de identidad corporativa.</li>
                        <li>Emisión de certificados de impacto ambiental que reflejan CO₂ evitado, agua ahorrada y kilos
                            desviados de vertedero.</li>
                    </ul>

                    <div class="d-flex gap-4 botonoesinfos">
                        <a class="btn btn-contactar" href="#">Contactar</a>
                        <a class="link-ver-productos" href="#">Ver Productos</a>
                    </div>
                </div>

                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economia-circular.png" alt="Economía circular" class="imgeconomia">
                </div>
            </div>
        </section>
        <section class="game-section container esp3">
        <h2>Nuestro trabajo con empresas</h2>
        <p>
        Trabajamos con empresas e instituciones que buscan gestionar sus residuos textiles de manera responsable, evitando que terminen en vertederos y reincorporándolos en nuevos productos. Ofrecemos retiro certificado, destrucción de identidad corporativa, transformación en productos circulares y entrega de reportes ambientales con CO2 evitado y agua ahorrada.
        </p>

        <!-- Swiper -->
        <div class="swiper swiper-empresas">
            <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url(confeccion-boton.jpeg);">
                <div class="item-desc">
                <h3>Codelco Ventanas</h3>
                <p>Retiro de uniformes, transformación en productos corporativos y elaboración de certificado ambiental.</p>
                </div>
            </div>
            <div class="swiper-slide slider-trabajo-empresa" style="background-image:  url('<?php echo get_template_directory_uri(); ?>/assets/img/gas-valpo.png');">
                <div class="item-desc">
                <h3>Gasvalpo</h3>
                <p>Revalorización de prendas institucionales con trazabilidad y reportes de impacto.</p>
                </div>
            </div>
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/kdm.jpg');">
                <div class="item-desc">
                <h3>KDM Industrial</h3>
                <p>Gestión de residuos textiles industriales y desarrollo de merchandising circular.</p>
                </div>
            </div>
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url(confeccion-boton.jpeg);">
                <div class="item-desc">
                <h3>Aduanas de Chile</h3>
                <p>Destrucción segura de identidad corporativa y elaboración de productos reutilizables.</p>
                </div>
            </div>
             <div class="swiper-slide slider-trabajo-empresa" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/econo-circular.webp');">
                <div class="item-desc">
                <h3>Municipio de Viña del Mar</h3>
                <p>Colaboración en proyectos de economía circular y educación ambiental.</p>
                </div>
            </div>      
        </div>

            <!-- Flechas y paginación -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
        </section>

    <!-- Formulario ++++++ -->
<div class="container-fluid esp3">
    <div class="row">
        <div class="col-md-6 col-xs-12 responsive1 ms-0 me-5 px-0 img-fondo-tex-sy d-flex justify-content-center">
            <div class="color-fondo-sy responsive2">
                <h3 class="pb-3">Recuerda que:</h3>
                <p class="text-start">La gestión del material textil puede realizarse tanto mediante retiro coordinado por nuestro equipo como por entrega directa por parte de la empresa. Una vez recibida esta solicitud, nos pondremos en contacto para definir la modalidad más adecuada, junto con los detalles de fecha, lugar y logística según el tipo y volumen de material.</p>  
            </div> 
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="row mb-4">
                <h2>Formulario</h2>
            </div>
            <div class="row">
            <div class="col">
                <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST">
                    <input type="hidden" name="action" value="enviar_servicio">
                <?php wp_nonce_field('form_servicio', 'nonce_servicio'); ?>

                <div class="row mb-4">
                    <div class="col">
                        <label for="empresa">Empresa:</label>
                        <input id="empresa" name="empresa" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="rut">Rut:</label>
                        <input type="number" name="rut" id="rut" class="form-control">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="email_2">Email:</label>
                        <input type="email" name="email_2" id="email_2" class="form-control">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="direccion">Dirección de retiro:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control"> 
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <fieldset name="destruccion_identidad" id="destruccion_identidad">
                            <legend>¿Requiere destrucción de identidad corporativa?</legend>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="destruccion_identidad" value="si" id="si" checked>
                                <label for="si" class="form-check-label">Sí</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="destruccion_identidad" value="no" id="no">
                                <label for="no" class="form-check-label">No</label>
                            </div>    
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <fieldset>
                            <legend>Volumen aprox</legend>
                            <select class="form-select" aria-label="Seleccionar volumen aproximado" name="volumen" id="volumen">
                                <option selected value="100 m3">100 m3</option>
                                <option value="200 m3">200 m3</option>
                                <option value="300 m3">300 m3</option>
                                <option value="400 m3 o más">400 m3 o más</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                            <legend>Tipo de textil</legend>
                            <select class="form-select" aria-label="Seleccionar tipo de textil" name="tipo_textil" id="tipo_textil">
                                <option selected value="Jeans">Jeans</option>
                                <option value="Tela impermeable">Tela impermeable</option>
                                <option value="Algodón">Algodón</option>
                                <option value="Poliéster">Poliéster</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <fieldset>
                            <legend>Productos de interés</legend>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="maceta" id="maceta" name="maceta">
                                        <label class="form-check-label" for="maceta">Maceta</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="bloque" id="bloque" name="bloque">
                                        <label class="form-check-label" for="bloque">Bloque de revestimiento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="merch" id="merch" name="merch">
                                        <label class="form-check-label" for="merch">Merchandising</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="otro" id="otro" name="otro">
                                        <label class="form-check-label" for="otro">Otro</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label for="mensaje_2">Escribe tu mensaje</label>
                    <textarea name="mensaje_2" class="form-control" id="mensaje_2"></textarea>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="boton-enviar-sy">Enviar solicitud de retiro</button>
                </div>
            </form>
            </div>  
            </div>
            
        </div>
        <div class="col"></div>
    </div>
</div>


       
</main>

<?php
get_footer();
?>