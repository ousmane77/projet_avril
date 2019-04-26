<?php

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function importImg($img,$nom){
    $image = checkInput($img['name']);
    $imageExtension = strrchr($image, '.');
    $arrayExtensions = array('.PNG','.png', '.JPEG', '.jpeg', '.JPG','.jpg', '.GIF', '.gif');
    if(in_array($imageExtension, $arrayExtensions) )
    {
        $adress = 'assets/css/achat/'.$nom.time().$imageExtension;
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name,$adress);
        return $adress;
    }
   
}

function importVid($path, $img){
    $image = checkInput($img['name']);
    $imageExtension = pathinfo($path.$image,PATHINFO_EXTENSION);
    if(strtolower($imageExtension) == "mp4" || $imageExtension == "mkv" )
    {
        $tmp_name = $img['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image) ;
    }
}
function checkForm($tab)
{
    $array = [];
    for($i=0; $i<count($tab); $i++)
    {
       $array[$i] = checkInput($tab[$i]);
    }
    return $array; 
}
function validFrom($tab){

    $var = 0;
    $var1 = 0;
    foreach ($tab as $i){
        $var1 ++;
        if(!empty($i)){
            $var ++;
        }else{
            $var --;
        }
    }
    if($var == $var1){
        return true;
    }else{
       $message = "Veuillez bien renseigner les champs";
    }
}

function isLogged()
{
    if (!isset($_SESSION['user'])) {
        header('location:home');
    }
    
}

function niveau($id)
{
    
}