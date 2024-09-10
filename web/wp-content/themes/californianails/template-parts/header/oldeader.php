<?php
$show_title = (true === get_theme_mod('display_title_and_tagline', true));

?>

<!-- TOP HEADER BAR -->
<div class="container-fluid d-flex align-items-center m-0 p-0 g-0" id="primary-sidebar" role="complementary">
    <div class="top-header scroll-container w-100">
        <div class="scroll-text">
            <?php dynamic_sidebar('header-start'); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row m-0 header-container align-items-center">

        <div class="col-8 col-xl-4 header-logo-area">
            <?php if (has_custom_logo() && $show_title): ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col d-lg-block d-none">
            <p class="header-subtitle text-center align-self-center"></p>
        </div>
        <div class="col-4 d-xl-none text-end">
            <button class="navbar-toggler custom-toggler navbar-light" type="button">
                <span class="navbar-toggler-icon "></span>
            </button>
        </div>

        <div class="col header-nav-area m-0">
            <?php if (has_nav_menu('primary')): ?>
                <nav id="site-navigation" class="navbar navbar-expand-xl navbar-light" role="navigation">
                    <div class="collapse navbar-collapse justify-content-end " id="primary-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav',
                                'add_li_class' => "nav-item",
                                'walker' => new bootstrap_5_wp_nav_menu_walker(),
                            )
                        );

                        ?>
                    </div>
                </nav><!-- #site-navigation -->
            <?php endif; ?>
        </div>

    </div>
</div>