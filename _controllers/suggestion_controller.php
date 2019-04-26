<?php

if (!empty($_GET)) {

    $id = $_GET['id'];
    $ty = $_GET['ty'];
   
    $user = User::getUserById($id);
}

$mod = User::getSugg();

$type = User::getType();


?>