<?php
require_once "../cfg/config.php";
$sql = "SELECT * FROM user"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $user){ ?>
<div class="bloc_user">
    <h2><?php echo $user['email']." ".$user['username']." ".$user['admin'] ?></h2>
</div>
<?php } ?>