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

<? if(!isset($_SESSION['user']) || ($_SESSION['user']['admin'] == 0 )){
        header('Location:homelog.php');
        exit();
    } ?>


<form method="post" action="actions/addproject.php" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Titre">
    <input type="file" name="img">
    <input type="text" name="txt_intro" placeholder="Descriptions">
    <input type="submit" value="Ajouter" >
</form>
   

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
    <form method="post" action="actions/deleteproject.php">
        <input type='hidden' name="id" value = "<?php echo $project['id'] ?>" />
        <button class="btn-adminpanel black-text-css fullwidth" type="submit"><span class="material-icons admin-icon">delete</span></button>
    </form>
    <?php } ?>
</div>

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!--Js MAterialize-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- Script -->
    <script type="text/javascript" src="js/script.js"></script>


</body>
</html>