<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container py-3">

    <header>
        <h1 class="h3 text-center">Funções nativas para tarefas matemáticas</h1>
    </header>

    <ul>
        <li><b>ceil($numero)</b>: Arredonda o valor para cima</li>
        <li><b>floor($numero)</b>: Arredonda o valor para baixo</li>
        <li><b>round($numero, casas-pos-ponto)</b>: Arredonda o valor com base nas casas decimais</li>
        <li><b>rand()</b>: Gera um inteiro aleatório</li>
        <li><b>rand(inicio, fim)</b>: Gera um inteiro com base nos parâmetros informados</li>
        <li><b>sqrt($numero)</b>: Retorna a raiz quadrada</li>
    </ul>
    <hr>

    <?php

        $numero = 35.854;
        echo $numero.'<br><br>';

        // ceil - Arredonda o valor para cima
        echo ceil($numero).'<br>';

        // floor - Arredonda o valor para baixo
        echo floor($numero).'<br>';

        // round - Arredonda o valor com base nas casas decimais
        echo round($numero, 1).'<br>';

        // rand - Gera um inteiro aleatório
        echo rand().'<br>';
        echo getrandmax().'<br>';

        // sqrt - Retorna a raiz quadrada
        echo sqrt(81);

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>