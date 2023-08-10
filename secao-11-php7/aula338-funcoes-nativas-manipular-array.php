<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul {
            margin: 20px 0;
        }

        dt {
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
            <h1>Funções nativas para manipular arrays</h1>
        </header>

        <ul>
            <li><b>is_array(array)</b>: verifica se o parâmetro é um array</li>
            <li><b>array_keys(array)</b>: retorna todas as chaves de um array</li>
            <li><b>sort(array)</b>: ordena um array e reajusta seus índices</li>
            <li><b>asort(array)</b>: ordena um array preservando os índices</li>
            <li><b>count(array)</b>: conta a quantidade de elementos de um array</li>
            <li><b>array_merge(array)</b>: funde um ou mais arrays</li>
            <li><b>explode(array)</b>: divide uma string baseada em um delimitador</li>
            <li><b>implode(array)</b>: junta elementos de um array em uma string</li>
        </ul>
        <hr>

        <?php

        // is_array: verifica se o parâmetro é um array
        echo "<p class='h5'>- Função: is_array()</p>";

        $isArray = 'String';
        $isArray2 = [];
        $retorno = is_array($isArray2);

        echo $retorno ? "<p>Sim, é um array</p>" : "<p>Não, não é um array</p>";
        echo "<hr>";


        // array_keys: retorna todas as chaves de um array
        echo "<p class='h5'>- Função: array_keys()</p>";

        $arrayKeys = [1 => 'a', 7 => 'b', 18 => 'c'];

        echo '<pre>';
        print_r($arrayKeys);
        echo '</pre>';

        $chaves_arrayKeys = array_keys($arrayKeys);

        echo '<pre>';
        print_r($chaves_arrayKeys);
        echo '</pre>';
        echo "<hr>";


        // sort: ordena um array e reajusta seus índices
        echo "<p class='h5'>- Função: sort()</p>";

        $array_sort = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];

        echo "<pre>";
        print_r($array_sort);
        echo "</pre>";

        sort($array_sort); // Retorna 'true' ou 'false' para a tentativa de reordenação de um array
        
        echo "<pre>";
        print_r($array_sort);
        echo "</pre>";


        // asort: ordena um array preservando os índices



        // count: conta a quantidade de elementos de um array



        // array_merge: funde um ou mais arrays



        // explode: divide uma string baseada em um delimitador



        // implode: junta elementos de um array em uma string


        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>