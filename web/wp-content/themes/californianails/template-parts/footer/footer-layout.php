<?php if (is_active_sidebar('footer_center')): ?>
    <div class="container-fluid g-0 pt-3 pb-3 footer">
        <div class="row flex-column flex-md-row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex d-md-flex">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.2197980703736!2d14.53392437701563!3d53.42877816855213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa093cf6d53ba3%3A0xacedcae5d9f9f6c8!2sJana%20Karola%20Chodkiewicza%209%2C%2070-344%20Szczecin!5e0!3m2!1spl!2spl!4v1684269322676!5m2!1spl!2spl"
                            width="100%" height="250px" style="border:0; border-radius:10px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="col-12 col-md mt-5 mt-md-0 contact">
                        <ul class="p-0">
                            <h4>KONTAKT</h4>
                            <li>
                                <span class="icon phone-icon">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>\assets\img\icons-footer\phone.png" />
                                    <a href="tel:509134114"> 509134114</a>
                                </span>
                            </li>
                            <li>
                                <span class="icon email-icon">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>\assets\img\icons-footer\email.png" />
                                    <a href="mailto:salon@californiabeauty.pl">salon@californiabeauty.pl</a>
                                </span>
                            </li>
                            <?php foreach (['booksy', 'facebook', 'instagram', 'tik-tok'] as $icon): ?>
                                <li>
                                    <span class="icon <?= $icon ?> email-icon">
                                        <img style=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/<?= $icon ?>.png">
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
                                            <?= $icon ?>
                                        </a>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-12 col-md mt-4 mt-md-0 short">
                        <h4>NA SKRÓTY</h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav footer-nav',
                                'add_li_class' => "nav-item",
                                'walker' => new bootstrap_5_wp_nav_menu_walker(),
                            )
                        );

                        ?>
                    </div>
                </div>

            </div>
            <div class="col footer-brands">
                <img src="<?php echo get_template_directory_uri(); ?>\assets\img\california beauty logo.png" />
                <img src="<?php echo get_template_directory_uri(); ?>\assets\img\SZKOLENIA\g3577.png" />
            </div>
            <!-- <div class="col-3">

            </div> -->
        </div>

    </div>

<?php endif; ?>