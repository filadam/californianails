<?php
/**
 * The template for displaying all single posts
 * Template Name: text
 * Template Post Type: post
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Eltex
 */
get_header();

while (have_posts()) :
    the_post();
    get_template_part('template-parts/content/content-single-text');
endwhile;

get_footer();
