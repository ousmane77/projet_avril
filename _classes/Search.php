<?php

class Search
{
    static function searchCommune($recherche){

    global $db;
    $stat = $db->prepare('SELECT * FROM propriete WHERE commune LIKE ?');
    $stat->execute(['%'.$recherche.'%']);
    return $stat->fetchAll();

}

}

 ?>