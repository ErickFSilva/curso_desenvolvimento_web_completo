<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container py-3">

    <header>
        <h1>Array básico</h1>
    </header>

    <?php

        // - array sequenciais (numéricos)
        // $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        // funções para debug de array
        echo '<hr><pre>';
            var_dump($lista_frutas);
        echo ('</pre>');
        
        $lista_frutas[] = 'Abacaxi';

        echo ('<hr><pre>');
            print_r($lista_frutas);
        echo ('</pre><hr>');
        
        // array_push — Adiciona um ou mais elementos no final de um array
        array_push($lista_frutas, 'melancia', 'batata');

        echo ('<pre>');
            print_r($lista_frutas);
        echo ('</pre><hr>');

        // recuperar um ítem apenas
        echo $lista_frutas[1].'<br>';
        echo $lista_frutas[4].'<br>';


        // - array associativos
        $lista_frutas2 = ['a'=>'Banana', 'b'=>'Maçã', 'c'=>'Morango', 'd'=>'Uva'];
        $lista_frutas2['w'] = 'Abacaxi';
        
        // debugando o array
        echo '<hr><pre>';
            var_dump($lista_frutas2);
        echo ('</pre><hr>');

        // recuperar um ítem apenas
        echo $lista_frutas2['w'];

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>