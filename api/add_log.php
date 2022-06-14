<?php 
require_once('../config.php');

$data = htmlspecialchars($_POST['data']);
$km_inicial = htmlspecialchars($_POST['km_inicial']);
$km_final = htmlspecialchars($_POST['km_final']);
$motorista = htmlspecialchars($_POST['motorista']);
$objetivo = htmlspecialchars($_POST['objetivo']);
$obs = htmlspecialchars($_POST['obs']);
$carro = htmlspecialchars($_POST['carro']);

$dados = array(
    'data'=>$data,
    'km_inicial'=>$km_inicial,
    'km_final'=>$km_final,
    'motorista'=>$motorista,
    'objetivo'=>$objetivo,
    'obs'=>$obs,
    'carro_id'=>$carro
);

if(Banco::insert($dados,'log')){
    Painel::alerta("Dados inseridos no banco com sucesso!");
    Painel::redirecionar(INCLUDE_PATH.'log?carro='.$carro);
    exit;
}else{
    Painel::alerta("Ocorreu um erro ao inserir dados no banco!");
    Painel::redirecionar(INCLUDE_PATH.'log?carro='.$carro);
    exit;
}
?>