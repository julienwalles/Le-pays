<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


// ajouter les feuilles de style et cdn bootstrap 4.6
function lepays_add_style() {

        wp_enqueue_style('style', get_stylesheet_uri() );
      
        wp_enqueue_style( 'bootstrapcss','https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', false, null );

        wp_enqueue_script( 'bootstapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js',
    array('jquery'), false, true);
}

add_action ("wp_enqueue_scripts", 'lepays_add_style');



// ajouter un menu 
function add_menu () {
        register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'add_menu' );

// utiliser bootstrap(ici pour la navbar)
function  register_navwalker () {
       
	  require_once  get_template_directory(). '/class-wp-bootstrap-navwalker.php' ;
          
}
add_action ( 'after_setup_theme' , 'register_navwalker' );

