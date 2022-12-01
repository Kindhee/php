<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE index_page SET intro_eleve1 = :intro_eleve1 WHERE id= :id";
$dataBinded=array(
    ':intro_eleve1' => $_POST['intro_eleve1'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

header('Location:../indexbis.php');
?>