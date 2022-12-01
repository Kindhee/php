<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE alltext SET title = :title WHERE id= :id";
$dataBinded=array(
    ':title'   => $_POST['title'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../indexbis.php');
?>