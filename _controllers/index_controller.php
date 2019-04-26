<?php


if (!empty($_GET)) {

    $id = $_GET['id'];
    $ty = $_GET['ty'];
   
    $user = User::getUserById($id);
}

if(isset($_POST) && !empty($_POST))


    {
       $contenu = checkInput($_POST['message']);
       
        $stat = validFrom([$contenu]);
    
        if($stat)
        {
            User::SendMessage($contenu,$id, date('d-m-Y')); 
        }
    }

    $message = User::getMessage($id,$ty);
   

    $recus = User::getMessages($id,1);

?>