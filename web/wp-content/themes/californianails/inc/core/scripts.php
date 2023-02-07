<?php

/**
 * Disable the emoji's
 */
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
}

/**
 * Enqueue scripts and styles.
 */
function add_scripts()
{
    wp_enqueue_script('wp-util');

    wp_enqueue_style('eltex-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

    if ('production' == WP_ENV) {
        wp_enqueue_style('eltex-main', get_template_directory_uri() . '/assets/dist/css/main.min.css', array(), wp_get_theme()->get('Version'));

        wp_enqueue_script('eltex-vendor', get_template_directory_uri() . '/assets/dist/js/vendors.bundle.min.js', array(), wp_get_theme()->get('Version'), true);
        wp_enqueue_script('eltex-main', get_template_directory_uri() . '/assets/dist/js/main.bundle.min.js', array('eltex-vendor'), wp_get_theme()->get('Version'), true);
    } else {
        wp_enqueue_style('eltex-main', get_template_directory_uri() . '/assets/css/main.css', array(), wp_get_theme()->get('Version'));

        wp_enqueue_script('eltex-vendor', get_template_directory_uri() . '/assets/js/vendors.bundle.js', array(), wp_get_theme()->get('Version'), true);
        wp_enqueue_script('eltex-main', get_template_directory_uri() . '/assets/js/main.bundle.js', array('eltex-vendor'), wp_get_theme()->get('Version'), true);
    }

    wp_localize_script('eltex-main', 'eltex_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'add_scripts', 20);

/**
 * Adds scripts to head
 */
function add_head()
{

    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
    <?php
}
add_action('wp_head', 'add_head');
