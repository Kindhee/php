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
  
  <?php require "components/menu.php"; ?>

  <h1 class="black-text-css text-center"><?php echo "Bienvenue sur le panel Admin " . $_SESSION['user']['username'] . " !"; ?> </h1>

  <h2 class="black-text-css" >Liste des utilisateurs :</h2>
  <?php
  $sql = "SELECT * FROM user"; 
  $pre = $pdo->prepare($sql); 
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
  foreach($data as $user){ ?>
  <div class="bloc_user">
    <p class="black-text-css list-text"><?php echo " email : " . $user['email']." | username : ".$user['username']." ".($user['admin']==0?"":" - ADMIN")?></p>
    <form action="admin.php" name ='id' method="post">
        <input  type='hidden' value= id/>
        <button type="submit">Admin On / Off</button>
    </form>
  </div>
  <?php } ?>

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <!--Js MAterialize-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- Script -->
  <script type="text/javascript" src="js/script.js"></script>

 </body>
</html>