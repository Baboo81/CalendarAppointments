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
            <nav class="navbar navbar-dark bg-primary mb-3">
                <a href="/index.php" class="navbar-brand">Mon calendrier</a>
            </nav>

            <!--Construction cu calendrier-->
            <?php 
                require './assets/src/Date/Month.php';
                try {
                    $month =new App\Date\Month($_GET['month'] ?? null, $_GET['year']  ?? null); 
                } catch (\Exception $e) {
                    $month = new App\Date\Month();
                }
                
            ?>

            <h1><?= $month->toString(); ?></h1>

            <!--Pour le nb de semaines-->
            <?= $month->gettWeeks(); ?>

            <table>

            </table>           
       </main>
    </body>
</html>