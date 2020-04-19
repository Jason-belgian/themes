<?php

// This is a change

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	Function bridge_qode_child_theme_enqueue_scripts() {
		wp_register_style('bridge-childstyle', get_stylesheet_directory_uri() . '/style.css');
		wp_enqueue_style('bridge-childstyle');
	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}

add_action('wp_enqueue_scripts', 'my_select_dropdown');
function my_select_dropdown() {
if( is_shop() || is_product_category() ) {
wp_enqueue_style( 'select2');
wp_enqueue_script( 'selectinit', get_stylesheet_directory_uri() . '/js/select2-init.js', array( 'selectWoo' ), '1.0.0', true );
        }
}
