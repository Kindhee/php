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

  <h2 class="black-text-css form-title" >Inscription</h2>
  <form class="form-style" method="post" action="actions/signup.php">
      <input class="form-text" type='email' name='email' placeholder='email'/>
      <input class="form-text" type='text' name='username' placeholder='username'/>
      <input class="form-text" type='password' name='password' placeholder='password'/>
      <input class="submit-button black-text-css" type='submit' value='Créer un compte' />
  </form>
  <h2 class="black-text-css form-title">Connexion</h2>
  <form class="form-style" method="post" action="actions/login.php">
    <input class="form-text" type='text' name='username' placeholder='username'/>
    <input class="form-text" type='password' name='password' placeholder='password'/>
    <input class="submit-button black-text-css" type='submit' value='Se connecter' />
  </form>

  <h1>Liste des utilisateurs</h1>
  <?php require "actions/showuser.php"; ?>

<!-- JQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!--Js MAterialize-->
<script type="text/javascript" src="js/materialize.min.js"></script>

<!-- Script -->
<script type="text/javascript" src="js/script.js"></script>

 </body>
</html>