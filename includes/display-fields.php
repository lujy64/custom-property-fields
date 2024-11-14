<?php

// Mostrar los campos personalizados en la página de producto
add_action('woocommerce_single_product_summary', 'display_custom_property_fields', 25);
function display_custom_property_fields() {
    global $product;

    $ubicacion = get_post_meta($product->get_id(), '_ubicacion', true);
    $dimension_total = get_post_meta($product->get_id(), '_dimension_total', true);
    $dimension_construida = get_post_meta($product->get_id(), '_dimension_construida', true);
    $habitaciones = get_post_meta($product->get_id(), '_habitaciones', true);
    $banos = get_post_meta($product->get_id(), '_banos', true);
    $mapa = get_post_meta($product->get_id(), '_mapa', true);

    echo '<div class="custom-property-details">';
    if ($ubicacion) {
        echo '<p><strong>Ubicación:</strong> ' . esc_html($ubicacion) . '</p>';
    }
    if ($dimension_total) {
        echo '<p><strong>Superficie Total:</strong> ' . esc_html($dimension_total) . ' m²</p>';
    }
    if ($dimension_construida) {
        echo '<p><strong>Superficie Construida:</strong> ' . esc_html($dimension_construida) . ' m²</p>';
    }
    if ($habitaciones) {
        echo '<p><strong>Habitaciones:</strong> ' . esc_html($habitaciones) . '</p>';
    }
    if ($banos) {
        echo '<p><strong>Baños:</strong> ' . esc_html($banos) . '</p>';
    }
    if ($mapa) {
        echo '<div class="product-map">' . $mapa . '</div>';
    }
    echo '</div>';
}

?>
