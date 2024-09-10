<?php
/**
 * Template part for displaying default pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package WordPress
 */
//$side = the_field('change_image_side');

?>

<div class="row m-0">
    <?php if (has_post_thumbnail()) { ?>
        <div class="col-xl-<?= (get_field('image_size') == 'big') ? '8' : '4'; ?> p-0 sliders">
            <?php
            if (\get_field('show_image_or_map') == 'map' && !empty(get_field('place_id'))) {
                get_template_part('template-parts/content/map');
            } else {
                get_template_part('template-parts/content/sliders');
            }

            ?>
        </div>
    <?php } ?>
    <div class="col-xl-<?= (get_field('image_size') == 'big') ? '4' : '8'; ?> <?= (get_field('image_position') == 'left') ? 'order-xl-end' : 'order-xl-first'; ?> <?= !has_post_thumbnail() ? (get_field('image_size') == 'big') ? 'offset-xl-4' : 'offset-xl-2' : ''; ?>">
        <article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>
            <div class="entry-content">
                <?php the_title('<h1 class="text-center">', '</h1>'); ?>
                <?php the_content(); ?>
            </div>
        </article>
    </div>
</div>