<?php
/**
 * Plugin Name: Analogo Font Awesome
 * Plugin URI: https://www.venganza-analogo.test/
 * Description: Plugin creado para agregar Font Awesome EXCLUSIVO para La venganza del Análogo
 * Version: 1.0
 * Author: Pablo Pérez Martínez
 * Author URI: http://github.com/profeshor
 **/

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}
