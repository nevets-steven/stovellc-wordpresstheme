<?php

define('THEME_VERSION', filemtime(get_template_directory() . '/assets/js/script.js'));

function stove_enqueue_scripts() {
    // Load default WordPress stylesheet (style.css in root)
    wp_enqueue_style('stove-style', get_stylesheet_uri());

    // Load custom JS with cache-busting
    wp_enqueue_script(
        'stove-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'stove_enqueue_scripts');