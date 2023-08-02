<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<?php

function calculaIR($salarioMensal) {

    if ($salarioMensal >= 1903.99 && $salarioMensal <= 2826.65) {

        return $valorIR = $salarioMensal * 0.075;
    }
    else if ($salarioMensal >= 2826.66 && $salarioMensal <= 3751.05) {

        return $valorIR = $salarioMensal * 0.15;
    }
    else if ($salarioMensal >= 3751.06 && $salarioMensal <= 4664.68) {

        return $valorIR = $salarioMensal * 0.225;
    }
    else if ($salarioMensal > 4664.68) {

        return $valorIR = $salarioMensal * 0.275;
    }
    else {

        return $valorIR = 'Isento';
    }
}

$valorIR = calculaIR(3751.06);

?>

<div class="container py-3">

    <p>Valor do IR: <?= $valorIR ?></p>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>