<?php 
require_once get_template_directory() . '/includes/enqueue.php';
add_theme_support('post-thumbnails');

// Registrar la ubicación del menú
function mi_tema_menus() {
  register_nav_menus(array(
    'menu-principal' => __('Menú Principal', 'mi-tema'),
  ));
}
add_action('after_setup_theme', 'mi_tema_menus');

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu

//CPT de empresas en el home
function cpt_secciones_home() {
    register_post_type('empresas_home', array(
        'label' => 'Empresas Home',
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'show_ui' => true,
        'supports' => array('title'),
    ));
}
add_action('init', 'cpt_secciones_home');

//Sub menú de producto destacado
add_action('admin_menu', function() {
    add_submenu_page(
        'woocommerce', // menú padre
        'Producto destacado', // título de la página
        'Producto destacado', // texto del menú
        'manage_woocommerce', // capacidad
        'edit.php?post_type=product&product_visibility=featured' // URL destino
    );
});

//Funcion para emails

// Procesar formulario de contacto
add_action('admin_post_nopriv_enviar_contacto', 'procesar_form_contacto');
add_action('admin_post_enviar_contacto', 'procesar_form_contacto');

function procesar_form_contacto() {

    // 1. Validar nonce
    if (
        !isset($_POST['nonce_contacto']) ||
        !wp_verify_nonce($_POST['nonce_contacto'], 'form_contacto')
    ) {
        wp_die('Error de seguridad');
    }

    // 2. Sanitizar datos
    $nombre   = sanitize_text_field($_POST['nombre']);
    $email    = sanitize_email($_POST['email']);
    $mensaje  = sanitize_textarea_field($_POST['mensaje']);
    $telefono = preg_replace('/[^0-9+\s()-]/', '', $_POST['telefono']);
    $asunto   = sanitize_text_field($_POST['asunto']);

    // 3. Configurar headers
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: $nombre <$email>"
    );

    // 4. Email para tu clienta
    $admin_email = 'agencia.humana25@gmail.com';

    $subject_admin = "📩 Nuevo mensaje de cliente";
    $body_admin = <<<EOD
Nuevo mensaje recibido desde el formulario:

Nombre: $nombre
Email: $email
Teléfono: $telefono
Asunto: $asunto
Mensaje:
$mensaje
EOD;

    wp_mail($admin_email, $subject_admin, $body_admin, $headers);

    // 5. Email de confirmación para el usuario
    $subject_user = "Hemos recibido tu mensaje ✔️";
    $body_user = <<<EOD
Hola $nombre,

Gracias por contactarnos. Hemos recibido tu mensaje y te responderemos pronto.

Copia de tu mensaje:
$mensaje

Saludos,
Recicla2.
EOD;

    wp_mail($email, $subject_user, $body_user, $headers);

    // 6. Redirección final
    wp_redirect(home_url('/gracias/'));
    exit;
}

// Procesar formulario de contacto
add_action('admin_post_nopriv_enviar_servicio', 'procesar_form_servicio');
add_action('admin_post_enviar_servicio', 'procesar_form_servicio');

function procesar_form_servicio() {

    // 1. Validar nonce
    if (
        !isset($_POST['nonce_servicio']) ||
        !wp_verify_nonce($_POST['nonce_servicio'], 'form_servicio')
    ) {
        wp_die('Error de seguridad');
    }

    // 2. Sanitizar datos
    $empresa  = sanitize_text_field($_POST['empresa']);
    $rut      = sanitize_text_field($_POST['rut']); // Usar sanitize_text_field() si deseas un formato más seguro que sanitize_number_int()
    $email   = sanitize_email($_POST['email_2']);
    $direccion = sanitize_text_field($_POST['direccion']);
    $mensaje  = sanitize_textarea_field($_POST['mensaje_2']);

    $destruccion = isset($_POST['destruccion_identidad'])
    ? sanitize_text_field($_POST['destruccion_identidad'])
    : '';

$volumen = isset($_POST['volumen'])
    ? sanitize_text_field($_POST['volumen'])
    : '';

$tipo_textil = isset($_POST['tipo_textil'])
    ? sanitize_text_field($_POST['tipo_textil'])
    : '';

$productos = [];

if (isset($_POST['maceta'])) $productos[] = 'Maceta';
if (isset($_POST['bloque'])) $productos[] = 'Bloque';
if (isset($_POST['merch']))  $productos[] = 'Merch';
if (isset($_POST['otro']))   $productos[] = 'Otro';

$productos_texto = implode(', ', $productos);

    
    // 3. Configurar headers
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: $empresa <$email>"
    );

    // 4. Email para tu clienta (administradora)
    $admin_email = 'agencia.humana25@gmail.com';  // El correo de la clienta

    $subject_admin = "📩 Nuevo mensaje de cliente";
    $body_admin = <<<EOD
Nuevo mensaje recibido desde el formulario:

Empresa: $empresa
Rut: $rut
Email: $email
Dirección de retiro: $direccion
Destrucción de identidad: $destruccion
Volumen aproximado: $volumen
Tipo de textil: $tipo_textil
Productos de interés: $productos_texto
Mensaje:
$mensaje
EOD;

    wp_mail($admin_email, $subject_admin, $body_admin, $headers);

    // 5. Email de confirmación para el usuario
    $subject_user = "Hemos recibido tu mensaje ✔️";
    $body_user = <<<EOD
Hola $empresa,

Gracias por contactarnos. Hemos recibido tu mensaje y te responderemos pronto.

Copia de tu mensaje:
$mensaje

Saludos,
Recicla2.
EOD;

    wp_mail($email, $subject_user, $body_user, $headers);

    // 6. Redirección final
    wp_redirect(home_url('/gracias/'));
    exit;
}
