<?php
//INCLUDES

//HOOKS

//carregar css e js
function fr_scripts(){
    wp_enqueue_style('main',urlFile('style.css'));
    wp_enqueue_style('font-awesome',urlFile('fontawesome/css/all.css'));
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrapjs','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',array(), '5.3.3', true);
}

function url($anexo){
    echo get_template_directory_uri()."/".$anexo;
}

function urlFile($anexo){
    return get_template_directory_uri()."/".$anexo;
}

function linque($url){
    echo get_permalink(get_page_by_path($url)); 
}

//
function fr_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom_logo');
    add_theme_support('post_thumbnails');
    register_nav_menu('primary',__('Menu Principal','CRT-ES'));
}

add_action('wp_enqueue_scripts','fr_scripts');
//adicionar recursos do wp
add_action('after_setup','fr_theme_support');