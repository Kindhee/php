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

<div class="green white-text-css-all text-center">
    <?php 
      if(isset($_SESSION['success'])){
	      echo $_SESSION['success'];
	      unset($_SESSION['success']);
      } 
      ?>
</div>

<div class="red white-text-css-all text-center">
    <?php 
      if(isset($_SESSION['error'])){
	      echo $_SESSION['error'];
	      unset($_SESSION['error']);
      } 
      ?>
</div>

<div class = "btn-panel">
    <a class = "btn-panel" href="adminchoice.php">Page Admin</a>
</div>

<?php
$sql = "SELECT * FROM alltext"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$alltext = $pre->fetch(PDO::FETCH_ASSOC);

?>

<div>
    <form method="post" action="actions/changetitle.php">
        <h1 class="black-text-css text-center"><input type='textarea' name="title" value = "<?php echo $alltext['title']." ".$_SESSION['user']['username'] ?>" />
        <input type='hidden' name="id" value = "<?php echo $alltext['id'] ?>" />
        <button class="black-text-css" type="submit">Modifier</button>
    </form>
</div>


<?php
$sql = "SELECT * FROM index_page"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$index_page = $pre->fetch(PDO::FETCH_ASSOC);

?>

<div class="row team">
    <div class="col s6">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel z-depth-1 card-bg">
              <div class="row valign-wrapper">
                  <span class="black-text-css">
                    <?php echo $index_page['intro_eleve1'] ?>
                </span>
            </div>
        </div>
    </div>
  </div>



    <div class="col s6">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel z-depth-1 card-bg">
                <div class="row valign-wrapper">               
                        <span class="black-text-css">
                            <?php echo $index_page['intro_eleve2'] ?>
                        </span>
                  </div>
              </div>
          </div>
      </div>
</div>


<div>
    <form method="post" action="actions/changetitleproject.php">
        <h2 class="black-text-css" ><input type='textarea' name="title_project" value = "<?php echo $alltext['title_project'] ?>" /></h2>
        <input type='hidden' name="id" value = "<?php echo $alltext['id'] ?>" />
        <button class="black-text-css" type="submit">Modifier</button>
    </form>
</div>
    <!--  -->
    <div class="container">
        <h3 class="black-text-css" >Ajouter un projet</h3>
        <form action="actions/addproject.php" method="post" enctype="multipart/form-data">
            <input type="text" name="title" value="" placeholder="Titre">
            <input type="file" name="img" value="" placeholder="L'objet du mail">
            <input type="text" name="txt_intro" value="" placeholder="Présentation">
            <input type="submit" value="Envoyer" >
        </form>
    </div>
    <!--  -->
    <?php
    $sql = "SELECT * FROM project"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
    foreach($data as $project){ ?>
    <div class="project-display">
      <h2 class="black-text-css text-center"><?php echo $project['title']?></h2>
      <div class="text-center">
        <img src="<?php echo $project['img']?> " alt="project-img">
      </div>
      <p class="black-text-css  text-center"><?php echo $project['txt_intro']?></p>
      <?php } ?>
    </div>


<!--  -->


<div id="modal1" class="modal">
          <div class="card contact-card">
            <div class="card-content">
              <div class="container">
                <h3>Formulaire de contact</h3>
                <form action="actions/mail.php" method="post">
                  <input type="text" name="email" value="" placeholder=" Votre email">
                  <input type="text" name="objet" value="" placeholder="L'objet du mail">
                  <input type="textarea" class="textarea-style" name="content" value="" placeholder="Ecrivez nous ici">
                  <input type="hidden" name="ownemail" value="" placeholder=" Votre email">
                  <input type="submit" value="Envoyer" >
                </form>
              </div>

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