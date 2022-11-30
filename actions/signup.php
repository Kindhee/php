<?php 
require_once "../cfg/config.php"; 

if(empty($_POST["email"])){
    $_SESSION['error']="No email";
    header('Location:../homelog.php');
    exit();
}

if(empty($_POST["username"])){
    $_SESSION['error']="No username";
    header('Location:../homelog.php');
    exit();
}

if(empty($_POST["password"])){
    $_SESSION['error']="No password";
    header('Location:../homelog.php');
    exit();
}

$sql = "INSERT INTO user(email, username, password) VALUES(:email, :username, SHA1(:password))";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'   => $_POST['username'],
    ':password'=> "56FG45F15SD4FC154EF4S1C56S1584684733" . $_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../homelog.php');
?>