<?php
$mess = User::getAllMessage();  

if(isset($_POST) && !empty($_POST))
{
   $contenu = checkInput($_POST['message']);
   $id = $_POST['idU'];
    $stat = validFrom([$contenu]);

    if($stat)
    {
        User::adminMess($contenu,$id, date('d-m-Y'));
    }
}

?>