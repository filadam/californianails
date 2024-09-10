<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function parkeringlygten_widgets_init()
{
    register_sidebar(array(
        'name' => 'Footer Center',
        'id' => 'footer_center',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Header Start',
        'id' => 'header_start',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Header End',
        'id' => 'header_end',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Modal Form Widget',
        'id' => 'modal_form_widget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<div class="col-xl-10 offset-xl-1"><h3 class="text-center">',
        'after_title' => '</h3></div>',
    ));
    register_sidebar(array(
        'name' => 'Modal Privacy Form Widget',
        'id' => 'modal_privacy_form_widget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<div class="col-xl-10 offset-xl-1"><h3 class="text-center">',
        'after_title' => '</h3></div>',
    ));
}
add_action('widgets_init', 'parkeringlygten_widgets_init');
