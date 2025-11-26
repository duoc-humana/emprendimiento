<?php
// Archivo base para cargar el tema.
get_header();
?>


<main>
    <!--BANNER +++++++++++++++++++++++++++++-->
        <div class="px-5 container-fluid esp1 esp5">
            <div class="row">
                <div class="col-md-6">
                    <h1>Transformamos residuos textiles en soluciones sostenibles</h1>
                    <p class="bajada-titulo-banner">Innovación circular para empresas y comunidades.</p>
                </div>
                <div class="col-md-6 pos1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home1.png" alt="Desfribilado de textil de jeans">

                    <a href="#" class="btn1 pos2">Quiénes somos</a>


                    <a href="#" class="btn1 pos3">Cotizar</a>
                </div>
            </div>
        </div>

        <!--VISION +++++++++++++++++++++++++++-->
        <div class="container-fluid esp5">
            <!-- Título VISIÓN -->
            <div class="row">
                <div class="col-md-4 borde-vision">
                    <h2 class="color-blanco ms-5 mt-5">VISIÓN</h2>
                </div>
            </div>

            <!-- Bloques de visión -->
            <div
                class="row color-fondo d-flex align-items-center flex-md-row flex-nowrap overflow-auto slide-responsive">
                <div class="col-md-4 flex-shrink-0 p-3">
                    <h3 class="color-blanco">01</h3>
                    <p class="color-blanco">
                        En RECICLA2 creemos que el textil es una materia prima valiosa, no basura.
                        Buscamos liderar la revalorización textil en Chile, transformando residuos
                        en productos útiles, estéticos y con impacto positivo para ciudades,
                        empresas y comunidades.
                    </p>
                </div>

                <div class="col-md-4 flex-shrink-0 p-3">
                    <h3 class="color-blanco">02</h3>
                    <p class="color-blanco">
                        Queremos impulsar un nuevo estándar donde cada prenda tenga una segunda vida,
                        cada empresa pueda hacerse responsable de sus residuos, y donde el reciclaje
                        no sea una promesa futura sino una práctica concreta, certificada y escalable hoy.
                    </p>
                </div>

                <div class="col-md-4 flex-shrink-0 p-3">
                    <h3 class="color-blanco">03</h3>
                    <p class="color-blanco">
                        Proyectamos a RECICLA2 como un referente nacional en economía circular textil,
                        integrando innovación, diseño y trazabilidad para que el reciclaje industrial
                        conviva con el desarrollo urbano, la educación y la regeneración social.
                    </p>
                </div>
            </div>
        </div>

        <!-- SECCIÓN DE ICONOS ++++++++++++++++-->
        <div class="container esp3 esp5">
            <!-- Fila de iconos -->
            <div class="row d-flex justify-content-center text-center">
                <!-- Paso 1 -->
                <div class="col-12 col-md-2 mb-3 mb-md-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/unboxing.png"
                class="img-fluid mt-3 icono-proceso" alt="icono-proceso">
                    <h2 class="color-celeste mt-4">Se recibe</h2>
                </div>

                <!-- Flecha -->
                <div class="col-12 col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0">
                    <i class="fa-solid fa-arrow-right fa-2xl d-none d-md-block" style="color:#0471b4;"></i>
                    <i class="fa-solid fa-arrow-down fa-2xl d-block d-md-none mt-3" style="color:#0471b4;"></i>
                </div>

                <!-- Paso 2 -->
                <div class="col-12 col-md-2 mb-3 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/variations.png" class="img-fluid mt-3 icono-proceso"
                        alt=" Icono de clasificación de ropa.">
                    <h2 class="color-celeste mt-4">Se clasifica</h2>
                </div>

                <!-- Flecha -->
                <div class="col-12 col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0">
                    <i class="fa-solid fa-arrow-right fa-2xl d-none d-md-block" style="color:#0471b4;"></i>
                    <i class="fa-solid fa-arrow-down fa-2xl d-block d-md-none mt-3" style="color:#0471b4;"></i>
                </div>

                <!-- Paso 3 -->
                <div class="col-12 col-md-2 mb-3 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/needle.png" class="img-fluid mt-3 icono-proceso"
                        alt="Icono de confección, una aguja y un botón.">
                    <h2 class="color-celeste mt-4">Se trabaja</h2>
                </div>

                <!-- Flecha -->
                <div class="col-12 col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0">
                    <i class="fa-solid fa-arrow-right fa-2xl d-none d-md-block" style="color:#0471b4;"></i>
                    <i class="fa-solid fa-arrow-down fa-2xl d-block d-md-none mt-3" style="color:#0471b4;"></i>
                </div>

                <!-- Paso 4 -->
                <div class="col-12 col-md-2 mb-3 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flowerpot.png" class="img-fluid mt-3 icono-proceso"
                        alt="Icono de producto final, maceta con textil reciclado.">
                    <h2 class="color-celeste mt-4">Se crea</h2>
                </div>
            </div>
        </div>
