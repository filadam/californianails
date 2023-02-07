<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="container text-center pt-5 pb-2 about-container">
    <h2><?= pll_e('About Us') ?></h2>
    <?php
    $args = array(
        'post_type' => array('page'),
        'p' => 20,
        'posts_per_page' => 1,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            the_excerpt();
        }
        wp_reset_postdata();
    } else {
        echo "No Pages yet :(";
    }

    ?>
    <a class="text-start" href="<?= get_permalink(20); ?>"><?php pll_e(' Read More»'); ?></a>
    <div>
<?php \get_template_part('template-parts/content/gallery'); ?>
    </div>
</div>