<?php
require_once "../cfg/config.php"; 

if(isset($_FILES['img']) && !empty($_FILES['img']['name'])){
    $destination = "img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES["img"]["tmp_name"],"../".$destination);

    $sql = "UPDATE index_page SET img = :img WHERE index_page.id = :id";
    $dataBinded=array(
        ':img'   => $destination,
        ':id'   => $_POST['id'],
    );
    $pre = $pdo->prepare($sql); 
    $pre->execute($dataBinded);
}else{
    echo"no file";
    exit();
}

header('Location:../indexbis.php');
?>