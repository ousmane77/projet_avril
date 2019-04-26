 <?php
/**
 * Created by PhpStorm.
 * User: nan
 * Date: 12/04/2019
 * Time: 11:50
 */

    if(isset($_POST) && !empty($_POST))
    {
       $reqNom = checkInput($_POST['regName']);
        $reqPrenom = checkInput($_POST['regPren']);
        $reqEmail = checkInput($_POST['regMail']);
        $reqMdp = checkInput($_POST['regPass']);
        $reqTel = checkInput($_POST['tel']);
        $type = 2;
       
        
        $stat = validFrom([$reqNom,$reqPrenom,$reqEmail,$reqMdp,$reqTel]);

        if($stat)
        {
            User::Sign($reqNom,$reqPrenom,$reqTel,$reqEmail,sha1($reqMdp),$type);
            $result = User::getUserById(User::getLastId());

            $_SESSION['user'] = $result['nomUser'];
            $_SESSION['prenom'] = $result['prenomUser'];
            $_SESSION['mail'] = $result['emailUser'];
            $_SESSION['isLock'] = $result['isLock'];
            $_SESSION['typeUser'] = $result['typeUser'];
            $_SESSION['mdp'] = $result['mdpUser'];
            $_SESSION['phone'] = $result['tel'];
            header('location:login');
            exit();
        }
        else
        {
        	$error = 'Veuillez remplir correctement tous les champs';
        }
    }
