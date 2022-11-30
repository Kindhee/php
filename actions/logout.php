<?php 
require_once "../cfg/config.php"; 

if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    $_SESSION['error']="Vous venez de vous déconnecté";
    header('Location:../homelog.php');
    exit();
}else{
    $_SESSION['error']="Vous n'êtes pas connecté";
    header('Location:../homelog.php');
    exit();
} ?>