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

//In order to register category sidebar
register_sidebar(array(
	'name' => __('Site description', 'sight'),
	'before_widget' => '<div class="site-description">',
	'after_widget' => '</div>'
));
register_sidebar(array(
	'name' => __('Sidebar', 'sight'),
	'before_widget' => '<div id="%1$s" class="%2$s widget">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="widget-body clear">'
));
register_sidebar(array(
	'name' => 'cat',
	'before_widget' => '<div id="%1$s" class="%2$s widget">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3>',
	'after_title' => '</h3><div class="widget-body clear">'
));


//Exclude categories from widget. See https://wordpress.org/support/topic/excluding-category-from-widget
function exclude_widget_categories($args){
$exclude = "451,502,528"; // The IDs of the excluding categories
$args["exclude"] = $exclude;
return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");

?>