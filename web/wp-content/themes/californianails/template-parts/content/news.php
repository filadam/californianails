<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container-fluid news-container p-0 d-md-block d-none">
    <!-- <h2 class="text-center"><?= "News" ?></h2> -->
    <div class="row">
        <div class="col-lg-7 pe-3">

            <?php
            $sticky = get_option('sticky_posts');
            $args = array(
                'posts_per_page' => 1,
                'post__in' => $sticky,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()):
                $query->the_post();

                ?>
                <div class="card news-card h-100 w-100 text-center"
                    style="background-image: url('<?= the_post_thumbnail_url('medium_large') ?>')">
                    <div class="card-body">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <p class="card-text">
                        <?= the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary align-self-center"><?= 'Czytaj więcej' ?></a>
                    </div>
                </div>
                <ul>
                    <?php
            endwhile;
            wp_reset_postdata();

            ?>
            </ul>
        </div>
        <div class="col-lg news-list order-last order-sm-0 ps-0">
            <ul>
                <li class="d-flex justify-content-center align-items-center" style="background-image: url('<?= the_post_thumbnail_url('full') ?>')">
                    <a class="news" href="<?= the_permalink() ?>/aktualnosci-i-wydarzenia/">AKTUALNOŚCI I WYDARZENIA</a>
                </li>
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'ignore_sticky_posts' => true,
                );
                $the_query = new WP_Query($args);

                ?>
                <?php while ($the_query->have_posts()):
                    $the_query->the_post(); ?>
                    <li class="">
                        <a class="btn btn-primary" href="<?php the_permalink() ?>"><h4 class="m-0"><?php the_title(); ?></h4></a>
                         <?php // the_excerpt(); ?>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();

                ?>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid news-container p-0 d-md-none d-block">
    <!-- <h2 class="text-center"><?= "News" ?></h2> -->
    <div class="row">
        <div class="col-lg-7 pe-3">

            <?php
            $sticky = get_option('sticky_posts');
            $args = array(
                'posts_per_page' => 1,
                'post__in' => $sticky,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()):
                $query->the_post();

                ?>
                <div class="card news-card h-100 w-100 text-center"
                    style="background-image: url('<?= the_post_thumbnail_url('medium_large') ?>')">
                    <div class="card-body">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <p class="card-text">
                        <?= the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary align-self-center"><?= 'Czytaj więcej' ?></a>
                    </div>
                </div>
                <ul>
                    <?php
            endwhile;
            wp_reset_postdata();

            ?>
            </ul>
        </div>
    </div>
</div>