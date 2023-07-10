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
        <h1>Operadores Aritméticos</h1>
        <p>O que são operadores aritméticos?</p>
    </header>

    <dl>
        <dt>Operadores:</dt>
            <dd><b>Adição (+):</b> Soma valores</dd>
            <dd><b>Subtração (-):</b> Diferença entre valores</dd>
            <dd><b>Multiplicação (*):</b> Produto dos valores</dd>
            <dd><b>Divisão (/):</b> Quociente dos valores</dd>
            <dd><b>Módulo (%):</b> Resto existente em uma operação de divisão</dd>
    </dl>
    <hr>

    <?php

        $num1 = 35;
        $num2 = 7;

        // soma
        echo "A soma de $num1 e $num2 é ".($num1 + $num2);
        echo "<br>A subtração de $num1 e $num2 é ".($num1 - $num2);
        echo "<br>A multiplicação de $num1 e $num2 é ".($num1 * $num2);
        echo "<br>A divisão de $num1 e $num2 é ".($num1 / $num2);
        echo "<br>O módulo de $num1 e $num2 é ".($num1 % $num2);

    ?>
    <hr>

    <?php

        $a = 30;
        $a += 5;
        echo $a.'<br>';

        $b = 10;
        $b -= 4;
        echo $b.'<br>';

        $c = 85;
        $c *= 4;
        echo $c.'<br>';

        $d = 35;
        $d /= 4;
        echo $d.'<br>';

        $e = 45;
        $e %= 4;
        echo $e.'<br>';

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>