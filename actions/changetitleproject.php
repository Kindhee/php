<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE alltext SET title_project = :title_project WHERE id= :id";
$dataBinded=array(
    ':title_project'   => $_POST['title_project'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../indexbis.php');
?>