<div class="container-fluid custom-nav">
    <div class="wrapper-container d-flex">
        <!-- <div class="top-widget"></div> -->
        <div class="site-logo col p-2">
            <!-- <?php the_custom_logo(); ?> -->
            <span><a href="/">CALIFORNIA BEAUTY</a></span>
        </div>
        <div class="icons-wrapper col-3 d-md-flex d-none">
            <ul class="p-0 m-0">
                <?php foreach (['booksy', 'facebook', 'instagram', 'tik-tok'] as $icon): ?>
                    <li>
                        <a href="<?php
                        switch ($icon) {
                            case 'booksy':
                                echo 'http://calbeauty.booksy.com/';
                                break;
                            case 'facebook':
                                echo 'https://www.instagram.com/californiaszczecin/';
                                break;
                            case 'instagram':
                                echo 'https://www.instagram.com/californiaszczecin/';
                                break;
                            case 'tik-tok':
                                echo 'https://www.tiktok.com/@milenainstruktor';
                                break;
                        }
                        ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?= $icon ?>.png">
                        </a>
                    </li>
                <?php endforeach; ?>
                <button class="p-0 p-2">
                    <a
                        href="https://booksy.com/pl-pl/110410_california-beauty_paznokcie_18078_szczecin?do=invite&_branch_match_id=1094214048942313081&utm_medium=merchant_customer_invite&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXT07J0UvKz88urtRLzs%2FVL05OTTaNMkmMqEoCAHEsU1UiAAAA">
                        ZAREZERWUJ TERAZ
                    </a>
                </button>
            </ul>
        </div>

        <div class="nav-wrapper col-1 p-2">
            <input type="checkbox" class="openSidebarMenu p-5" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle pt-1">
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>
            <div id="sidebarMenu">
                <ul class="sidebarMenuInner">
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
                </ul>
                <div class="bottom-site-logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
        </div>
    </div>
</div>