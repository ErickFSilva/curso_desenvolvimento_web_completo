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

<div class="container py-3">

    <header>
        <h1 class="h2">Funções nativas para manipular strings</h1>
    </header>

    <ul class="mt-4">
        <li><b>strtolower($texto)</b>: Transforma todos os caracteres da string em minúsculo</li>
        <li><b>strtoupper($texto)</b>: Transforma todos os caracteres da string em maiúsculo</li>
        <li><b>ucfirst($texto)</b>: Tranforma o primeiro caracter da string em maiúsculo</li>
        <li><b>strlen($texto)</b>: Conta a quantidade de caracteres de uma string</li>
        <li><b>str_replace('procura_por', 'substitui_por', $texto)</b>: Substitui uma cadeia de caracteres por outra, dentro de uma string</li>
        <li><b>substr($texto, posicao_inicial, qtd_caracteres)</b>: Retorna parte de uma string</li>
    </ul>
    <hr>

    <?php

        $texto = 'Curso completo de PHP';
        echo $texto.'<br><br>';

        // String to lower
        echo strtolower($texto).'<br>';

        // String to upper
        echo strtoupper($texto).'<br>';

        // Upper case first
        echo ucfirst($texto).'<br>';

        // String length
        echo strlen($texto).'<br>';

        // String replace
        echo str_replace('PHP', 'WEB', $texto).'<br>';

        // Sub string
        echo substr($texto, 0, 14).'...';

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>