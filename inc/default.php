<?php

//theme title
add_theme_support("title-tag");

// Thumbnail image area
add_theme_support( "post-thumbnails", array("page","post"));
add_image_size( "post-thumbnails", 990, 500, true);

// Excerpt

function excerpt_read_more() {
    return "<br><br><a class='btn btn-sm btn-danger' href='".get_permalink( get_the_ID() )."'>Read more</a>";
}
add_filter("excerpt_more", "excerpt_read_more");

function excerpt_word_length() {
    return 40;
}
add_filter("excerpt_length", "excerpt_word_length");