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

        // is_array
        echo '<b>- Função: is_array</b><br>';
        $array = ['Notebook', 'Teclado'];
        $retorno = is_array($array);

        echo $retorno ? 'Sim, é um array' : 'Não, não é um array';
        echo '<hr>';


        // array_keys
        echo '<b>- Função: array_keys</b>';
        $array2 = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array2);
        echo '</pre>';

        $chaves_array = array_keys($array2);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre><hr>';


        // sort
        echo '<b>- Função: sort</b>';
        $array3 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte alimentação'];
        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        sort($array3);
        echo '<pre>';
            print_r($array3);
        echo '</pre><hr>';


        // asort
        echo '<b>- Função: asort</b>';
        $array4 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte alimentação'];
        echo '<pre>';
            print_r($array4);
        echo '</pre>';

        asort($array4);
        echo '<pre>';
            print_r($array4);
        echo '</pre><hr>';


        // count
        echo '<b>- Função: count</b>';
        $array5 = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook'];
        echo '<pre>';
            print_r($array5);
        echo '</pre>';

        echo 'Array com '.count($array5).' elementos';
        echo '<hr>';


        // array_merge
        echo '<b>- Função: array_merge</b>';
        $array6 = ['OSX', 'Windows'];
        $array7 = ['Linux'];
        $array8 = ['Solares'];

        $novoArray = array_merge($array6, $array7, $array8);
        echo '<pre>';
            print_r($novoArray);
        echo '</pre><hr>';


        // explode
        echo '<b>- Função: explode</b><br>';
        $string = '26-10-2022';
        $array9 = explode('-', $string);
        
        echo $string;
        echo '<pre>';
            print_r($array9);
        echo '</pre>';
        echo $array9[2].'-'.$array9[1].'-'.$array9[0];
        echo '<hr>';


        // implode
        echo '<b>- Função: implode</b><br>';
        $array10 = ['a', 'b', 'x', 'y'];
        echo $string2 = implode(', ', $array10);

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>