<?php
    $dados = Banco::newSelectAll('log','WHERE carro_id='.$_GET['carro']);
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
</div>