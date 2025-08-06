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


// Pagination Function

function mt_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = "";
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var("paged")) $current = 1;
    $args["base"] = str_replace(99999999999, "%#%", get_pagenum_link(99999999999));
    $args["total"] = $max;
    $args["current"] = $current;
    $total = 1;
    $args["prev_text"]= "Prev";
    $args["next_text"]= "Next";
    if($max > 1) echo '</pre><div class="pagenav">'; if($total == 1 && $max > 1) $pages = '<p class="pages bg-warning d-inline-block py-1 px-3"> Page '.$current.'<span> of </span>'.$max. '</p><br>';
    echo $pages . paginate_links($args);
    if($max > 1) echo '</div><pre>';

}