<?php
if(isset($_POST) && !empty($_POST))
{
   $contenu = checkInput($_POST['message']);
   
    $stat = validFrom([$contenu]);

    if($stat)
    {
        User::SendMessage($contenu,28);
        echo 'success';
    }
}

?>