<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
        h1, h2, h3, h4, h5, h6, p { margin: 0; padding: 0; }
    </style>
</head>
<body>

<div class="container py-3">

    <header>
        <h1 class="h1 text-center">Percorrendo Arrays</h1>
        <p class="fs-5 text-center">Com While, Do While e For</p>
    </header>
    
    <hr>

    <?php

        // $idx = 0;
        $registros = array(
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'), 
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'), 
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4')
        );

        // while ($idx < count($registros)) {
        //     echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
        //     echo '<p>'.$registros[$idx]['conteudo'].'</p>';
        //     echo '<hr>';

        //     $idx++;
        // }

        // do {

        //     echo '<h3>'.$registros[$idx]['titulo'].'</h3>';
        //     echo '<p>'.$registros[$idx]['conteudo'].'</p>';
        //     echo '<hr>';

        //     $idx++;

        // } while ($idx < count($registros));

        echo '<div class="d-flex justify-content-center flex-row flex-wrap">';

        for ($idx = 0; $idx < count($registros); $idx++) {

            
            echo '<div class="card m-3 w-25">';
            echo '<h1 class="card-header bg-secondary text-light text-center h5">'.$registros[$idx]['titulo'].'</h1>';
            echo '<div class="card-body">';
            echo '<p class="text-center">'.$registros[$idx]['conteudo'].'</p>';
            echo '</div>';
            echo '</div>';

        }

        echo '</div>';

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>