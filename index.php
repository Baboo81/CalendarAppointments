<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS : Leaflet.js -->
	    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />
        <!--Link styles-->
        <link rel="stylesheet" href="./assets/styles/normalize.css">
        <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/styles/styles.css">
        <link rel="stylesheet" href="./assets/sass/Calendar.css">
        <link rel="stylesheet" href="./assets/sass/Card.css">
        <link rel="stylesheet" href="./assets/sass/slider.css">
        <link rel="stylesheet" href="./assets/sass/Accordion.css">
        <link rel="stylesheet" href="./assets/sass/Dandelion.css">
        <link rel="stylesheet" href="./assets/sass/Carousel.css">
        <link rel="stylesheet" href="./assets/sass/Footer.css">
        <!--Script Leaflet-->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <!--Scripts, libraries, framework JS-->
        <script src="./assets/scripts/jQuery3.7.0.js" defer></script>
        <script src="./assets/scripts/bootstrap.bundle.min.js" defer></script>
        <script src="./assets/scripts/main.js" defer></script>
        <script src="./assets/scripts/slider.js" defer></script>
        <script src="./assets/scripts/carousel.js" defer></script>
        <title>Calendar</title>
    </head>
    <body>
        <header>
        <!-- Hero -->
            <section class="et-hero-tabs">
                <h1>STICKY SLIDER NAV</h1>
                <h3>Sliding content with sticky tab nav</h3>
                <div class="et-hero-tabs-container">
                    <a class="et-hero-tab" href="#tab-es6">Accueil</a>
                    <a class="et-hero-tab" href="#tab-flexbox">Soins</a>
                    <a class="et-hero-tab" href="#tab-react">Contactez-moi</a>
                    <a class="et-hero-tab" href="#tab-angular">Rendez-vous</a>
                    <a class="et-hero-tab" href="#tab-other">Other</a>
                    <span class="et-hero-tab-slider"></span>
                </div>
            </section>

            <!-- Main -->
            <main class="et-main">
                <section class="et-slide" id="tab-es6">
                    <img id="logo" src="./assets/img/svg/Logo.svg" alt="logo pissenlit">
                </section>
                <section class="et-slide" id="tab-flexbox">
                    <h1>Soins</h1>
                    <h3>Soins & tarifs</h3>
                </section>
                <section class="et-slide" id="tab-react">
                    <h1>Contactez-moi</h1>
                    <h3>Contactez-moi</h3>
                </section>
                <section class="et-slide" id="tab-angular">
                    <h1>Rendez-vous</h1>
                    <h3>Agenda</h3>
                </section>
                <section class="et-slide" id="tab-other">
                    <h1>Other</h1>
                    <h3>something about other</h3>
                </section>
            </main>
        </header>

       <main class="container-fluid" id="mainContent">
            <section>
                <div class="d-flex" id="accueil">
                    <!--Animation dandelion-->
                    <div id="dandelionBloc">
                        <div>
                            <img id="dandelion1" src="" alt="">
                        </div>
                        <div>
                            <img id="dandelion2" src="" alt="">
                        </div>
                        <div>
                            <img id="dandelion3" src="" alt="">
                        </div>
                    </div>
                    <!--Animation END-->
                    <section id="presentation" class="p-4">
                            <p>Bienvenue chez Soin de Soie, un magnifique institut dédié au bien-être et à la beauté, installé à Braine l'Alleud.</p>
                            <p>Vous aurez la chance d'être accueillis par Marie, avec un oeil professionnel et à l'écoute, qui vous proposera de nombreuses prestations afin de sublimer et mettre en valeur votre beauté, de la tête aux pieds.</p>
                    </section>
                    <!--Slider Pictures-->
                    <section class="Slideshow">
                        <div class="Slideshow-Content">
                            <img src="./assets/img/img1.webp" alt="" />
                            <img src="./assets/img/img2.webp" alt="" />
                            <img src="./assets/img/img3.webp" alt="" />
                            <img src="./assets/img/img4.webp" alt="" />
                        </div>
                    </section>
                    <!--Slider Pictures END-->
                </div>
            </section>
