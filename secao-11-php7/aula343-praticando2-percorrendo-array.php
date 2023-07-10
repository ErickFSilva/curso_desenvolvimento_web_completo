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
        <h1 class="text-center">Percorrendo Array de Notícias</h1>
    </header>

    <hr>

    <?php

        $titulo_1 = '<div class="card-header"><b>Lorem ipsum dolor</b></div>';
        $texto_1 = '<div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ligula erat. Proin et congue urna.</div>';

        $titulo_2 = '<div class="card-header"><b>Lorem ipsum dolor</b></div>';
        $texto_2 = '<div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ligula erat. Proin et congue urna.</div>';

        $titulo_3 = '<div class="card-header"><b>Lorem ipsum dolor</b></div>';
        $texto_3 = '<div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ligula erat. Proin et congue urna.</div>';

        $titulo_4 = '<div class="card-header"><b>Lorem ipsum dolor</b></div>';
        $texto_4 = '<div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet ligula erat. Proin et congue urna.</div>';

        $noticias = [
            ['titulo' => $titulo_1, 'texto' => $texto_1],
            ['titulo' => $titulo_2, 'texto' => $texto_2],
            ['titulo' => $titulo_3, 'texto' => $texto_3],
            ['titulo' => $titulo_4, 'texto' => $texto_4]
        ];

        foreach($noticias as $conteudo) {
            
            echo '<div class="card mb-3 w-75 m-auto">';
            foreach($conteudo as $texto) {

                echo $texto;

            }
            echo '</div>';

        }

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>