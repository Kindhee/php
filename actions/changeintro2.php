<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE index_page SET intro_eleve2 = :intro_eleve2 WHERE id= :id";
$dataBinded=array(
    ':intro_eleve2' => $_POST['intro_eleve2'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../indexbis.php');
?>