<?php

// Add WP Customize options
function mt_customizer_register($wp_customize){
    //=============
    // Header area
    //=============
    $wp_customize->add_section("mt_header_area", array(
        "title" => __("Header Area", "irfatifti"),
        "description" => "If you want to customize your header area! You can do it from here.",
    ));

    $wp_customize->add_setting("mt_logo", array(
        "default" => get_bloginfo("template_directory") . "/images/logo.png",

    ));

    $wp_customize->add_control(new Wp_Customize_Image_Control($wp_customize,"mt_logo", array(
        "label" => "Upload Image",
        "section" => "mt_header_area",
        "setting" => "mt_logo",
    )));
    //====================
    // menu position area
    //====================
    $wp_customize->add_section("mt_menu_option", array(
        "title" => __("Adjust Menu Position", "irfatifti"),
        "description" => "If you want to Adjust your menu position! You can do it from here."
    ));
    $wp_customize->add_setting("mt_menu_position", array(
        "default" => "right_menu",
    ));
    $wp_customize->add_control("mt_menu_position", array(
        "label" => "Menu Position",
        "description" => "Select your menu position",
        "section"=> "mt_menu_option",
        "setting"=> "mt_menu_position",
        "type"=> "radio",
        "choices"=> array(
            "left_menu" => "Left Menu",
            "right_menu" => "Right Menu",
            "center_menu" => "Center Menu"
        )
    ));

    //====================
    // Footer area
    //====================
    $wp_customize->add_section("mt_footer_area", array(
        "title" => __("Customize Footer", "irfatifti"),
        "description" => "Customize your footer area from here."
    ));
    $wp_customize->add_setting("mt_footer_customize", array(
        "default" => __("Designed & Developed by [Your Name or Company]","irfatifti"),
    ));
    $wp_customize->add_control("mt_footer_control", array(
        "label" => "Footer",
        "description" => "Customize your Footer",
        "section"=> "mt_footer_area",
        "settings"=> "mt_footer_customize",
        "type"=> "text",
    ));
    
    //====================
    // Theme Color customization
    //====================

    $wp_customize->add_section("mt_theme_color_area", array(
        "title" => __("Change Theme Colors", "irfatifti"),
        "description" => "Customize Theme colors from here."

    ));
    $wp_customize->add_setting("mt_primary_color", array(
        "default" => "#ff6b6b",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "mt_primary_color", array(
        "label" => "Primary color",
        "section" => "mt_theme_color_area",
        "settings" => "mt_primary_color",
    )));
    $wp_customize->add_setting("mt_secondary_color", array(
        "default" => "#ffc107",
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "mt_secondary_color", array(
        "label" => "Secondary color",
        "section" => "mt_theme_color_area",
        "settings" => "mt_secondary_color",
    )));

}

add_action("customize_register","mt_customizer_register");

function apply_user_colors_to_theme() {
    ?>
<style>
:root {
    --primary: <?php echo get_theme_mod("mt_primary_color");
    ?>;
    --secondary: <?php echo get_theme_mod("mt_secondary_color");
    ?>;
}
</style>
<?php

}

add_action("wp_head", "apply_user_colors_to_theme");