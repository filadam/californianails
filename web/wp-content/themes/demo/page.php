<?php
/**
 * The template for displaying default themes
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package WordPress
 */
get_header();

while (have_posts()) :
    the_post();
    get_template_part('template-parts/content/content', 'page');
endwhile;

get_footer();
