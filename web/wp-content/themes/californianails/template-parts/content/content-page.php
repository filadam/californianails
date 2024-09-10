<?php
/**
 * Template part for displaying default pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package WordPress
 */
$id = get_the_ID();
if ($id == "236") {
    get_template_part('template-parts/content/content-news');
} else {
    get_template_part('template-parts/content/content-default');
}
?>