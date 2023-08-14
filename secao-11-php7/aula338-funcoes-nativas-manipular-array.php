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

        // 
        function imprime_array($array) {
            echo "<pre>";
            print_r($array);
            // var_dump($array);
            echo "</pre>";
        }

        // is_array: verifica se o parâmetro é um array, retornando 'true' o 'false';
        echo "<p class='h5'>- Função: is_array()</p>";

        $isArray1 = 'String';
        $isArray2 = [];

        $retorno_isarray1 = is_array($isArray1);
        $retorno_isarray2 = is_array($isArray2);

        echo $retorno_isarray1 ? "<p>Sim, é um array</p>" : "<p>Não, não é um array</p>";
        echo $retorno_isarray2 ? "<p>Sim, é um array</p>" : "<p>Não, não é um array</p>";
        echo '<hr>';


        // array_keys: retorna todas as chaves de um array;
        echo "<p class='h5'>- Função: array_keys()</p>";

        $arrayKeys1 = [1 => 'a', 7 => 'b', 18 => 'c'];
        $chaves_array = array_keys($arrayKeys1);

        imprime_array($arrayKeys1);
        imprime_array($chaves_array);
        echo '<hr>';


        // sort: ordena um array e reajusta seus índices. Ele retorna 'true' ou 'false' para a tentativa de ordenação do mesmo 'array';
        echo "<p class='h5'>- Função: sort()</p>";

        $array_info1 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
        imprime_array($array_info1);

        sort($array_info1);
        imprime_array($array_info1);
        echo '<hr>';


        // asort: é semelhante ao 'sort', mas ordena o array preservando a posição dos índices;
        echo "<p class='h5'>- Função: asort()</p>";

        $array_info2 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
        imprime_array($array_info2);

        asort($array_info2);
        imprime_array($array_info2);
        echo '<hr>';


        // count: conta a quantidade de elementos existentes dentro de um array;
        echo "<p class='h5'>- Função: count()</p>";

        $array_info3 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];

        imprime_array($array_info3);
        echo "<p>".count($array_info3)." ítens no array</p>";
        echo '<hr>';


        // array_merge: funde um ou mais arrays, retornando um novo 'array' através da concatenação dos 'arrays' passados como parâmetros;
        echo "<p class='h5'>- Função: array_merge()</p>";

        $array_os1 = ['osx', 'windows'];
        $array_os2 = ['linux'];
        $array_os3 = ['solaris'];
        
        echo "<p># Array 1:<p>";
        imprime_array($array_os1);

        echo "<p># Array 2:</p>";
        imprime_array($array_os2);

        echo "<p># Array 3:</p>";
        imprime_array($array_os3);

        $arrayMerge = array_merge($array_os1, $array_os2, $array_os3);
        
        echo "<p># Array Merge:</p>";
        imprime_array($arrayMerge);
        echo '<hr>';


        // explode: divide uma string baseada em um delimitador;
        echo "<p class='h5'>- Função: explode()</p>";

        $data = '2018-05-26';
        $array_explode = explode('-', $data);

        echo "<p>".$data."</p>";
        imprime_array($array_explode);
        echo '<hr>';


        // implode: junta elementos de um array em uma string;
        echo "<p class='h5'>- Função: implode()</p>";

        imprime_array($array_explode);

        $array_implode = implode('-', $array_explode);
        echo "<p>".$array_implode." é um ".gettype($array_implode)."</p>";


        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>