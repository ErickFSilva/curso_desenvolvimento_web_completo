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
        <h1>Operadores de Incremento e Decremento</h1>
    </header>

    <dl>
        <dt>Operadores:</dt>
            <dd><b>Pré-incremento (++$a)</b>: Adiciona uma unidade antes de retornar $a</dd>
            <dd><b>Pós-incremento ($a++)</b>: Retorna $a e depois adiciona uma unidade</dd>
            <dd><b>Pré-decremento (--$a)</b>: Diminui uma unidade antes de retornar $a</dd>
            <dd><b>Pós-decremento ($a--)</b>: Retorna $a e depois diminui uma unidade</dd>
    </dl>
    <hr>

    <h2 class="h4">Pós/Pré-incremento:</h2>
    <?php

        $a = 7;
        $b = 7;

        echo 'O valor contido em "a" é '.$a;
        echo '<br>O valor contido em "a" pós-incremento é '.$a++;
        echo '<br>O valor atualizado em "a" é '.$a;
        echo '<br>';
        echo '<br>O valor contido em "b" é '.$b;
        echo '<br>O valor contido em "b" pré-incremento é '.++$b;
        echo '<br>O valor atualizado em "b" é '.$a;

    ?>
    <hr>

    <h2 class="h4">Pós/Pré-decremento:</h2>
    <?php

        $a = 7;
        $b = 7;

        echo 'O valor contido em "a" é '.$a;
        echo '<br>O valor contido em "a" pós-decremento é '.$a--;
        echo '<br>O valor atualizado em "a" é '.$a;
        echo '<br>';
        echo '<br>O valor contido em "b" é '.$b;
        echo '<br>O valor contido em "b" pré-decremento é '.--$b;
        echo '<br>O valor atualizado em "b" é '.$a;

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>