<?php
// Sidebar register function

function mt_widgets_register() {
    register_sidebar(array(
        'name'=> __('Main Widget area', 'irfatifti'),
        'id'=> 'sidebar-1',
        'description'=> __('Apperas in the sidebar in blog page and also other page','irfatifti'),
        'before_widget' => '<div class="child-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sidebar-title">',
        'after_title' => '</h2">',
    ));
    register_sidebar(array(
        'name'=> __('Footer 1', 'irfatifti'),
        'id'=> 'footer-1',
        'description'=> __('Apperas in the sidebar in blog page and also other page','irfatifti'),
        'before_widget' => '<div class="footer-1">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2">',
    ));
    register_sidebar(array(
        'name'=> __('Footer 2', 'irfatifti'),
        'id'=> 'footer-2',
        'description'=> __('Apperas in the sidebar in blog page and also other page','irfatifti'),
        'before_widget' => '<div class="footer-2">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2">',
    ));
    register_sidebar(array(
        'name'=> __('Footer 3', 'irfatifti'),
        'id'=> 'footer-3',
        'description'=> __('Apperas in the sidebar in blog page and also other page','irfatifti'),
        'before_widget' => '<div class="footer-3">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-title">',
        'after_title' => '</h2">',
    ));
}
add_action('widgets_init','mt_widgets_register');
?>