<?php

// Agregar campos personalizados en el panel de administración
add_action('woocommerce_product_options_general_product_data', 'custom_property_fields');
function custom_property_fields() {
    echo '<div class="options_group">';

    // Campo Ubicación
    woocommerce_wp_text_input(array(
        'id' => '_ubicacion',
        'label' => __('Ubicación', 'custom-property-fields'),
        'placeholder' => 'Ej. Las Heras, Mendoza',
        'desc_tip' => 'true',
        'description' => __('Ingresa la ubicación de la propiedad.', 'custom-property-fields')
    ));

    // Campo Dimensión Total
    woocommerce_wp_text_input(array(
        'id' => '_dimension_total',
        'label' => __('Superficie Total (m²)', 'custom-property-fields'),
        'type' => 'number',
        'placeholder' => 'Ej. 230',
        'description' => __('Ingresa la superficie total en metros cuadrados.', 'custom-property-fields')
    ));

    // Campo Dimensión Construida
    woocommerce_wp_text_input(array(
        'id' => '_dimension_construida',
        'label' => __('Superficie Construida (m²)', 'custom-property-fields'),
        'type' => 'number',
        'placeholder' => 'Ej. 200',
        'description' => __('Ingresa la superficie construida en metros cuadrados.', 'custom-property-fields')
    ));

    // Campo Habitaciones
    woocommerce_wp_text_input(array(
        'id' => '_habitaciones',
        'label' => __('Habitaciones', 'custom-property-fields'),
        'type' => 'number',
        'placeholder' => 'Ej. 3',
        'description' => __('Ingresa el número de habitaciones.', 'custom-property-fields')
    ));

    // Campo Baños
    woocommerce_wp_text_input(array(
        'id' => '_banos',
        'label' => __('Baños', 'custom-property-fields'),
        'type' => 'number',
        'placeholder' => 'Ej. 2',
        'description' => __('Ingresa el número de baños.', 'custom-property-fields')
    ));

    // Campo Mapa (iframe de Google Maps)
    woocommerce_wp_textarea_input(array(
        'id' => '_mapa',
        'label' => __('Mapa de Google', 'custom-property-fields'),
        'placeholder' => 'Pega aquí el iframe de Google Maps',
        'description' => __('Ingresa el código iframe de Google Maps para mostrar la ubicación.', 'custom-property-fields')
    ));

    echo '</div>';
}

// Guardar los datos de los campos personalizados
add_action('woocommerce_process_product_meta', 'save_custom_property_fields');
function save_custom_property_fields($post_id) {
    $fields = ['_ubicacion', '_dimension_total', '_dimension_construida', '_habitaciones', '_banos', '_mapa'];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
?>
