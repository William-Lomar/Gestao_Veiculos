<div class="lista_carros">
<?php
if(count($veiculos) == 0){
    ?> 
    <a class="sem_veiculo" href="<?php echo INCLUDE_PATH?>gerenciar">Cadastre seu primeiro veículo aqui!</a>
    <?php
}else{
    ?>
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
        <td><a href="<?php echo INCLUDE_PATH?>log?carro=<?php echo $value['id']?>">Visualizar folha de registro</a></td>
    </tr>
        <?php
    }
}?>
        </tbody>
    </table>
</div>
