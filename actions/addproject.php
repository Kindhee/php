<?php
require_once "../cfg/config.php"; 

if(isset($_FILES['img']) && !empty($_FILES['img']['name'])){
    $destination = "img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES["img"]["tmp_name"],"../".$destination);

    $sql = "INSERT INTO project(title,img,txt_intro) VALUES(:title,:img,:txt_intro)";
    $dataBinded=array(
        ':title'   => $_POST['title'],
        ':img'   => $destination,
        ':txt_intro'   => $_POST['txt_intro'],
    );
    $pre = $pdo->prepare($sql); 
    $pre->execute($dataBinded);
}else{
    echo"no file";
    exit();
}

// header('Location:../index.php');
header('Location:../indexbis.php');
?>