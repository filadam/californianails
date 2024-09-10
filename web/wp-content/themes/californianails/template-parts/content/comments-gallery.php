<?php
$comments = array(
    get_field('gallery-comments'),
    get_field('gallery-comments-2'),
    get_field('gallery-comments-3'),
    get_field('gallery-comments-4'),
    // get_field('gallery-comments-5'),
);
?>

<div class="comment-section col-12 col-md-6">
    <div class="row">
        <div class="col-md mb-3 p-0 booksy">
            <div class="wrapper">
                <div class="button-wrapper">
                    <!-- <div class="text-wrapper"> -->
                    <div class="card m-1" style="max-width: 540px;">
                        <div class="row h-100 g-0">
                            <div class="card-body pt-1 pb-3">
                                <div class="row">
                                </div>
                                <!-- <p class="card-text col body-whom">
                                    <small class="text-body-secondary">
                                        Nadesłał(a): Ania
                                    </small>
                                </p> -->
                                <p class="card-text body-text">
                                    <small class="text-body-secondary">
                                        <!-- <h5 class="m-0"> -->
                                        Ponad <b style="font-size:32px; color:#26cbc5;">200</b> pozytywnych
                                        opinii na <img class="img-fluid m-3" alt="booksy logo"
                                            src="wp-content\themes\californianails\assets\img\booksyf.svg" />
                                        <!-- </h5> -->
                                        <script class="booksy-button" type="text/javascript"
                                            src="https://booksy.com/widget/code.js?id=110410&country=pl&lang=pl">
                                            </script>
                                    </small>
                                </p>
                                <div class="row">
                                    <div class="col body-stars">
                                        <b style="margin-right: 5px;">5/5</b>
                                        <img src="wp-content\themes\californianails\assets\img\star.svg"
                                            class="img-fluid" alt="...">
                                        <img src="wp-content\themes\californianails\assets\img\star.svg"
                                            class="img-fluid" alt="...">
                                        <img src="wp-content\themes\californianails\assets\img\star.svg"
                                            class="img-fluid" alt="...">
                                        <img src="wp-content\themes\californianails\assets\img\star.svg"
                                            class="img-fluid" alt="...">
                                        <img src="wp-content\themes\californianails\assets\img\star.svg"
                                            class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <img class="phone" src="wp-content\themes\californianails\assets\img\californiaphone.png"
                        alt="booksy iphone" />
                    <div class="card-group mt-3">
                        <?php foreach ($comments as $comment) { ?>
                            <div class="card m-1" style="max-width: 540px;">
                                <div class="row h-100 g-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <p class="card-text col body-whom">
                                                <small class="text-body-secondary">
                                                    Nadesłał(a):
                                                    <?= $comment['name'] ?>
                                                </small>
                                            </p>
                                        </div>
                                        <p class="card-text body-text">
                                            <small class="text-body-secondary">
                                                <?= $comment['body'] ?>
                                            </small>
                                        </p>
                                        <div class="row">
                                            <!-- <div class="col body-image">
                                        <img src="<?= isset($comment['image']) ? $comment['image'] : 'wp-content\themes\californianails\assets\img\placeholder.jpg' ?>"
                                            class="img-fluid" alt="...">
                                        <img src="<?= isset($comment['image-2']) ? $comment['image'] : 'wp-content\themes\californianails\assets\img\placeholder.jpg' ?>"
                                            class="img-fluid" alt="...">
                                        <img src="<?= isset($comment['image-3']) ? $comment['image'] : 'wp-content\themes\californianails\assets\img\placeholder.jpg' ?>"
                                            class="img-fluid" alt="...">
                                    </div> -->
                                            <div class="col body-stars">
                                                <img src="wp-content\themes\californianails\assets\img\star.svg"
                                                    class="img-fluid" alt="...">
                                                <img src="wp-content\themes\californianails\assets\img\star.svg"
                                                    class="img-fluid" alt="...">
                                                <img src="wp-content\themes\californianails\assets\img\star.svg"
                                                    class="img-fluid" alt="...">
                                                <img src="wp-content\themes\californianails\assets\img\star.svg"
                                                    class="img-fluid" alt="...">
                                                <img src="wp-content\themes\californianails\assets\img\star.svg"
                                                    class="img-fluid" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<div class="col-12 col-md-6 about mb-3 p-3">
    <div class="row">
        <h4>ZAPYTAJ O SZKOLENIE</h4>
        <div class="col" style="display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    align-items: stretch;
    ">
            <p>
                Nazywam się Milena Adamczyk w świecie stylizacji paznokci odnajduje swoje prawdziwe powołanie. Jako
                instruktorka marki Silcare, dzielę się swoją wiedzą i pasją z innymi, prowadząc profesjonalne szkolenia
                ze stylizacji paznokci. Mam szerokie doświadczenie w branży i doskonale znam tajniki tworzenia pięknych
                i trwałych paznokci. Podczas prowadzenia szkoleń, stawiam na indywidualne podejście do uczestników.
                Zawsze staram się zrozumieć ich potrzeby, aby móc dostosować program szkolenia do ich oczekiwań. Moja
                cierpliwość, profesjonalizm i umiejętność przekazu są bardzo cenione przez moich kursantów. Szkolenia
                prowadzone przeze mnie są nie tylko doskonałą okazją do nauki, ale również niezapomnianym doświadczeniem
                dla wszystkich, którzy pragną pogłębić swoje umiejętności w dziedzinie stylizacji paznokci.
            </p>
            <div class="brand-wrapper">
                <img src="wp-content\themes\californianails\assets\img\SZKOLENIA\g3619.png" />
                <img src="wp-content\themes\californianails\assets\img\SZKOLENIA\g3581.png" />
                <img src="wp-content\themes\californianails\assets\img\SZKOLENIA\g3577.png" />
            </div>
        </div>
        <div class="col mt-5 mt-md-0">
            <?= do_shortcode('[contact-form-7 id="222" title="Szkolenia"]') ?>
        </div>
    </div>
</div>