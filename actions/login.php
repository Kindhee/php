<?php 
require_once "../cfg/config.php"; 

if(empty($_POST["username"])){
    $_SESSION['error']="No username";
    header('Location:../homelog.php');
    exit();
}

if(empty($_POST["password"])){
    $_SESSION['error']="No password";
    header('Location:../homelog.php');
    exit();
}

$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password=SHA1('56FG45F15SD4FC154EF4S1C56S1584684733". $_POST['password']."')"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC); 
$index_page = $pre->fetch(PDO::FETCH_ASSOC); 
$project = $pre->fetch(PDO::FETCH_ASSOC); 
if(empty($user)){
    $_SESSION['error']="Utilisateur ou mot de passe incorrect !";
    header('Location:../homelog.php');
    exit();
}else{
    // session_start();
    $_SESSION['user'] = $user; 
    $_SESSION['index_page'] = $index_page; 
    $_SESSION['project'] = $project; 
    if($user['admin']==1){
        header('Location:../adminchoice.php');
    } else {
        // header('Location:../index.php');
        header('Location:../indexbis.php');
    }
}


?>