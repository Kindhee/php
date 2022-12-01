<?php
$email = "rmichel@gaming.tech";
$objet = $_POST['object'];
$content = $_POST['message']."<br><br>Email from : ". $_POST['email'];


if(empty($email) || empty($email) || empty($email)){
    echo "erreur";
} else{
    $_SESSION['success']="Mail envoyé !";
    // header('Location:../index.php');
    header('Location:../indexbis.php');
    exit();
} ?>