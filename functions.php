<?php

// 
function daily_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post_thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En-tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

// importe les liens
function daily_register_asset()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');
    wp_register_script('bootrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', ['popper', 'jqueryB'], null, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js', [], null, true);
    wp_register_script('jqueryB', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// sépare le titre du site et la page
function daily_title_separator($title)
{
    return '|';
}

// récupère le titre du site
function daily_document_title_parts($title)
{
    return $title;
}

// ajoute la class nav-item aux éléments
function daily_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

// rajoute la class nav-link
function daily_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

// appel de fonction
add_action('after_setup_theme', 'daily_supports');
add_action('wp_enqueue_scripts', 'daily_register_asset');
add_filter('document_title_separator', 'daily_title_separator');
add_filter('document_title_parts', 'daily_document_title_parts');
add_filter('nav_menu_css_class', 'daily_menu_class');
add_filter('nav_menu_link_attributes', 'daily_menu_link_class');
