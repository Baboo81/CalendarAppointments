<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Link styles-->
        <link rel="stylesheet" href="./assets/styles/normalize.css">
        <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/styles/styles.css">
        <link rel="stylesheet" href="./assets/sass/Calendar.css">
        <link rel="stylesheet" href="./assets/sass/Card.css">
        <link rel="stylesheet" href="./assets/sass/slider.css">
        <link rel="stylesheet" href="./assets/sass/Accordion.css">
        <link rel="stylesheet" href="./assets/sass/Carousel.css">
        <link rel="stylesheet" href="./assets/sass/Footer.css">
        <!--Scripts, libraries, framework JS-->
        <script src="./assets/scripts/jQuery3.7.0.js" defer></script>
        <script src="./assets/scripts/bootstrap.bundle.min.js" defer></script>
        <script src="./assets/scripts/main.js" defer></script>
        <script src="./assets/scripts/Slider.js" defer></script>
        <script src="./assets/scripts/carousel.js" defer></script>
        <title>Calendar</title>
    </head>
    <body>
        <header>
        <!-- Hero -->
            <section class="et-hero-tabs">
                <h1>Institut Soin de Soie</h1>
                <div class="et-hero-tabs-container">
                    <a class="et-hero-tab" href="#tab-es6">Accueil</a>
                    <a class="et-hero-tab" href="#tab-soins">Soins</a>
                    <a class="et-hero-tab" href="#tab-contact">Contact</a>
                    <a class="et-hero-tab" href="#tab-rendezVous">Rendez-vous</a>
                    <span class="et-hero-tab-slider"></span>
                </div>
            </section>
        <!-- Main -->
            <div class="et-main">
                <section class="et-slide" id="tab-es6">
                    <img id="logo" src="./assets/img/svg/Logo.svg" alt="Logo pissenlit">
                </section>
                <section class="et-slide" id="tab-soins">
                    <h1>Soins</h1>
                    <h3>Soins & tarifs</h3>
                </section>
                <section class="et-slide" id="tab-contact">
                    <h1>Contact</h1>
                    <h3>Adresse ...</h3>
                </section>
                <section class="et-slide" id="rendezVous">
                    <h1>Rendez-vous</h1>
                    <h3>En quelques clics prenez rendez-vous</h3>
                </section>
            </div>
        </header>

       <main class="container-fluid">
            <section id="accueil">
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
            </section>

            <section id="soins">
                <div class="d-block mt-4">
                    <h1 id="title1" class="p-4">Les soins</h1>
                </div>
                <!--Accordeon-->
                <section class="accordion p-4" id="accordionCares">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h1>Teinture De Cils Et Sourcil</h1>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse-show" aria-labelledby="headingOne" data-bs-parents="#accordionCares">
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
                                <h1>Manucure</h1>
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
                                <h1>Épilation</h1>
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
                                <h1>Restructuration & Épilation Des Sourcils</h1>
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
                                <h1>Massage</h1>
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
                                <h1>Soin Du Corps</h1>
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
                                <h1>Beauté Des Pieds</h1>
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
                                <h1>Soin Du Visage</h1>
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
                                    <h1>Diagnostique</h1>
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

            <section id="contact">
                <!--Contact card-->
                <section id="card" class="card mt-4" style="width: 25rem;">
                    <img class="card-img-top" src="./assets/img/img7.webp" alt="photo de Marie">
                    <div class="card-body">
                        <h5 class="card-title">Contactez-moi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eligendi dolor adipisci, harum vitae expedita.</p>
                        <button id="btn" type="button">Envoyez-moi un mail</button>
                    </div>
                </section>
                <!--Contact card END-->
            </section>

            <section id="rdv">
                <!--Construction du calendrier-->
                <section id="calendarBloc" class="p-4">
                    <nav class="navbar navbar-dark bg-primary mb-3">
                        <a href="/index.php" class="navbar-brand">Agenda</a>
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
                            <a href="/index.php?month=<?= $month->prevMonth()->month; ?>&year=<?= $month->prevMonth()->year; ?>" class="btn btn-primary">&lt;</a>
                            <a href="/index.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>" class="btn btn-primary">&gt;</a>
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
    </body>
</html>