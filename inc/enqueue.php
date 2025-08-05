<?php
//==============================
//Theme css and js file calling
//==============================

function mt_css_js_file_calling(){
    wp_enqueue_style( "mt-style", get_stylesheet_uri());
    wp_register_style( "bootstrap", get_template_directory_uri()."/css/bootstrap.css", array(), "5.3.7", "all" );
    wp_enqueue_style("bootstrap");
    wp_register_style( "custom", get_template_directory_uri()."/css/custom.css", array(), "1.0.0", "all" );
    wp_enqueue_style("custom");
    wp_enqueue_script("jquery");
    wp_register_script( "bootstrap", get_template_directory_uri()."/js/bootstrap.js", array(),"5.3.7",true);
    wp_enqueue_script("bootstrap");
    wp_register_script( "main", get_template_directory_uri()."/js/main.js", array(),"5.3.7",true);
    wp_enqueue_script("main");
}
add_action("wp_enqueue_scripts","mt_css_js_file_calling");

//Enqueue google fonts

function mt_add_google_fonts(){
    wp_enqueue_style("mt_google_fonts","https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap", false);
}
add_action("wp_enqueue_scripts", "mt_add_google_fonts");