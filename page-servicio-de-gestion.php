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
                        <h2 class="titulo-seccion">
                            Gestión de residuos textiles<br>
                            para empresas
                        </h2>

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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/economia-circular-768x478.png" alt="Economía circular" class="imgeconomia">
                </div>
            </div>
        </section>
        <section class="game-section container">
        <h2>Nuestro trabajo con empresas</h2>
        <p>
            Las empresas nos eligen por una solución integral: gestionamos su residuo textil con trazabilidad total y les
            entregamos un certificado oficial que valida su compromiso ambiental ante clientes, colaboradores y la normativa vigente.
        </p>

        <!-- Swiper -->
        <div class="swiper swiper-empresas">
            <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url(confeccion-boton.jpeg);">
                <div class="item-desc">
                <h3>Gasvalpo</h3>
                <p>Revalorización de prendas institucionales con trazabilidad y reportes de impacto.</p>
                </div>
            </div>
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url(confeccion-boton.jpeg);">
                <div class="item-desc">
                <h3>Gasvalpo</h3>
                <p>Revalorización de prendas institucionales con trazabilidad y reportes de impacto.</p>
                </div>
            </div>
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url(confeccion-boton.jpeg);">
                <div class="item-desc">
                <h3>Gasvalpo</h3>
                <p>Revalorización de prendas institucionales con trazabilidad y reportes de impacto.</p>
                </div>
            </div>
            <div class="swiper-slide slider-trabajo-empresa" style="background-image: url(confeccion-boton.jpeg);">
                <div class="item-desc">
                <h3>Gasvalpo</h3>
                <p>Revalorización de prendas institucionales con trazabilidad y reportes de impacto.</p>
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
            <div class="col-5 ms-0 me-5 px-0 img-fondo-tex-sy d-flex justify-content-center">
                <div class="color-fondo-sy">
                  <h3 class="pb-3">Recuerda que:</h3>
                    <p class="text-start">La gestión del material textil puede realizarse tanto mediante retiro coordinado por nuestro equipo como por entrega directa por parte de la empresa. Una vez recibida esta solicitud, nos pondremos en contacto para definir la modalidad más adecuada, junto con los detalles de fecha, lugar y logística según el tipo y volumen de material.</p>  
                </div> 
            </div>
            <div class="col-6">
                <form action="POST">
                <div class="row mb-2">
                    <div class="col">
                        <label for="empresa">Empresa:</label>
                        <input id="empresa" name="empresa" class="form-control" type="text">
                    </div>
                    <div class="col">
                        <label for="rut">Rut:</label>
                        <input type="number" name="rut" id="rut" class="form-control">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <label for="email2">Email:</label>
                        <input type="email" name="email2" id="email2" class="form-control">
                    </div>
                    
                </div>
                <div class="row mb-2">
                    <div class="col">
                       <label for="direccion">Dirección de retiro:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control"> 
                    </div>
                    
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <fieldset>
                        <legend>¿Requiere destrucción de identidad corporativa?</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="si" value="si" id="si" checked>
                            <label for="si" class="form-check-label">Sí</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="no" value="no" id="no">
                            <label for="no" class="form-check-label">No</label>
                        </div>    
                        </fieldset>
                    </div>
                    
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <fieldset>
                            <legend>Volumen aprox</legend>
                            <select class="form-select" aria-label="Seleccionar volumen aproximado">
                                <option selected>100 m3</option>
                                <option value="1">200 m3</option>
                                <option value="2">300 m3</option>
                                <option value="3">400 m3 o más</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                            <legend>Tipo de textil</legend>
                            <select class="form-select" aria-label="Seleccionar tipo de textil">
                                <option selected>Jeans</option>
                                <option value="1">Tela impermeable</option>
                                <option value="2">Algodón</option>
                                <option value="3">Poliéster</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <fieldset>
                            <legend>Productos de interés</legend>
                            <div class="row mb-1">
                                <div class="col">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="maceta" id="maceta" name="maceta">
                                    <label class="form-check-label" for="maceta">
                                    Maceta
                                    </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="bloque" id="bloque" name="bloque">
                                    <label class="form-check-label" for="bloque">
                                    Bloque de revestimiento
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="merch" id="merch" name="merch">
                                    <label class="form-check-label" for="merch">
                                    Merchandising
                                    </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="otro" id="otro" name="otro">
                                    <label class="form-check-label" for="otro">
                                    Otro
                                    </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="mensaje2">Escribe tu mensaje</label>
                    <textarea name="mensaje2" class="form-control" id="mensaje2">
                    <textarea>
                </div>
                </form>
                
            </div>
            <div class="col-1"></div>
        </div>
     </div>

       
</main>

<?php
get_footer();
?>