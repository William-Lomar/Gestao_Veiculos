<?php 
//setar timezone
date_default_timezone_set('America/Sao_Paulo');


//incluir classes dinamicamente
$autoload = function($class){
  include('class/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', "caminho do diretório");
define('BASE_DIR',__DIR__);

//Conectar com banco de dados
define('HOST',"seu host");
define("USER", "seu usuario");
define("PASS", "sua senha");
define("DB", "sua database");



?>



