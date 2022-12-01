<?php
$email = "rmichel@gaming.tech";
$objet = $_POST['object'];
$content = $_POST['message']."<br><br>Email from : ". $_POST['email'];

if(empty($_POST["email"]) && empty($_POST["object"]) && empty($_POST["message"])){
    $_SESSION['error']="Erreur : un champ n'est pas remplis";
    // header('Location:../index.php');
    header('Location:../indexbis.php');
    exit();
} else{
    $_SESSION['success']="Mail envoyé !";
    // header('Location:../index.php');
    header('Location:../indexbis.php');
    exit();
} ?>