<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE user SET user(admin) VALUES(:admin) WHERE id=:id";
$dataBinded=array(
    ':admin'   => $_POST['admin'],
    ':id'   => $_POST['id'],
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);

$data = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>