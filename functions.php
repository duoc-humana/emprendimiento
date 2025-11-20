<?php
/**
 * Funciones del tema
 */

// =========================
//  SOPORTES DEL TEMA
// =========================

add_theme_support('post-thumbnails');
add_theme_support('title-tag'); // Permite que WP gestione el <title>
add_theme_support('automatic-feed-links');

// =========================
//  REGISTRO DE MENÚS
// =========================

function mi_tema_registrar_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'recicla'),
    ));
}
add_action('after_setup_theme', 'mi_tema_registrar_menus');

// =========================
//  WALKER COMPATIBLE BOOTSTRAP 5
// =========================

class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {

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

    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? [] : (array)$item->classes;
        $classes[] = 'nav-item';

        if (!empty($args->has_children)) {
            $classes[] = 'dropdown';
        }

        $class_names = ' class="' . esc_attr(implode(' ', array_filter($classes))) . '"';
        $id_attr = ' id="menu-item-' . esc_attr($item->ID) . '"';

        $output .= $indent . '<li' . $id_attr . $class_names . '>';

        $atts = [];
        $atts['class'] = (!empty($args->has_children)) ? 'nav-link dropdown-toggle' : 'nav-link';
        $atts['href'] = !empty($item->url) ? $item->url : '#';
        if (!empty($args->has_children)) {
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= $item_output;
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        $id_field = $this->db_fields['id'];
        if (is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
