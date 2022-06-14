<div class="lista_carros">
    <form action="<?php echo INCLUDE_PATH?>api/add_veiculo.php" method="post" class="cadastro">
        <h1>Cadastrar Veículo</h1>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input required type="text" class="form-control" id="placa" name="placa">
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input required type="text" class="form-control" id="marca" name="marca">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Placa</th>
        <th scope="col">Marca</th>
        <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($veiculos as $key => $value) {
            ?>
        <tr>
            <th scope="row"><?php echo $key+1?></th>
            <td><?php echo $value['placa']?></td>
            <td><?php echo $value['marca']?></td>
            <td>
                <a href="<?php echo INCLUDE_PATH?>dados?carro=<?php echo $value['id']?>">Editar</a>
                 / 
                <a href="<?php echo INCLUDE_PATH?>api/excluir.php?carro=<?php echo $value['id'] ?>">Excluir</a>
            </td>
        </tr>
            <?php
        }
        ?>
    </tbody>
    </table>
</div>
