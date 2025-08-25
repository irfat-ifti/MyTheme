<?php
function custom_services(){
    register_post_type("services", array(
        "labels" => array(
            "name" => ("Services"),
            "singular_name" => ("Service"),
            "add_new" => ("Add New Service"),
            "add_new_item" => ("Add New Service"),
            "edit_item" => ("Edit Service"),
            "new_item" => ("New Service"),
            "view_item" => ("View Service"),
            "not_found" => ("We apologize, but the service you are looking for is not currently available or may have been moved. Our team is constantly updating our offerings."),
        ),
        "menu_icon" => "dashicons-randomize",
        "public" => true,
        "publicly_queryable" => true,
        "exclude_form_search" => true,
        "menu_position" => 5,
        "has_archive" => true,
        "hierarchial" => true,
        "show_ui" => true,
        "capability_type" => "post",
        "rewrite" => array("slag" => "services"),
        "supports" => array("title", "thumbnail", "editor"),

    ) );

};
add_action("init", "custom_services");