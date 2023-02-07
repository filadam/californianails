<?php
/**
 * The template for displaying front page components.
 *
 * @package WordPress
 */
get_header();

?>
<div class="container">
    <div class="row m-0">
        <div class="slider">
            <?php get_template_part('template-parts/content/video'); ?>
        </div>
    </div>
    <div class="row m-0">
        <?php get_template_part('template-parts/content/about'); ?>
    </div>
    <div class="row m-0">
        <?php get_template_part('template-parts/content/news'); ?>
    </div>
    <div class="row m-0">
        <?php get_template_part('template-parts/content/contact-us'); ?>
    </div>
</div>
<?php
get_footer();
