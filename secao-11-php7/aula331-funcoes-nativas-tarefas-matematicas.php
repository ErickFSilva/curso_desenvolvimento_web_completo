<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        section {
            margin: 20px 0;
        }

        dt, li {
            margin: 10px 0;
        }

        dd {
            text-indent: 20px;
        }
    </style>
</head>

<body>

    <div class="container py-3">

        <header>
            <h1 class="h3 text-center">Funções nativas para tarefas matemáticas</h1>
        </header>

        <section>
            <ul>
                <li><b>ceil($numero)</b>: Arredonda o valor para cima</li>
                <li><b>floor($numero)</b>: Arredonda o valor para baixo</li>
                <li><b>round($numero, casas-pos-ponto)</b>: Arredonda o valor com base nas casas decimais</li>
                <li><b>rand()</b>: Gera um inteiro aleatório de 0 até randmax
                    <ul>
                        <li><b>getrandmax()</b>: retorna o maior valor aleatório possível com base no sistema operacional</li>
                    </ul>
                </li>
                <li><b>rand(inicio, fim)</b>: Gera um inteiro com base nos parâmetros informados</li>
                <li><b>sqrt($numero)</b>: Retorna a raiz quadrada</li>
            </ul>
        </section>
        <hr>

        <?php

        // Variáveis
        $num1 = 7.36;
        $num2 = 8.54;

        echo '<p>Num1: ' . $num1 . '</p>';
        echo '<p>Num2: ' . $num2 . '</p>';
        echo '<hr>';


        // ceil()?
        echo '<p>ceil(): ' . ceil($num1) . '</p>';
        echo '<p>ceil(): ' . ceil($num2) . '</p>';


        // floor():
        echo '<p>ceil(): ' . floor($num1) . '</p>';
        echo '<p>ceil(): ' . floor($num2) . '</p>';


        // round():
        echo '<p>round(): ' . round($num1) . '</p>';
        echo '<p>round(): ' . round($num2, 2) . '</p>';


        // rand():
        echo '<p>rand(): ' . rand() . '</p>';
        echo '<p>getrandmax(): ' . getrandmax() . '</p>';
        echo '<p>rand(10, 20): ' . rand(10, 20) . '</p>';


        // sqrt():
        echo '<p>sqrt(): ' . sqrt(81) . '</p>';

        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>