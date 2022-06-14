<?php 
require_once('config.php');

$url = @$_GET['url']; 

require_once('paginas/estrutura/header.php');
if($url == ''){
    require_once('paginas/home.php');   
}else{
    require_once('paginas/'.$url.'.php');
}
require_once('paginas/estrutura/footer.php');
?>