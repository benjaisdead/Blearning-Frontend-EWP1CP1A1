<?php
// Estilos CSS
function dl_enqueue_style() {
$theme_data = wp_get_theme();
/* Registrar estilos */

wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, $theme_data->get( '3.3.7' ));
wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null, $theme_data->get('1.0'));

/* llamar estilos */

wp_enqueue_style('bootstrap_css');
wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'dl_enqueue_style');

// Registrar JS
function dl_enqueue_scripts() {
$theme_data = wp_get_theme();
/* Registrar scripts */

wp_register_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);

/* llamar scripts */

wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap_js');

}
add_action('wp_enqueue_scripts', 'dl_enqueue_scripts');

/* Delete margin-top in html */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

?>
