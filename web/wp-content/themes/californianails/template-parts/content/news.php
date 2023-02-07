<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class ="container news-container pt-5 p-0">
    <h2 class="text-center"><?= pll_e("News") ?></h2>
    <div class="row">
        <div class="col-lg">

            <?php
            $sticky = get_option('sticky_posts');
            $args = array(
                'posts_per_page' => 1,
                'post__in' => $sticky,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) : $query->the_post();

                ?>
                <div class="card news-card h-100 w-100 text-center" style="background-image: url('<?= the_post_thumbnail_url('medium_large') ?>')">
                    <div class="card-body">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        <p class="card-text"><?php the_excerpt(__('(more…)')); ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary align-self-center"><?= pll_e('Read More') ?></a>
                    </div>
                </div>
                <ul>
                    <?php
                endwhile;
                wp_reset_postdata();

                ?>
            </ul>
        </div>
        <div class="col-lg news-list order-last order-sm-0">
            <ul>
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'ignore_sticky_posts' => true,
                );
                $the_query = new WP_Query($args);

                ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li><h5 class="pt-2 m-0"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5></li>
                    <li><?php the_excerpt(); ?><a href="<?php the_permalink() ?>"><?php pll_e(' Read More»'); ?></a></li>
                    <?php
                endwhile;
                wp_reset_postdata();

                ?>
            </ul>
        </div>
    </div>
</div>
