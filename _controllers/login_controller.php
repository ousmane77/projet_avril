<?php
include 'zzzislogged()';
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logMail']) && isset($_POST['logPass']))
    {
        if (validFrom($_POST))
        {
            

            $result = User::getUser($_POST['logMail'], sha1($_POST['logPass']));
            if ($result != false)
            {
                $_SESSION['user'] = $result;
                $_SESSION['type'] = $result['typeUser'];
                $_SESSION['isLock'] = $result['isLock'];
                $id = $result['idUser'];
                $ty = $result['typeUser'];
                if($_SESSION['type'] ==2 && $_SESSION['isLock'] == 1)
                {
                    header("location:index-$id-$ty");
                    exit();
                }elseif ($_SESSION['type'] !=2 ){
                    header('location:admin');
                    exit();
                }
                else{
                    header('location:home');
                    exit();
                }
            }
            else
            {
                $error = "Email et/ou mot de passe incorrect";
            }

        }
        else
        {
            $error = "Veuillez remplir correctement tous les champs";
        }
    }
    else
    {
        $error = "Une erreur est survenue lors de la connexion";
    }
}