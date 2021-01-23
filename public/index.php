<?php
/*
 * rôles :
 *    - autoload
 *    - rooter -> c'est en fonction de la page demander charger le bon controller. 
 */
require_once '../vendor/autoload.php';
try{
    require_once '../Controllers/home.php';
}
catch(Exception $e){
    dump($e);
}
//dump($_SERVER);