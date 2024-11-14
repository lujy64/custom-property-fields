<?php
/*
Plugin Name: Campos Personalizados de Propiedades para WooCommerce
Plugin URI:  https://github.com/lujy64/custom-property-fields
Description: Añade campos personalizados para propiedades en WooCommerce y modifica la visualización del producto.
Version: 1.0
Author: Maria Lujan Vaira
Author URI:  https://marialujanvaira.com.ar/
Text Domain: custom-property-fields
*/

// Asegurarse de que WooCommerce esté activo
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

    // Incluir las funciones principales del plugin
    require_once plugin_dir_path(__FILE__) . 'includes/custom-fields.php';
    require_once plugin_dir_path(__FILE__) . 'includes/display-fields.php';

}
?>
