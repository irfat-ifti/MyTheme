<?php 

/*
My theme functions
*/


//theme title
add_theme_support("title-tag");

//Theme css and js file calling

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

// Add Header customize options

function mt_customizer_register($wp_customize){
    $wp_customize->add_section("mt_header_area", array(
        "title" => __("Header Area", "irfatifti"),
        "description" => "If you want to customize your your header area! You can do it from here.",
    ));

    $wp_customize->add_setting("mt_logo", array(
        "default" => get_bloginfo("template_directory") . "/images/logo.png",

    ));

    $wp_customize->add_control(new Wp_Customize_Image_Control($wp_customize,"mt_logo", array(
        "label" => "Upload Image",
        "section" => "mt_header_area",
        "setting" => "mt_logo",
    )));
}

add_action("customize_register","mt_customizer_register");