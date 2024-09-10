<?php
/**
 * The template for displaying archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 */
get_header();

$description = get_the_archive_description();

if (have_posts()) :

    ?>

    <div class="row m-0">
        <div class="col-xl-8 offset-xl-2 order-xl-first">
            <div class="post-content">

                <header class="page-header alignwide">
                    <?php the_archive_title('<h1 class="page-title text-center">', '</h1>'); ?>
                    <?php if ($description) : ?>
                        <div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>
                    <?php endif; ?>
                </header><!-- .page-header -->

                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content/content-excerpt');
                endwhile;

                ?>

            </div>
        </div>
    </div>

    <?php
endif;

get_footer();
