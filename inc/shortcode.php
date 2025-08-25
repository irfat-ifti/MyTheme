<?php

function textShortcode() {
    return "This is my first shortcode";
};

add_shortcode( "text","textShortcode");

function btnShortcode($atts, $content = null) {
    $values = shortcode_atts(array(
        'src' => '#',
    ),$atts);
    return '<a class="btn btn-danger" href="'.esc_attr($values['src']).'">'. $content . '</a>';
};

add_shortcode( "btn-shortcode","btnShortcode");