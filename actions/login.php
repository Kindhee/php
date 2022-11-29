<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password=SHA1('56FG45F15SD4FC154EF4S1C56S1584684733". $_POST['password']."')"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
    //non connecté
    echo "Utilisateur ou mot de passe incorrect !";
}else{
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    header('Location:../homelog.php');
}

?>