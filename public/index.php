<?php
/*
 * rôles :
 *    - autoload
 *    - rooter -> c'est en fonction de la page demander charger le bon controller. 
 *    --https://www.youtube.com/watch?v=tbYa0rJQyoM -> à 15minutes à peut près
 */
require_once '../vendor/autoload.php';

$rooter = new AltoRouter();
$rooter->map('GET','/',function(){
    require_once '../Controllers/home.php';
},'home');
/*
$rooter->map('GET','/shop','shop');
$rooter->map('GET','/admin','admin');
$rooter->map('GET','/member','member');
$rooter->map('GET','/connexion','connexion');
$rooter->map('GET','/register','register');
$rooter->map('GET','/forget','forget');
$rooter->map('GET','/panier','basket');
$rooter->map('GET|POST','[*: page]','404');
//$rooter->map('GET','/legal','');
*/
$match = $rooter->match();
if($match){
    $match['target']();
    dump($_GET,$_POST);
}else{
    dump($match,$_SERVER);
}