<!------------------------------------------------------------------------------------------------------------------->
            <section>
                <!--Accordeon-->
                <section class="accordion p-4" id="accordionCares">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h1 class="mx-4">Teinture De Cils Et Sourcil</h1>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parents="#accordionCares">
                            <div class="accordion-body">
                                <strong>Teinture des sourcils</strong>
                                <p>&#x1F552; 15min   15&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Teiture des cils</strong>
                                <p>&#x1F552; 30min  17&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Teinture des sourcils et des cils</strong>
                                <p>&#x1F552; 30min  26&euro;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h1 class="mx-4">Manucure</h1>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionCares">
                            <div class="accordion-body">
                                <strong>Manucure SPA</strong>
                                <p>&#x1F552; 1h - 1h30   à partir de 30&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Pose vernis semi-permanent SoPolish</strong>
                                <p>&#x1F552; 1h - 1h15   à partir de 35&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Pose gel BFlex sur ongles courts</strong>
                                <p>&#x1F552; 1h30 - 1h45 à partir de 60&euro; </p>
                            </div>
                            <div class="accordion-body">
                                <strong>Manucure express et pose vernis LongWear</strong>
                                <p>&#x1F552; 30min   20&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Pédicure express et pose vernis LongWear</strong>
                                <p>&#x1F552; 30min   20&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Manucure</strong>
                                <p>&#x1F552; 45min - 1h15  à partir de 25&euro;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h1 class="mx-4">Épilation</h1>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parents="#accordionCares">
                            <div class="accordion-body">
                                <strong>Épilation à la cire du maillot simple</strong>
                                <p>&#x1F552; 15min   14&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire du maillot Brésillien</strong>
                                <p>&#x1F552; 30min  24&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des aisselles</strong>
                                <p>&#x1F552; 15min  13&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des 3/4 jambes</strong>
                                <p>&#x1F552; 30min  27&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des jambes entières</strong>
                                <p>&#x1F552; 45min  30&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire de la nuque</strong>
                                <p>&#x1F552; 15min  6&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire du bas du dos</strong>
                                <p>&#x1F552; 15min  12&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire du sillon inter-fessier</strong>
                                <p>&#x1F552; 15min  12&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des lèvres</strong>
                                <p>&#x1F552; 15min  8&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire du front</strong>
                                <p>&#x1F552; 15min  10&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des joues</strong>
                                <p>&#x1F552; 15min  10&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des sourcils</strong>
                                <p>&#x1F552; 15min 16&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des avant-bras</strong>
                                <p>&#x1F552; 15min  15&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des bras</strong>
                                <p>&#x1F552; 30min  21&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des cuisses</strong>
                                <p>&#x1F552; 30min  24&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire des demi-jambes</strong>
                                <p>&#x1F552; 30min  21&euro;</p>
                            </div>
                            <div class="accprdion-body">
                                <strong>Épilation à la cire du maillot échancré</strong>
                                <p>&#x1F552; 15min  19&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire du maillot integral</strong>
                                <p>&#x1F552; 30min  20&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Épilation à la cire du menton</strong>
                                <p>&#x1F552; 15min  9&euro;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h1 class="mx-4">Restructuration & Épilation Des Sourcils</h1>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionCares">
                            <div class="accordion-body">
                                <strong>Entretien des sourcils</strong>
                                <p>&#x1F552; 15min    11&euro;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h1 class="mx-4">Massage</h1>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionCares">
                            <div class="accordion-body">
                                <strong>Massage du dos et de la nuque</strong>
                                <p>&#x1F552; 30min  35&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Massage du dos et des jambes</strong>
                                <p>&#x1F552; 45min  50&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Massage du corps</strong>
                                <p>&#x1F552; 1h     65&euro; </p>
                            </div>
                            <div class="accordion-body">
                                <strong>Massage du corps et du visage</strong>
                                <p>&#x1F552; 1h30   95&euro;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <h1 class="mx-4">Soin Du Corps</h1>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionCares">
                            <div class="accordion-body">
                                <strong>Gommage du corps</strong>
                                <p>&#x1F552; 45min   45&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Gommage & Enveloppement du corps</strong>
                                <p>&#x1F552; 1h30    85&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Gommage du corps & Massage relaxant (1h)</strong>
                                <p>&#x1F552; 1h45   100&euro; </p>
                            </div>
                            <div class="accordion-body">
                                <strong>Massage & Enveloppement du corps</strong>
                                <p>&#x1F552; 1h45   105&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Gommage du corps + Enveloppement + Massage relaxant</strong>
                                <p>&#x1F552; 2h30   130&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Enveloppement du corps</strong>
                                <p>&#x1F552; 45min   50&euro;</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h1 class="mx-4">Beauté Des Pieds</h1>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionCares">
                            <div class="accordion-body">
                                <strong>Pédicure Spa</strong>
                                <p>&#x1F552; 1h15 - 1h45 à partir de 35&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Pose vernis semi-permanent SoPolish pieds</strong>
                                <p>&#x1F552; 1h - 1h15   à partir de 35&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Pédicure</strong>
                                <p>&#x1F552; 1h - 1h45   à partir de 30&euro; </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <h1 class="mx-4">Soin Du Visage</h1>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionCares">
                            <div class="accordion-body">
                                <strong>Soin du visage pour peaux mixtes à grasses / Menthe - citron</strong>
                                <p>&#x1F552; 1h30    55&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Soin du visage Nutri-sensibilité / Muesli</strong>
                                <p>&#x1F552; 1h30    75&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Soin du visage Hydralock / Aloe-vera</strong>
                                <p>&#x1F552; 1h30    75&euro; </p>
                            </div>
                            <div class="accordion-body">
                                <strong>Soin du visage Pro-Áge / Spiruline</strong>
                                <p>&#x1F552; 1h30    85&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <strong>Soin du visage Organics / Soin éclat fraîcheur certifié biologique</strong>
                                <p>&#x1F552; 45min   50&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Soin du visage Saisonnier / Soin coup d'éclat relaxant</strong>
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse-show" aria-labelledby="headingOne" data-bs-parents="#accordionCares">
                                        <div class="accordion-body">
                                            <strong>Soin du visage Saisonnier / Soin coup d'éclat hydratant relaxant (Automne/Hiver '22: Orange & baies de goji)</strong>
                                            <p>&#x1F552; 1h30   56&euro;</p>
                                        </div>
                                        <div class="accordion-body">
                                            <strong>Soin du visage Saisonnier / Soin coup d'éclat hydratant relaxant (Printemps/Été '23: Citron & rhubarbe)</strong>
                                            <p>&#x1F552; 1h30  56&euro;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <strong>Soin du visage pour peaux mixtes à grasses / Menthe (-18ans)</strong>
                                <p>&#x1F552; 1h15   50&euro;</p>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Soin du visage EE à l'orange sanguine</strong>
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse-show" aria-labelledby="headingOne" data-bs-parents="#accordionCares">
                                        <div class="accordion-body">
                                            <strong>Soin du visage à l'orange sanguine (Ancienne formule)</strong>
                                            <p>&#x1F552; 45min   45&euro;</p>
                                        </div>
                                        <div class="accordion-body">
                                            <strong>Soin du visage à l'orange sanguine (Nouvelle formule)</strong>
                                            <p>&#x1F552; 45min  45&euro;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingElf">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseElf" aria-expanded="false" aria-controls="collapseElf">
                                    <h1 class="mx-4">Diagnostique</h1>
                                </button>
                            </h2>
                            <div id="collapseElf" class="accordion-collapse collapse" aria-labelledby="headingElf" data-bs-parent="#accordionCares">
                                <div class="accordion-body">
                                    <strong>Pédicure végétale "Calluspeeling" (Calluspeeling)</strong>
                                    <p>&#x1F552; 1h15   35&euro;</p>
                                </div>
                                <div class="accordion-body">
                                    <strong>Pédicure végétale "Calluspeeling" (Calluspeeling & pose vernis)</strong>
                                    <p>&#x1F552; 1h30   40&euro;</p>
                                </div>
                            </div>
                        </div>
                </section>
            </section>
            <!--Accordion END-->
            </section>

            <section>
                <!--Contact card-->
                <section id="card" class="card mt-4" style="width: 45rem;">
                    <img class="card-img-top" src="./assets/img/img6.webp" alt="photo de Marie">
                    <div class="card-body">
                        <h5 class="card-title">Contactez-moi</h5>
                        <p class="card-text text-muted">N'hesitez pas à me contacter par mail.</p>
                        <button id="btn" type="button">Envoyez-moi un mail</button>
                    </div>
                </section>
                <!--Contact card END-->
            </section>

            <section>
                <!--Construction du calendrier-->
                <section id="calendarBloc" class="p-4">
                    <nav class="navbar navbar-dark mb-3">
                        <a class="text-align center mx-4" href="/index.php" class="navbar-brand">Agenda</a>
                    </nav>

                    <?php 
                        require './assets/src/Date/Month.php';
                        
                        $month =new App\Date\Month($_GET['month'] ?? null, $_GET['year']  ?? null); 
                    
                    
                        $start = $month->getStartingDay();
                        $start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
                        
                    ?>
                    <!--Btn nav calendrier-->
                    <div class="d-flex flex-row align-items-center justify-content-between mx-3">
                        <h1><?= $month->toString(); ?></h1>
                        <div>
                            <a href="/index.php?month=<?= $month->prevMonth()->month; ?>&year=<?= $month->prevMonth()->year; ?>" class="btn btn-secondary">&lt;</a>
                            <a href="/index.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-secondary">&gt;</a>
                        </div>
                    </div>
                    

                    <!--Pour le nb de semaines-->
                    <?= $month->getWeeks(); ?>

                    <table class="calendarTable calendarTable--<?= $month->getWeeks(); ?>weeks">
                        <?php for ($i = 0; $i < $month->getWeeks(); $i++): ?>
                            <tr>
                                <?php 
                                    foreach($month->days as $k => $day): //Je part du mois et récupère les jours
                                    $date = (clone $start)->modify( "+" . ($k + $i * 7) . "days")
                                ?>
                                <td class="<?= $month->withinMonth($date) ? '' : 'calendarOtherMonth'; ?>">
                                    <?php if ($i === 0): ?>
                                        <div class="calendarWeekDay"><?= $day; ?></div>
                                    <?php endif; ?>
                                    <div class="calendarDay"><?= $date->format('d');?></div>
                                </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endfor; ?>
                    </table>           
                </section>
                <!--Calendar END-->
            </section>   
        </main>
        <footer class="d-block">
            <div class="d-flex p-4">
                <section class="p-4" id="adress">
                    <h3>Adresse</h3>
                    <p>Avenue du Fief 12, 1420 Braine-l'Alleud, Belgique</p>
                    <div id="mapid" class="container-fluid"></div>
                </section>
                <section class="p-4" id="opening">
                    <h3>Horaire</h3>
                    <p>Lundi    09:00 - 19h00</p>
                    <p>Mardi    09:00 - 16h00</p>
                    <p>Mercredi Fermé</p>
                    <p>Jeudi    09h00 - 19h00</p>
                    <p>Vendredi 09h00 - 19h00</p>
                    <p>Samedi   09h00 - 16h00</p>
                    <p>Dimanche Fermé</p>
                </section>
                <section>
                    <h3>Réseaux sociaux</h3>
                    <a class="icons" href=""><img src="./assets/img/svg/facebook.svg" alt="Icône FaceBook"></a>
                    <a class="icons" href=""><img src="./assets/img/svg/instagram.svg" alt="Icône Instagram"></a>
                    <a class="icons" href=""><img src="./assets/img/svg/linkedin.svg" alt="Icône LinkedIn"></a>
                </section>
            </div>
            <section id="dev"class="d-none d-block">
                    <p>&copy; Christel Rodriguez Perez - 2023</p>
            </section>
        </footer>
    </body>
</html>