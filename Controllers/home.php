<?php
$descritption = 'Page d\'acceuil du site';
$title = 'Acceuil';
ob_start();
require_once '../Views/home.php';
$content = ob_get_clean();
require_once '../Views/Templates/default.php';