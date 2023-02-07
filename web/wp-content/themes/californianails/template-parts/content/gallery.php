<?php
$fields_array = array(
    "image-1",
    "image-2",
    "image-3",
    "image-4",
    "image-5",
);

?>
<div class="col d-flex justify-content-between brand-container">
    <?php
    foreach ($fields_array as $value) {
        if (have_rows($value)):
            while (have_rows($value)): the_row();
                $image = get_sub_field('image');
                ?>
                <?php if (!empty($image)) { ?>
                    <img src="<?= $image; ?>" class="img-thumbnail align-self-center" alt="...">
                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php } ?>

</div>