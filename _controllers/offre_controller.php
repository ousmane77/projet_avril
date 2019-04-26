<?php
$tot = Propriete::getAllP();


if(isset($_GET['id']) && !empty($_GET['id']))
{
    Propriete::deleteOffre($_GET['id']);
    header('Location: offre');
    exit();
}
?>