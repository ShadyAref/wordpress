<?php 
// Custom Post Type Registration
function custom_project_post_type() {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'Projects', // Plural name for the project type
            'singular_name' => 'Project', // Singular name for the project type
        ),
        'public' => true, // Make the project type publicly accessible
        'has_archive' => true, // Enable project type archives
        'supports' => array('title', 'editor', 'thumbnail'), // Enable specified features for the project type
    ));
}

// Hook to register the custom project type on initialization
add_action('init', 'custom_project_post_type'); 

// Enqueue Styles
function enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}

// Hook to enqueue styles on the front-end
add_action('wp_enqueue_scripts', 'enqueue_styles'); 
?>
