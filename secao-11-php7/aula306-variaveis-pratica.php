<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
<?php

    // string
    $nome = 'Erick Ferreira';
    $idade = 35;
    $peso = 80.6;
    $programador = true;

    if ($programador == true) {
        $programador = 'Sim';
    }
    else {
        $programador = 'Não';
    }

?>

<div class="container">
    <h1 class="my-3 p-2 rounded bg-dark text-light">Ficha cadastral</h1>

    <ul class="list-group">
        <li class="list-group-item active">Nome: <?= $nome ?></li>
        <li class="list-group-item">Idade: <?= $idade ?></li>
        <li class="list-group-item">Peso: <?= $peso ?></li>
        <li class="list-group-item">Programador: <?= $programador ?></li>
    </ul>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>