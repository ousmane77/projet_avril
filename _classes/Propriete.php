<?php

class Propriete{

	static function getAchat($s){
		global $db;
		$stat=$db->prepare("SELECT * FROM propriete WHERE pos = ?");
		$stat->execute([$s]);

		return $stat->fetchAll();
	}

	static function getOffre(){
		global $db;
		$stat=$db->prepare("SELECT * FROM propriete");
		$stat->execute();

		return $stat->fetchAll();
	}


	static function get($id){
		global $db;
		$stat=$db->prepare("SELECT * FROM propriete WHERE id = ?");
		$stat->execute([$id]);
		return $stat->fetch();
	}

	static function getAllCourseByMatiere($matiere, $lvl)
    {
        global $db;
        $stat = $db->prepare('SELECT * FROM cours WHERE idMatiere = ? AND idNiveau = ?');
        $stat->execute([$matiere, $lvl]);
        return $stat->fetchAll();
    }

	
	static function addOffre($libelle, $commune, $pos, $descriptions, $image1, $image2)
    {
      global $db;
      $add = $db->query("INSERT INTO propriete(libelle, commune, pos, descriptions, image1, image2) VALUES('$libelle', '$commune', '$pos', '$descriptions', '$image1', '$image2')"); 
    }


	static function deleteCours($id){
    global $db;
    $stat = $db->prepare('DELETE FROM cours WHERE id=?');
    $stat->execute([$id]);
	}
	
	static function getCours($matiere, $lvl){

		    global $db;
        $stat = $db->prepare('SELECT * FROM cours INNER JOIN matiere ON matiere.idMatiere = cours.idMatiere INNER JOIN niveau ON niveau.idNiveau = cours.idNiveau WHERE cours.idCours = ? and cours.idNiveau = ?');
        $stat->execute([$matiere, $lvl]);
        return $stat->fetch();

	}

	static function searchMatiere($recherche){

		    global $db;
        $stat = $db->prepare('SELECT matiere.* FROM cours INNER JOIN matiere ON matiere.idMatiere = cours.idMatiere WHERE cours.nomCours LIKE ?');
        $stat->execute(['%'.$recherche.'%']);
        return $stat->fetchAll();

	}

	static function searchCommune($input,$pos){

		global $db;
        $stat = $db->prepare('SELECT * FROM propriete WHERE commune = ? AND pos = ?');
        $stat->execute([$input]);
        return $stat->fetchAll();

	}
	
	static function getAllP()
	{
		global $db;
		$stat = $db->prepare('SELECT * FROM propriete');
		$stat->execute();
		return $stat->fetchAll();
	}

	static function deleteOffre($id)
  {
    global $db;
    $stat = $db->prepare('DELETE FROM propriete WHERE id=?');
    $stat->execute([$id]);
  }

}
