<?php
    $dados = Banco::newSelectAll('log','WHERE carro_id='.$_GET['carro'].' ORDER BY id DESC LIMIT 5');
    $dados = array_reverse($dados);
?>

<div class="log">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Data e Hora</th>
            <th scope="col">Km inicial</th>
            <th scope="col">Km final</th>
            <th scope="col">Motorista</th>
            <th scope="col">Objetivo</th>
            <th scope="col">Observação</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($dados as $key => $value) {
            ?>
        <tr>
            <td><?php echo $value['data']?></td>
            <td><?php echo $value['km_inicial']?></td>
            <td><?php echo $value['km_final']?></td>
            <td><?php echo $value['motorista']?></td>
            <td><?php echo $value['objetivo']?></td>
            <td><?php echo $value['obs']?></td>
        </tr>
            <?php
        }
        ?>
    </tbody>
    </table>

    <form action="<?php echo INCLUDE_PATH?>api/add_log.php" method="post" class="row g-3">
        <div class="col-auto">
            <input required name='data' type="text" class="form-control" id="data" placeholder="Data e Hora">
        </div>
        <div class="col-auto">
            <input required name='km_inicial' type="text" class="form-control" id="km_inicial" placeholder="Km inicial">
        </div>
        <div class="col-auto">
            <input required name='km_final' type="text" class="form-control" id="km_final" placeholder="Km final">
        </div>
        <div class="col-auto">
            <input required name='motorista' type="text" class="form-control" id="motorista" placeholder="Motorista">
        </div>
        <div class="col-auto">
            <input required name='objetivo' type="text" class="form-control" id="objetivo" placeholder="Objetivo">
        </div>
        <div class="col-auto">
            <input name='obs' type="text" class="form-control" id="obs" placeholder="Observação">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary mb-3">Adicionar registro</button>
            <a class="btn btn-secondary mb-3" href="<?php echo INCLUDE_PATH?>log_completo?carro=<?php echo $_GET['carro']?>">Visualizar log completo</a>
        </div>
        <input type="hidden" name='carro' value="<?php echo $_GET['carro']?>">
    </form>

</div>
