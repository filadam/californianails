<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="container pt-5 pb-5">
    <div class="row" >
        <div class ="col-md-4 p-0 pe-3">
            <h2><?= pll_e('Contact Us') ?></h2>
            <?php
            if (pll_current_language() == 'pl') {
                echo do_shortcode('[contact-form-7 id="122" title="Contact PL"]');
            } else {
                echo do_shortcode('[contact-form-7 id="86" title="Contact form 1"]');
            }

            ?>
        </div>
        <div class ="col-md-8 p-0 order-last">
            <h2><?= pll_e('Find Us') ?></h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2377.616659500317!2d14.585689016055042!3d53.421681579994974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa09bac5bd7cfd%3A0x62bedf1afef4e2b4!2sKsi%C4%99dza%20Stanis%C5%82awa%20Kujota%2018%2C%2070-605%20Szczecin!5e0!3m2!1spl!2spl!4v1616690519051!5m2!1spl!2spl" 
                    width="100%"
                    height="450" 
                    style="border:0;" 
                    allowfullscreen=""></iframe>
        </div>
    </div>
</div>