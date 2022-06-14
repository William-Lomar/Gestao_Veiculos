<?php 
require_once('../config.php');

$placa = htmlspecialchars($_POST['placa']) ;
$marca = htmlspecialchars($_POST['marca']);
$carro = htmlspecialchars($_POST['carro']);

$dados = array(
    'nome_tabela'=>'carros',
    'placa'=>$placa,
    'marca'=>$marca,
    'id'=>$carro
);

if(Banco::update($dados)){
    Painel::alerta("Dados atualizados com sucesso!");
    Painel::redirecionar(INCLUDE_PATH.'dados?carro='.$carro);
    exit;
}else{
    Painel::alerta("Erro ao atualizar dados!");
    Painel::redirecionar(INCLUDE_PATH.'dados?carro='.$carro);
    exit;
}

?>