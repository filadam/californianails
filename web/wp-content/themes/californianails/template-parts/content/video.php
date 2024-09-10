<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sticky = get_option('sticky_posts');
$args = array(
    'post__in' => $sticky,
);
$query = new WP_Query($args);

?>
<section class="video">
    <div class="overlay container"></div>
    <video playsinline="playsinline" autoplay muted loop>
        <source src="/wp-content/uploads/2021/03/etx.webm" type="video/webm">
    </video>
    <div class="container video-container h-100 p-0">
        <div class="d-flex h-100 align-items-center justify-content-xl-start justify-content-center">
            <div class="video-content">
                <h4 ><?= pll_e('Watch us in action!'); ?></h4>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a href="<?php the_permalink() ?>"><button class="btn btn-primary"><?= pll_e('Read More'); ?></a>
                        <?php
                    endwhile;
                    \wp_reset_postdata()

                    ?>
                </button>
            </div>
        </div>