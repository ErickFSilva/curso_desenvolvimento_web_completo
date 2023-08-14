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
        <h1 class="mb-3 display-4">Array Multidimencional</h1>
    </header>

    <?php

    $lista_coisas = [];

    $lista_coisas['frutas'] = [1=>'Banana', 2=>'Maçã', 3=>'Morango', 4=>'Uva'];
    // $lista_coisas['pessoas'] = [1=>'João', 2=>'José', 3=>'Maria'];
    $lista_coisas['pessoas'] = [
        'Pais' => [
            'Pais-1' => ['Erick', 'Raquézia'],
            'Pais-2' => ['Zenilson', 'Camila']
        ],
        'Filhos' => [
            'Filhos-1' => ['Gabriel', 'Gabriely'],
            'Filhos-2' => ['Lucas Gabriel']
        ]
    ];

    echo '<pre>';
    var_dump($lista_coisas['frutas']);
    echo '</pre>';
    echo '<hr>';

    echo '<pre>';
    print_r($lista_coisas['pessoas']);
    echo '</pre>';
    echo '<hr>';

    echo $lista_coisas['frutas'][3];
    echo '<br>';
    echo $lista_coisas['pessoas']['Pais']['Pais-1'][0];

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>