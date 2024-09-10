<?php if (is_active_sidebar('footer_center')) : ?>

    <div class="container widget-sidebar">
        <div class="row m-0 w-100">
            <div class="col primary-sidebar widget-area" id="primary-sidebar" role="complementary">
                <?php dynamic_sidebar('footer_center'); ?>
            </div>
            <div class="col-xl footer-logo">
                <?= get_custom_logo() ?>
            </div>
        </div>
    </div>

<?php endif; ?>