<?php

/**
 * The template for displaying front page components.
 *
 * @package WordPress
 */
get_header()
?>
<div class="container-fluid m-0 p-0 gallery">
    <div class="d-none d-xl-flex">
        <?php get_template_part('template-parts/header/header-layout'); ?>
    </div>
    <div class="d-flex d-xl-none">
            <?php get_template_part('template-parts/header/mobile-header-layout'); ?>
        </div>
        <div class="container-fluid">
            <div class="row pb-5 m-0">
                <div class="container p-0">
                    <?php get_template_part('template-parts/content/gallery'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-xl">
        <?php get_template_part('template-parts/content/about'); ?>
    </div>