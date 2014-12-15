<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Adds 50for15 favicon
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />';
}
add_action( 'wp_head', 'favicon_link' );