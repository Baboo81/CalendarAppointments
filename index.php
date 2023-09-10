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
        <link rel="stylesheet" href="./assets/sass/slider.css">
        <link rel="stylesheet" href="./assets/sass/Accordion.css">
        <!--Scripts, libraries, framework JS-->
        <script src="./assets/scripts/jQuery3.7.0.js" defer></script>
        <script src="./assets/scripts/bootstrap.bundle.min.js" defer></script>
        <script src="./assets/scripts/main.js" defer></script>
        <script src="./assets/scripts/slider.js" defer></script>
        <title>Calendar</title>
    </head>
    <body>
        <header>
        <!-- Hero -->
            <section class="et-hero-tabs">
                <h1>Institut Soin de Soie</h1>
                <div class="et-hero-tabs-container">
                    <a class="et-hero-tab" href="#tab-es6">Accueil</a>
                    <a class="et-hero-tab" href="#tab-flexbox">World</a>
                    <a class="et-hero-tab" href="#tab-react">Soins</a>
                    <a class="et-hero-tab" href="#tab-angular">Contact</a>
                    <a class="et-hero-tab" href="#tab-other">Rendez-vous</a>
                    <span class="et-hero-tab-slider"></span>
                </div>
            </section>
        <!-- Main -->
            <div class="et-main">
                <section class="et-slide" id="tab-es6">
                    <img src="./assets/img/svg/Logo.svg" alt="Logo pissenlit">
                </section>
                <section class="et-slide" id="tab-flexbox">
                    <h1>Espace beauté</h1>
                    <h3>cocoon</h3>
                </section>
                <section class="et-slide" id="tab-react">
                    <h1>Soins</h1>
                    <h3>Soins & tarifs</h3>
                </section>
                <section class="et-slide" id="tab-angular">
                    <h1>Contact</h1>
                    <h3>Adresse ...</h3>
                </section>
                <section class="et-slide" id="tab-other">
                    <h1>Rendez-vous</h1>
                    <h3>En quelques clics prenez rendez-vous</h3>
                </section>
            </div>
        </header>

       <main class="container">
            <!--Accordeon-->
                <section class="accordion" id="accordionCares">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
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
                </section>
            </section>
            <section id="calendarBloc">
                <nav class="navbar navbar-dark bg-primary mb-3">
                    <a href="/index.php" class="navbar-brand">Mon calendrier</a>
                </nav>

                <!--Construction du calendrier-->
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
        </main>
    </body>
</html>