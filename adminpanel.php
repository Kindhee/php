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

  <div class="red white-text-css-all text-center">
    <?php 
      if(isset($_SESSION['error'])){
	      echo $_SESSION['error'];
	      unset($_SESSION['error']);
      } 
      ?>
  </div>

  <h1 class="black-text-css text-center "><?php echo "Bienvenue sur le panel Admin " . $_SESSION['user']['username'] . " !"; ?> </h1>
<div class="display-admin">
  <div>
    <h2 class="black-text-css" >Liste des utilisateurs :</h2>
    <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
    foreach($data as $user){ ?>
    <div class="user-display">
      <p class="black-text-css list-text">
        <?php echo " email : " . $user['email']." | username : ".$user['username']." ".($user['admin']==0?"":" | ADMIN")?> 
      </p>

        <div class="btn-user-display">

          <form method="post" action="actions/admin.php">
              <input type='hidden' name="id" value = "<?php echo $user['id'] ?>" />
              <input type='hidden' name="admin" value = "<?php echo $user['admin']==1?0:1 ?>" />
              <button class="btn-adminpanel black-text-css" type="submit">Admin</button>
          </form>

          <form method="post" action="actions/deleteuser.php">
              <input type='hidden' name="id" value = "<?php echo $user['id'] ?>" />
              <button class="btn-adminpanel black-text-css" type="submit"><span class="material-icons admin-icon">delete</span></button>
          </form>

        </div>
      <?php } ?>
    </div>
  </div>

  <div>
    <h4>Hello</h4>
  </div>
  
</div

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <!--Js MAterialize-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- Script -->
  <script type="text/javascript" src="js/script.js"></script>

 </body>
</html>