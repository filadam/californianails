<?php

/**
 * Register a post type
 */
function register_post_type_product_init()
{
    $labels = array(
        'name' => __('Products', 'parkeringlygten'),
        'singular_name' => __('Product', 'parkeringlygten'),
        'menu_name' => __('Products', 'parkeringlygten'),
        'all_items' => __('All Products', 'parkeringlygten'),
        'view_item' => __('View Product', 'parkeringlygten'),
        'view_items' => __('View Products', 'parkeringlygten'),
        'add_new_item' => __('Add New', 'parkeringlygten'),
        'add_new' => __('Add New', 'parkeringlygten'),
        'edit_item' => __('Edit Product', 'parkeringlygten'),
        'update_item' => __('Update Product', 'parkeringlygten'),
        'search_items' => __('Search Product', 'parkeringlygten'),
        'not_found' => __('No products found.', 'parkeringlygten'),
        'not_found_in_trash' => __('No products found.', 'parkeringlygten'),
    );

    $args = array(
        'label' => __('Products', 'parkeringlygten'),
        'description' => __('List all products.', 'parkeringlygten'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'page-attributes', 'revisions', 'custom-fields'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-portfolio',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => false,
        'capability_type' => 'post',
        'rewrite' => false,
    );

    register_post_type('product', $args);
}
add_action('init', 'register_post_type_product_init');

/**
 * Return alle products
 * 
 * @return WP_Post[]|int[] Array of post objects or post IDs.
 */
function get_products()
{
    $args = array(
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'product',
    );

    return get_posts($args);
}
