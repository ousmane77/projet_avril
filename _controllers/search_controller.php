<?php
if(isset($_POST) && !empty($_POST))
{
   $commune = checkInput($_POST['search']);
   
    $stat = validFrom([$commune]);
    
    if($stat)
    {
        $res = Propriete::searchCommune($commune);
       
    }
}
?>