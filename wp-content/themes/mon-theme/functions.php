<?php 
function mon_theme_register_assets() {
    // Déclarer le JS Bootstrap
	wp_enqueue_script( 
        'mon-theme-script-bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', 
        array(), 
        '5.3.2',
        true
    );

    // Fichier CSS Bootstrap
    wp_enqueue_style( 
        'mon-theme-bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(), 
        '5.3.2'
    );

    // Fichier CSS
    wp_enqueue_style( 
        'mon-theme-style', 
        get_template_directory_uri() . '/assets/css/style.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'mon_theme_register_assets' );


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// déclarer 2 emplacements pour les menus
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_image_size( 'pano', 400, 200, false );