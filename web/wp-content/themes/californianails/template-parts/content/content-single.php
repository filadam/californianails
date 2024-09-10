<?php
/**
 * Template part for displaying default pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package WordPress
 */
$featured_image = get_the_post_thumbnail_url();
$val = get_field('subpage-gallery');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 col-md m-0 post-img d-flex align-items-end justify-content-start flex-column"
                style=" background-image: url('<?= $featured_image ?>'); background-position: center; background-repeat: no-repeat; background-size: cover; min-height: 70vh;">
            </div>
            <div class="col p-0 m-0 m-0 ms-0 g-0">

                <div class="row row-cols-1 row-cols-xl-3 g-0">
                    <div class="col bg-dark col-card  p-0 m-0 g-0">
                        <div class="card h-100 text-bg-dark p-3">
                            <?php the_title('<h4 class="entry-title">', '</h4>'); ?>
                            <?= the_content(); ?>
                        </div>
                    </div>
                    <?php
                    foreach ($val as $key => $v) {
                        $image = $v;
                        $ext = (new SplFileInfo($v))->getExtension();
                        ?>
                        <div class="col p-0 m-0 g-0">
                            <div class="card <?= $ext == 'jpeg' ? '' : 'video' ?> text-bg-dark">
                                <?php
                                if ($ext == 'jpeg') {
                                    echo '<img src="' . $v . '" class="card-img" alt="...">';
                                } else if ($ext == 'jpg') {
                                    echo '<img src="' . $v . '" class="card-img" alt="...">';
                                } else {
                                    echo '<video src="' . $v . '" autoplay muted loop playsinline></video>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php } ?>
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