<?php 
$veiculos = Banco::newSelectAll('carros');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Veículos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH?>css/global.css?hash=<?php echo filemtime(BASE_DIR.'/css/global.css') ?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo INCLUDE_PATH?>">Gestão de Veículos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo INCLUDE_PATH?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo INCLUDE_PATH?>gerenciar">Gerenciar Veículos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Meus Veículos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            foreach ($veiculos as $key => $value) {
              ?>
                <li><a class="dropdown-item" href="<?php echo INCLUDE_PATH?>dados?carro=<?php echo $value['id'] ?>"><?php echo $value['placa']." ".$value['marca'] ?></a></li>
              <?php
            }
            ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="https://github.com/William-Lomar/Gestao_Veiculos">GitHub</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
