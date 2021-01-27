<?php
/*
 * La page index à pour role de faire l'autoloading et le rooting
 * rôles :
 *    - autoload : permet de charger dynamiquement les classe
 *    - rooter -> s'occupe de charger le bon controller. voir http://altorouter.com/ 
 *    - https://www.youtube.com/watch?v=tbYa0rJQyoM -> à 15minutes à peut près
 */
//Autoloading
require_once '../vendor/autoload.php';
//Rooting
$rooter = new AltoRouter();
$rooter->map('GET','/',function(){
    require_once '../Controllers/home.php';
},'home');
$match = $rooter->match();
if($match){
    $match['target']();
}
dump($match,$_SERVER,$_GET,$_POST);