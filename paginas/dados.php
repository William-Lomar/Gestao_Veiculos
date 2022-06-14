<?php
    $dados = Banco::selecionarID('carros',$_GET['carro']);
?>

<div class="lista_carros">
<form action="<?php echo INCLUDE_PATH?>api/atualizar.php" method="post" class="cadastro">
    <h1>Editar Veículo</h1>
    <div class="mb-3">
        <label for="placa" class="form-label">Placa</label>
        <input name='placa' type="text" class="form-control" id="placa" value="<?php echo $dados['placa']?>">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input name='marca' type="text" class="form-control" id="marca" value="<?php echo $dados['marca']?>">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a class="btn btn-secondary" href="<?php echo INCLUDE_PATH?>log?carro=<?php echo $_GET['carro']?>">Visualizar folha de registro</a>
    <input type="hidden" value="<?php echo $_GET['carro']?>" name='carro'>
</form>
<div>