<div class="container-fluid">
    <div class="site-logo"><?php the_custom_logo(); ?></div>
    <input type="checkbox" class="openSidebarMenu p-5" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
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
    </div>
</div>