<!--PRODUCTO DESTACADO ++++++++++++++++++-->
        <div class="container-fluid">
            <div class="row">
                <?php
                    $query = new WP_Query(array(
                        'post_type' => 'producto_home',
                        'posts_per_page' => -1
                    ));

                    while ($query->have_posts()) :
                        $query->the_post();
                        $id_imagen = get_post_meta(get_the_ID(), 'imagen_de_producto_destacado', true);
                        $img_destacado = wp_get_attachment_url($id_imagen);
                    ?>


                <div class="col-md-6 img-fondo">
                    <div class="row d-flex justify-content-center align-items-star">
                        <div class="col-md-12 mt-3">
                            <img src="<?php echo esc_url($img_destacado); ?>" alt="">
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="row">
                        <div class="col-md-5 d-flex justify-content-center">
                            <div class="d-flex flex-column text-center">
                                <span class="txt-esp1">100%</span>
                                <span class="txt-esp2">RECICLADO</span>
                            </div>

                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-5 d-flex justify-content-center">
                            <div class="d-flex flex-column text-center">
                                <span class="txt-esp1">83%</span>
                                <span class="txt-esp2">SOSTENIBLE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-5">
                    <div class="row esp4 mt-5">
                        <div class="col-md-12">
                            <h2>Maceta con material reciclado</h2>
                        </div>
                    </div>
                    <div class="row esp4">
                        <div class="col-md-12">
                            <span class="txt-esp3">$990</span>
                        </div>
                    </div>
                    <div class="row esp5">
                        <div>
                            <p>Esta maceta esta hecha con material reciclado, elaborado con materiales<br> a base de
                                jeans.</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn2">Comprar</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="link">Ver productos</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

 <div class="container-fluid esp3 ocultar">
            <div class="row esp5 px-5">
                <div class="col-md-6">
                    <h2 class="esp4 mt-5">Trabajo con empresas</h2>
                    <p class="esp5">Trabajamos con empresas e instituciones que buscan gestionar sus residuos textiles
                        de manera responsable, evitando que terminen en vertederos y reincorporándolos en nuevos
                        productos. Ofrecemos retiro certificado, destrucción de identidad corporativa, transformación en
                        productos circulares y entrega de reportes ambientales con CO₂ evitado y agua ahorrada.</p>
                    <a href="#" class="btn2">Servicio</a>
                </div>
                <div class="col-md-6 bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maceta-2.png" alt="" class="h-100">
                </div>
            </div>
             <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <?php
                    $query = new WP_Query(array(
                        'post_type' => 'empresas_home',
                        'posts_per_page' => -1
                    ));

                    while ($query->have_posts()) :
                        $query->the_post();
                        $fields = get_post_meta(get_the_ID(), 'empresa', true);
                        $img_url = wp_get_attachment_url($fields);
                    ?>
                    
                    <div class="swiper-slide">
                        <img class="ajuste" src="<?php echo esc_url($img_url); ?>">
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div> 

           
        </div>
    <!-- Sección de banner de empresas -->
   
 


</main>        





<?php
get_footer();
?>
