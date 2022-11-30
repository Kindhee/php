<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html lang="en">
  <head>
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
    <title>Projet GTECH 1</title>
  </head>

<body>
  
<?php require "components/menu.php"; ?>
  
  <div>
    <h1 class="black-text-css text-center"><?php echo "Bienvenue sur le site \" " . $_SESSION['user']['username'] . " \" !"; ?></h1>
  </div>



<div class="row team">
    <div class="col s6">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel z-depth-1 card-bg">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="img/pp-romain.jpg" alt="" class="circle responsive-img hide-on-med-and-down"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                  <span class="black-text-css">
                    Nom: Romain MICHEL<br>
                    Étude: GTECH 1 en classe C<br>
                    Age: 17 ans<br>
                    Hobbie: la salle de sport, les jeux vidéos<br>
                    Projet: A réaliser le projet 1
                </span>
                </div>
            </div>
        </div>
    </div>
  </div>



    <div class="col s6">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel z-depth-1 card-bg">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="img/pplilian.jpg" alt="" class="circle responsive-img hide-on-med-and-down"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                        <span class="black-text-css">
                              Nom: Lilian VIENNET<br>
                              Étude: GTECH 1 en classe C<br>
                              Age: 19 ans<br>
                              Hobbie: La moto, le métal,  et les jeux vidéo<br>
                              Projet: A réaliser le projet 2
                        </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>

<div class="row">
  <div class="col s12">
    <h2 class="black-text-css titre-projet">
      Plongez vous dans les 3 projets presentés en dessous !
    </h2>
  </div>
</div>


<div class="carousel">
  <div class="carousel carousel-slider center">
    <div class="carousel-item white-text-css red">
      <h2 class="title-carousel " >Projet 1</h2>
      <p class="white-text-css">Site Overwatch</p>
      <a id="btn-carousel" class="btn-large btn-carousel black-text-css pulse" href="projet1.html" target="_blank">Découvrir <i class="material-icons right">launch</i></a>
    </div>
    <div class="carousel-item white-text-css green">
      <h2 class="title-carousel ">Projet 2</h2>
      <p class="white-text-css" >Site Assassin's Creed</p>
      <a id="btn-carousel" class="btn-large btn-carousel black-text-css pulse" href="projet2.html" target="_blank">Découvrir <i class="material-icons right">launch</i></a>
    </div>
    <div class="carousel-item white-text-css blue">
      <h2 class="title-carousel ">Projet 3</h2>
      <p class="white-text-css" >projet 3</p>
      <a id="btn-carousel" class="btn-large btn-carousel black-text-css pulse" href="projet3.html" target="_blank">Découvrir <i class="material-icons right">launch</i></a>    
    </div>
  </div>
</div>

<div id="modal1" class="modal">
          <div class="card contact-card">
            <div class="card-content">
              <span class="bold card-title black-text-css">Contactez nous !</span>
              <p class="black-text-css contact-text"><i class="material-icons mail-icon">mail</i>
                Emails :
                <p class="black-text-css email-text">rmichel@gaming.tech</p>
                <p class="black-text-css email-text">lviennet@gaming.tech</p>
              </p>
              <div class="modal-footer">
                <a href="#!" class="modal-close btn-flat black-text-css"><i class="material-icons">close</i></a>
              </div>
            </div>
          </div>
        </div>
  </div>

  <div class="parallax-container">
    <div class="center" style="line-height: 500px;">
      <button data-target="modal1" class="button-grey waves-effect waves-light modal-trigger btn-large">Contact</button>
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