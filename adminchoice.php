<?php require_once "cfg/config.php"; ?>
<html>
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
    <title>Connexion</title>
 </head>
 <body>


  <?php require "components/menu.php"; 
    if(!isset($_SESSION['user']) || ($_SESSION['user']['admin'] == 0 )){
        header('Location:homelog.php');
        exit();
    }
  ?>
    <div class = "colonne">
        <a class = "colonne-es" href="adminpanel.php">Gestion User</a>
        <a class = "colonne-es" href="indexbis.php">Gestion Index</a>
        <a class = "colonne-es" href="projectbis.php">Gestion Projet</a>
    </div>

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <!--Js MAterialize-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- Script -->
  <script type="text/javascript" src="js/script.js"></script>

 </body>
</html>