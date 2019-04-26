<?php


if (!empty($_GET)) {

$id = $_GET['id'];
$user = User::getUserById($id);

}
$message = User::getMessage($id,2);

$recus = User::getMessages($id,1);

?>