<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Link styles-->
        <link rel="stylesheet" href="./assets/styles/normalize.css">
        <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/styles/styles.css">
        <link rel="stylesheet" href="./assets/sass/slider.css">
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
                    <a class="et-hero-tab" href="#tab-es6">Hello</a>
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
                <div id="calendar">
                    <h1>Calendar</h1>
                    <section id="cld">
                        <section id="enteteCld">
                            <h2 id="cldT">JANVIER</h2>
                            <section id="avantEtApres">
                                <button id="avant" class="cldBtn">Avant</button>
                                <button id="apres" class="cldBtn">Après</button>
                            </section>
                        </section>

                        <section id="cldBoite">
                            <div id="jours">
                                <div class="jour">Lun</div>
                                <div class="jour">Mar</div>
                                <div class="jour">Mer</div>
                                <div class="jour">Jeu</div>
                                <div class="jour">Ven</div>
                                <div class="jour">Sam</div>
                                <div class="jour">Dim</div>
                            </div>

                            <div id="semaine1" class="semaine">
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                            </div>

                            <div id="semaine2" class="semaine">
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                            </div>

                            <div id="semaine3" class="semaine">
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                            </div>

                            <div id="semaine4" class="semaine">
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                            </div>

                            <div id="semaine5" class="semaine">
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                            </div>

                            <div id="semaine6" class="semaine">
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                                <div class="case"></div>
                            </div>
                        </section>
                    </section>
                </div>    
       </main>
    </body>
</html>