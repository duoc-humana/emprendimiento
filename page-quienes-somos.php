<?php
// Archivo base para cargar el tema.
get_header();
?>
<main>
<section class="fundadora py-5">
    <div class="container">
        <h1 class="titulo-quienes-somos">Quienes somos</h1>
            <div class="row align-items-center">
                <?php 
                $filtro = array(
                'post_type' => 'post',  
                'post__in' => [264]   
                );
                $consulta = new WP_Query($filtro);
                if($consulta->have_posts()){
                    foreach($consulta->posts as $post){
                        setup_postdata($post); // necesario para usar funciones de template
                        ?>
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            <?php echo get_the_post_thumbnail($post->ID, 'medium', array('class' => 'img-fluid')); ?> 
                        </div>
                        <div class="col-md-6">
                            <h2 class="mb-3"><?php the_title(); ?></h2>
                            <p class="mb-3"><?php the_content(); ?></p>
                        </div>
                        <div class="col-md-2"></div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
    </div>

    <div class="tabs-box">

        <!-- CONTENIDO DEL TAB -->
        <div class="tab-content-box">
            <div class="tab-panel active" id="tab1">
                <h3 class="tab-title color-blanco">Transformamos desechos textiles en oportunidades para un futuro sostenible.</h3>
                <p class="tab-text color-blanco">Nuestro Propósito: Darle un futuro sostenible a tu ropa. Transformamos tus desechos textiles en recursos valiosos, reduciendo la contaminación y creando un impacto tangible. Juntos, cerramos el ciclo de la moda de forma responsable e innovadora.</p>
            </div>
            <div class="tab-panel" id="tab2">
                <h3 class="tab-title color-blanco">Quince años transformando el desecho textil en valor sostenible real.”</h3>
                <p class="tab-text color-blanco">Nuestra historia: Hace quince años, un problema doméstico inspiró una solución. Convertimos la acumulación de prendas en desuso en un proyecto de impacto ambiental y social. Con esfuerzo y constancia, crecimos hasta consolidarnos como referente en reciclaje textil, innovación y compromiso comunitario.</p>
            </div>
            <div class="tab-panel" id="tab3">
                <h3 class="tab-title color-blanco">Lideramos la innovación textil con propósito, comunidad y sustentabilidad.</h3>
                <p class="tab-text color-blanco">Nuestra innovación: Desde nuestros talleres impulsamos un modelo productivo que une diseño, reciclaje y responsabilidad social. Damos nueva vida a las fibras en desuso, transformándolas en productos útiles y ecológicos que contribuyen activamente al desarrollo sostenible del país.</p>
            </div>
        </div>
        
    
        <!-- RECTÁNGULOS DE CONTROL -->
        <div class="tabs-selectors">
            <div class="selector active" data-tab="tab1">Proposito de Recicla2</div>
            <div class="selector" data-tab="tab2">Nuestra Historia</div>
            <div class="selector" data-tab="tab3">innovación del Proyecto</div>
        </div>
    </div>
    
<section class="workflow-section container mt-5">
    <h2>Proceso de confección</h2>
    <div class="workflow-slider">
        <div class="workflow-track" id="workflow-track">
        <article class="workflow-card" active>
        <img class="workflow-card__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/01_conf.png" alt="Proceso 01">
        <div class="workflow-card__content">
            <span class="workflow-card__number">01</span>
            <h3 class="workflow-card__title">Recepción y Clasificación</h3>
            <p class="workflow-card__desc">Recepción del textil, pesaje, registro de origen y separación por tipo de fibra para asegurar calidad del material.</p>
        </div>
        </article>
        
        <article class="workflow-card">
            <img class="workflow-card__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/02_conf.png" alt="Proceso 02">
            <div class="workflow-card__content">
                <span class="workflow-card__number">02</span>
                <h3 class="workflow-card__title">Preparación del Material</h3>
                <p class="workflow-card__desc">Desarme, corte y acondicionamiento del textil para eliminar cierres, broches o elementos no reciclables.</p>
            </div>
        </article>
        
        <article class="workflow-card">
            <img class="workflow-card__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/03_conf.png" alt="Proceso 03">
            <div class="workflow-card__content">
                <span class="workflow-card__number">03</span>
                <h3 class="workflow-card__title">Desfibrado y Mezcla</h3>
                <p class="workflow-card__desc">Reducción mecánica de la prenda a fibras y mezcla con aglomerante creado por nosotros para estabilizar la estructura.</p>
            </div>
        </article>
        
        <article class="workflow-card">
            <img class="workflow-card__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/04_conf.png" alt="Proceso 04">
            <div class="workflow-card__content">
                <span class="workflow-card__number">04</span>
                <h3 class="workflow-card__title">Moldeado y Compactación</h3>
                <p class="workflow-card__desc">Ingreso del material a moldes específicos y compactación controlada para dar forma y resistencia.</p>
            </div>
        </article>
        
        <article class="workflow-card">
            <img class="workflow-card__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/05_conf.png" alt="Proceso 05">
            <div class="workflow-card__content">
                <span class="workflow-card__number">05</span>
                <h3 class="workflow-card__title">Curado y Acabado</h3>
                <p class="workflow-card__desc">Secado, estabilización del material y revisión de calidad. Aplicación de terminaciones si corresponde.</p>
            </div>
        </article>
        
        <article class="workflow-card">
            <img class="workflow-card__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/06_conf.png" alt="Proceso 06">
            <div class="workflow-card__content">
                <span class="workflow-card__number">06</span>
                <h3 class="workflow-card__title">Etiquetado y Certificación</h3>
                <p class="workflow-card__desc">Incorporación de etiquetas personalizadas y emisión del certificado ambiental asociado a esa producción.</p>
            </div>
        </article>
        </div>
    </div>
</section>
<section class="container">
    <h2>Certificados de Recicla2</h2>
    <div class="swiper certificados-quienesSomos">
        <div class="swiper-wrapper">
            <?php
            $filtro = array(
                'post_type'      => 'certificados',
                'orderby'        => 'date',
                'order'          => 'ASC',
                'post_status'    => 'publish'
            );

            $consulta = new WP_Query($filtro);

            if ($consulta->have_posts()) :
                while ($consulta->have_posts()) :
                    $consulta->the_post();
                    ?>
                    <div class="swiper-slide">
                        <div class="texto-certificados">
                            <p class="order-md-2 order-1"><?php the_field('descripcion_de_certificado'); ?></p>
                        </div>
                        <?php 
                            $imagen_id = get_field('imagen_de_certificado');
                            if ($imagen_id) {
                                echo wp_get_attachment_image($imagen_id,'medium',false,array('class' => 'img-logo-certificado order-md-1 order-1')
                                );
                            }
                            ?>

                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="container">
    <h2>Premios y Reconocimientos</h2>
    <div class="swiper slider-premios">
        <div class="swiper-wrapper">
            <?php
            $filtro = array(
                'post_type'      => 'Premios', // tu CPT
                'orderby'        => 'date',
                'order'          => 'ASC',
                'post_status'    => 'publish'
            );

            $consulta = new WP_Query($filtro);

            if ($consulta->have_posts()) :
                $i = 0; // contador para alternar
                while ($consulta->have_posts()) :
                    $consulta->the_post();

                    // Campos personalizados
                    $year      = get_field('ano-del-premio');
                    $categoria = get_field('galardon');
                    $title     = get_field('nombre_del_premio');

                    // intercalar featured: pares o impares
                    $featured_class = ($i % 2 == 0) ? 'featured' : '';
                    ?>
                    
                    <div class="swiper-slide">
                        <div class="award-card <?php echo $featured_class; ?>">
                            <div class="award-header-row">
                                <div class="award-date">
                                    <div class="award-year"><?php echo esc_html($year); ?></div>
                                    <div class="award-categoria"><?php echo esc_html($categoria); ?></div>
                                </div>
                                <div class="award-icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 
                                                 1.18 6.88L12 17.77l-6.18 3.25L7 
                                                 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="award-title"><?php echo esc_html($title); ?></div>
                        </div>
                    </div>

                    <?php
                    $i++; // aumentar contador
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>


</main>
<?php
get_footer();
?>