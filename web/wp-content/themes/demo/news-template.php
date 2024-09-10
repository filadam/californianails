<?php
/* Template Name: News Template */

// the query
$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
\get_header();

?>
<div class='container justify-content-center'>
    <div class='row '>
        <div class="card-group">
            <?php if ($wpb_all_query->have_posts()) : ?>

                <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>

                    <div class="card" style="width: 18rem;">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?= get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?= _e('Read More'); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?> 

            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            </div>
        </div>
    </div>
<?php
endif;
get_footer();

?>