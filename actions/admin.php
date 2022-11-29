<?php 
require_once "../cfg/config.php"; 
$sql = "UPDATE user SET user(admin) VALUES(:admin)";
$dataBinded=array(
    ':admin'   => $_POST['admin'],

);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
?>