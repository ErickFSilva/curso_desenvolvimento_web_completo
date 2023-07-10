<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        h1, h2, h3, h4, h5, h6, p { margin: 0; padding: 0; }
        ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container-fluid py-3">

    <header>
        <h1 class="text-center">Praticando um pouco - Foreach em Arrays associativos e Foreach encadeados</h1>
    </header>

    <hr>

    <?php

        $funcionarios = [
            ['nome' => 'João', 'salario' => 2500, 'data_nasc' => '1970-03-06'],
            ['nome' => 'Maria', 'salario' => 3000, 'data_nasc' => '1980-10-16'],
            ['nome' => 'Júlia', 'salario' => 2200, 'data_nasc' => '1965-05-11']
        ];

        echo '<pre>';
            print_r($funcionarios);
        echo '</pre><hr>';

        foreach($funcionarios as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor) {

                echo "$idx2 - $valor <br>";

            }

            echo '<hr>';

        }

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>