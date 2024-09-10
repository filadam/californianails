<?php
/**
 * The template for displaying front page components.
 *
 * @package WordPress
 */
get_header();

?>
<div class="container-fluid">
    <div class="row m-0">
        <div class="slider p-0">
            <?php get_template_part('template-parts/content/gallery'); ?>
        </div>
    </div>
    <div class="row m-0 ">
        <?php get_template_part('template-parts/content/comments-gallery'); ?>
    </div>
    <div class="row m-0 ">
        <?php get_template_part('template-parts/content/instagram'); ?>
    </div>
    <div class="row m-0 pb-3">
        <div class="slider p-0">
            <?php get_template_part('template-parts/content/news'); ?>
        </div>
    </div>
</div>
<?php
get_footer();