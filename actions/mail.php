<?php
$email = "rmichel@gaming.tech";
$objet = $_POST['object'];
$content = $_POST['message']."<br><br>Email from : ". $_POST['email'];

if(mail($email,$objet,$content)){
    echo "mail envoyé";
}else{
    echo "erreur";
} ?>