<?php
function stove_enqueue_scripts() {
    // Load main stylesheet (required for WordPress themes)
    wp_enqueue_style('stove-style', get_stylesheet_uri());

    // Load custom styles.css from styles/ folder
    wp_enqueue_style(
        'stove-custom-style', 
        get_template_directory_uri() . '/assets/styles/styles.css', 
        array(), 
        null
    );

    // Load JavaScript file
    wp_enqueue_script(
        'stove-script', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array('jquery'), // Ensure jQuery is available if needed
        null, 
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'stove_enqueue_scripts');

?>
