<?php 
define("NOME_WEBSITE", 'AD-Comerce');

//nome da base de dados
define('DB_NOME', "adc_db");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_TYPE', "mysql");
define('DB_HOST', "localhost");


define('THEME', '/commerce');

define('DEBUG', true);

if (DEBUG) {
   ini_set('display_errors', 1);
}else {
    ini_set('display_errors', 0);
}

?>