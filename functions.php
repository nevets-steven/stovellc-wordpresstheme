<?php
function stove_enqueue_scripts() {
    // Load main WordPress stylesheet
    wp_enqueue_style('stove-style', get_stylesheet_uri());

    // Load custom styles with cache-busting
    wp_enqueue_style(
        'stove-custom-style', 
        get_template_directory_uri() . '/assets/styles/styles.css', 
        array(), 
        filemtime(get_template_directory() . '/assets/styles/styles.css')
    );

    // Load custom JavaScript with cache-busting
    wp_enqueue_script(
        'stove-script', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array(), // Remove 'jquery' if you're not using it
        filemtime(get_template_directory() . '/assets/js/script.js'), 
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'stove_enqueue_scripts');
?>