<?php
require_once('../config.php');

$carro = $_GET['carro'];

$excluir_veiculo = Banco::deletar('carros',$carro);
$excluir_log = Banco::deletarPesquisa('log',"WHERE carro_id = ".$carro);


if($excluir_veiculo and $excluir_log){
    Painel::alerta("Carro deletado com sucesso!");
    Painel::redirecionar(INCLUDE_PATH.'gerenciar');
    exit;
}else{
    Painel::alerta("Ocorreu um erro ao tentar deletar carro!");
    Painel::redirecionar(INCLUDE_PATH.'gerenciar');
    exit;
}
?>