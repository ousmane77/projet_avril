<?php
if (isset($_POST)&& !empty($_POST)) {
   
    $lib = checkInput($_POST['libelle']);
    $commune = checkInput($_POST['commune']);
    $des = checkInput($_POST['description']);
    $choix = checkInput($_POST['choix']);
    $verifImg1 = $_FILES['image1']['name'];
    $verifImg2 = $_FILES['image2']['name'];
    $reImg1 = $_FILES['image1'];
    $reImg2 =  $_FILES['image2'];

    $statut = validFrom([$lib, $commune, $verifImg1, $verifImg2, $des, $choix]);
    if ($statut) {
      $image1 = importImg($reImg1,$lib);
      $image2 = importImg($reImg2,$lib);
      Propriete::addOffre($lib, $commune, $choix, $des, $image1, $image2);
      header('location: offre');
      exit();
    }


}
?>