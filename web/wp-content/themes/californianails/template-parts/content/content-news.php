<?php
$featured_image = get_the_post_thumbnail_url();
$val = get_field('subpage-gallery');


$args = array(
    'posts_per_page' => 3,
    'ignore_sticky_posts' => true,
);
$the_query = new WP_Query($args);

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md m-0 post-img d-flex align-items-end justify-content-start flex-column"
                style=" background-image: url('<?= $featured_image ?>'); background-position: center; background-repeat: no-repeat; background-size: cover; min-height: 70vh;">
            </div>
            <div class="col p-0 m-0 m-0 ms-0 g-0">

                <div class="row row-cols-1 row-cols-xl-3 g-0">
                    <div class="col bg-dark col-card  p-0 m-0 g-0">
                        <div class="card h-100 text-bg-dark p-3 img-box">
                            <?php the_title('<h4 class="entry-title">', '</h4>'); ?>
                            <?= the_content(); ?>
                        </div>
                    </div>
                    <?php
                    while ($the_query->have_posts()):
                        $the_query->the_post();
                        ?>
                        <div class="col p-0 m-0 g-0 img-box">
                            <div class="card text-bg-dark">
                                <img src="<?= the_post_thumbnail_url('full') ?>" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <?php the_title('<h4 class="card-title">', '</h4>'); ?>
                                    <a href="<?php the_permalink() ?>" class="btn btn-primary align-self-center"><?= 'Czytaj więcej' ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>

                <footer class="entry-footer default-max-width">
                </footer><!-- .entry-footer -->
                <?php if (!is_singular('attachment')): ?>
                    <?php get_template_part('template-parts/post/author-bio'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->