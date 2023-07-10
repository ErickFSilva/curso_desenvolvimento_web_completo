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
        <h1>Array Multidimencional</h1>
    </header>

    <?php

        $lista_coisas = Array();
        $lista_coisas['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];
        $lista_coisas['pessoas'] = ['João', 'Maria', 'José'];

        echo '<pre>';
        print_r($lista_coisas['frutas']);
        echo '</pre><hr>';

        echo '<pre>';
        print_r($lista_coisas['pessoas']);
        echo '</pre><hr>';

        echo $lista_coisas['frutas'][1].'<br>';
        echo $lista_coisas['pessoas'][2];

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>