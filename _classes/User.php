<?php 

class User
{
  static function getLastId()
  {
    global $db;
    $stat = $db->prepare('SELECT MAX(idUser) FROM users');
    $stat->execute([]);
    return $stat->fetch();
  }

  static function getAllUsers()
  {
    global $db;
    $f = 2;
    $stat = $db->prepare('SELECT * FROM users WHERE typeUser= ?');
    $stat->execute([$f]);
    return $stat->fetchAll();
  }

        static function Sign($nom, $prenom, $phone, $email, $password, $type)
    {
      global $db;
      $add = $db->query("INSERT INTO users(nomUser, prenomUser, phone, emailUser, mdpUser, typeUser) VALUES('$nom', '$prenom', '$phone', '$email', '$password', '$type')"); 
    }


  static function deleteUser($id)
  {
    global $db;
    $stat = $db->prepare('DELETE FROM users WHERE idUser=?');
    $stat->execute([$id]);
  }
  static function bloquerUser($id)
    {
        global $db;
        $act=0;
        $stat = $db->prepare('UPDATE users set isLock=? WHERE idUser=?');
        $stat->execute([$act,$id]);
    }
    static function debloquerUser($id)
    {
        global $db;
        $act=1;
        $stat = $db->prepare('UPDATE users set isLock=? WHERE idUser=? ');
        $stat->execute([$act,$id]);
    }

  static function getUserById($id)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE idUser=?');
    $stat->execute([$id]);
    return $stat->fetch();
  }
    static function getNiv($niv)
    {
        global $db;
        $stat = $db->prepare('SELECT libNiveau FROM niveau WHERE idNiveau=?');
        $stat->execute([$niv]);
        return $stat->fetch();
    }

  static function getUser($mail, $passwd)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM users WHERE emailUser = ? and mdpUser  = ?');
    $stat->execute([$mail, $passwd]);
    return $stat->fetch();
  }

  static function updateUser($nom,$prenom,$mail,$contact,$image,$statut,$active,$mdp,$id)
  {
    global $db;
    $stat = $db->prepare('UPDATE users SET nom=?, prenoms=?, contact=?, image=?, statut=?, password=? WHERE id=?');
    $stat->execute([$nom,$prenom,$mail,$contact,$image,$statut,$active,$mdp,$id]);
  }


  static function SendMessage($message, $idUser,$date)
  {
    global $db;
    $add = $db->query("INSERT INTO messages(contenu, statut, idUser, temps, typeUser) VALUES('$message', 0, '$idUser','$date', 2)"); 
  }

  static function adminMess($message, $idUser,$date)
  {
    global $db;
    $add = $db->query("INSERT INTO messages(contenu, statut, idUser, temps, typeUser) VALUES('$message', 0, '$idUser','$date', 1)"); 
  }

  static function getMessage( $id,$type)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM messages WHERE idUser = ? AND typeUser = ?');
    $stat->execute([$id, $type]);
    return $stat->fetchAll();
  }

  static function getMessages( $id,$type)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM messages WHERE idUser = ? AND typeUser = ?');
    $stat->execute([$id, $type]);
    return $stat->fetchAll();
  }

  static function getAllMessage()
  {
    global $db;
    $stat = $db->prepare('SELECT messages.id, messages.contenu, messages.statut, messages.temps, messages.idUser, users.idUser, users.emailUser FROM messages,users WHERE messages.idUser = users.idUser');
    $stat->execute();
    return $stat->fetchAll();
  }

  static function getSugg()
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM modeles');
    $stat->execute();
    return $stat->fetchAll();
  }

  static function getType()
  {
    global $db;
    $stat = $db->prepare('SELECT DISTINCT libMod FROM modeles');
    $stat->execute();
    return $stat->fetchAll();
  }

  static function getChoix($lib)
  {
    global $db;
    $stat = $db->prepare('SELECT * FROM modeles WHERE libMod = ?');
    $stat->execute([$lib]);
    return $stat->fetchAll();
  }

}