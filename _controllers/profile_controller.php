<?php
if (!empty($_GET)) {

    $id = $_GET['id'];
    $user = User::getUserById($id);
    }
?>
