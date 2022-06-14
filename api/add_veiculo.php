<?php 
require_once('../config.php');

$placa = htmlspecialchars($_POST['placa']);
$marca = htmlspecialchars($_POST['marca']);

$dados = array(
    'placa'=>$placa,
    'marca'=>$marca
);

if(Banco::insert($dados,'carros')){
    Painel::alerta("Carro cadastrado com sucesso!");
    Painel::redirecionar(INCLUDE_PATH.'gerenciar');
    exit;
}else{
    Painel::alerta("Ocorreu um erro ao cadastrar carro no banco!");
    Painel::redirecionar(INCLUDE_PATH.'gerenciar');
    exit;
}
?>