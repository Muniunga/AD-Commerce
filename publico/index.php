<?php
session_start();


$pasta = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] .  $_SERVER['PHP_SELF'];
$pasta = str_replace("index.php", "", $pasta);

define ('ROTA', $pasta);
define ('ASSETS', $pasta . "assets");

include "../app/init.php";
//mostrar(ASSETS); 
$app = new App();
?>