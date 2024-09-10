<?php
$val = get_field('image-group');
// print_r(array_keys($val));
?>

<div class="gallery-carousel col-12 mb-3">
    <div class="gallery-container ">
        <ul class="hs full col-12">
            <?php
            foreach ($val as $key => $v) {
                $image = $v;
                ?>
                <?php if (!empty($image)) { ?>
                    <li class="item" style="background-image:url('<?= $image; ?>')">

                        <?php
                        switch ($key) {
                            case 'image-1':
                                echo '<a href="/paznokcie"><span class="nails">PAZNOKCIE</span></a>';
                                break;
                            case 'image-2':
                                echo '<a href="/make-up"><span class="makeup">MAKIJAŻ</span></a>';
                                break;
                            case 'image-3':
                                echo '<a href="/szkolenia"><span class="course">SZKOLENIA</span></a>';
                                break;
                        }
                        ?>
                    </li>
                <?php } ?>
            <?php } ?>
            <li class="item d-block d-md-none" style="background-image:url('')">
                <a href="https://californiabeauty.pl/4-miesieczna-szkola-stylizacji-paznokci-mileny-adamczyk-silcare/"><span
                        class="nails">4 MIESIĘCZNA SZKOŁA STYLIZACJI PAZNOKCI MILENY ADAMCZYK INSTRUKTOR</span></a>
            </li>
        </ul>
    </div>
</div>