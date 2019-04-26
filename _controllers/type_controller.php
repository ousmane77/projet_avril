<?php 
$type = User::getType();
if (!empty($_GET)) {

    $id = $_GET['id'];
    $ty = $_GET['ty'];
    $t = $_GET['ta'];
   
    $user = User::getUserById($id);
    $choix = User::getChoix($t);
}


?>