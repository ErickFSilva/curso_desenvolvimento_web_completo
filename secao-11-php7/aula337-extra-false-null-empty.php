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
        <h1>False, Null e Empty</h1>
    </header>

    

    <?php

        // false (true/false) - tipo de variável boolean
        // null e empty - são valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        echo '<hr>';


        // valores null
        is_null($funcionario1) ? 'sim, a variável é null' : 'Não, a variável não é null';
        echo '<br>';

        if (is_null($funcionario2)) {
            echo 'sim, a variável é null';
        }
        else {
            echo 'Não, a variável não é null';
        }
        echo '<br>';

        if (is_null($funcionario3)) {
            echo 'sim, a variável é null';
        }
        else {
            echo 'Não, a variável não é null';
        }
        echo '<hr>';


        // valores empty
        if (empty($funcionario2)) {
            echo 'sim, a variável está vazia';
        }
        else {
            echo 'Não, a variável não está vazia';
        }
        echo '<br>';
        
        if (empty($funcionario2)) {
            echo 'sim, a variável está vazia';
        }
        else {
            echo 'Não, a variável não está vazia';
        }
        echo '<br>';
        
        if (empty($funcionario3)) {
            echo 'sim, a variável está vazia';
        }
        else {
            echo 'Não, a variável não está vazia';
        }


    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>