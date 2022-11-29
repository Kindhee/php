<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Style Css -->
        <link id="theme" type="text/css" rel="stylesheet" href="css/white.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@700;800&display=swap" rel="stylesheet">
        <link rel="Icon" href="img/logo-gc.jpg">
  </head>

        <title>Projet 1 - Overwatch</title>
      </head>

<body>

    <?php require "../components/menu.php"; ?>

    <div class="parallax-container">
        <div class="parallax background-project-ow"><img src="img/ow-background.jpg">
        </div>
        <div class="row button-egg-ow">
            <div class="col s12 offset-s6 ">
                <button><a href="img/genji.jpg" target="_blank">genji</a></button>
            </div>
        </div>
    </div>

    <!-- Description et explications du projet -->

    <div class="row game-presentation">
        <div class="col s12">
          <div class="card-panel game-card">
                <h1 class="black-text-css underline center">Projet 1 - Site Overwatch</h1>
                <p class="flow-text black-text-css center text-project-card"> 
                    <br>
                    Ce projet est le premier projet réalisé par Romain au cours de sa première année en G.Tech 1 au Gaming Campus de Lyon.<br>
                    Le but était de créer un site web, en HTML et CSS, afin de faire de la présentation son jeu préféré.<br> <br>
                    Le projet a été réalisé en 1 semaine en groupe avec deux camarades : <br> - Guillherme ( gcoelhovieira@gaming.tech ) <br> - Mattéo ( mstampanoni@gaming.tech )<br><br>
                    Le trinôme devait répondre à un cahier des charges précis comme un menu de navigation vers le site officiel ou encore des description, des images et une vidéo de gameplay du jeu issue de Youtube.
                    Le tout devait tenir sur une seule page web et être optimiser avec le SEO, pour le référencement. 
                    Les élèves devaient faire preuve d'imagination et de professionnalisme afin de créer un site esthétique que ce soit dans la partie visuel ou pour la partie du codage. <br> <br>
                    Passez en plein écran pour avoir un apercu du site !
                </p>
          </div>
        </div>
        <div class="col s12 hide-on-med-and-down card-site">
            <div class="card-panel game-card">
                <iframe class="iframe-site" src="project-iframe/projet-1-site/index.html" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <!-- Dossier du site -->
    <div class="parallax-container parallax-download">
        <div class="parallax"><img src="img/gc-banner.jpg">
        </div>
        <div class="button-download">
            <button data-target="modal1" class="button-grey waves-effect waves-light btn-large"><a  class="a-link-text" href="project download/Projet 1 - Overwatch.zip">Lien pour télécharger le site !</a></button>
        </div>
      </div>

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <!--Js MAterialize-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    
        <!-- Script -->
        <script type="text/javascript" src="js/script.js"></script>
    
</body>
</html>