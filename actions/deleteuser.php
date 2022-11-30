<?php 
require_once "../cfg/config.php"; 
$sql = "DELETE FROM user WHERE id= :id";
$dataBinded=array(
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../adminpanel.php');
?>