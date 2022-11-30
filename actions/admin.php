<?php 
require_once "../cfg/config.php"; 

if($_SESSION['id']==$_POST['id']){
    $_SESSION['error']="Vous ne pouvez pas vous supprimez vous-même de ce rôle";
    header('Location:../adminpanel.php');
    exit();
}

$sql = "UPDATE user SET admin = :admin WHERE id= :id";
$dataBinded=array(
    ':admin'   => $_POST['admin'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../adminpanel.php');
?>