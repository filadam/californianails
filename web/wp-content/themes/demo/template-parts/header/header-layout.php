<?php
$show_title = (true === get_theme_mod('display_title_and_tagline', true));

?>
<div class="container-fluid container-xl">
    <div class=" p-0 pt-5">
        <div class="row header-container align-items-center mb-5 pb-5">

            <div class="col col-xl-4 header-logo-area p-xl-0">
                <?php if (has_custom_logo() && $show_title) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>

            </div>
            <div class="col d-xl-none text-end">
                <button class="navbar-toggler custom-toggler navbar-light p-0" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>
            <div class="col justify-content-end nav-container p-xl-0">
                <div class="row navbar-container">
                    <div class="col">
                        <?php if (has_nav_menu('secondary')) : ?>
                            <nav id="site-navigation" class="navbar navbar-expand-xl navbar-light" role="navigation">
                                <div class="collapse navbar-collapse justify-content-end " id="secondary-menu">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'secondary',
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
                    <div class="col header-nav-area border-gradient m-0">
                        <?php if (has_nav_menu('primary')) : ?>
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
        </div>
    </div>
</div>