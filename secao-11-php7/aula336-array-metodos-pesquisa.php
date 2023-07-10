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
        <h1>Array - Pesquisas</h1>
    </header>

    <?php

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre><hr>';

        $lista_frutas[] = 'Abacate';
        echo $lista_frutas[4].'<hr>';


        // in_array() - retorna true ou false para a existência do que está sendo procurado
        $existe = in_array('Abacate', $lista_frutas);

        if ($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        }
        else {
            echo 'Não, o valor pesquisado não existe no array';
        }
        echo '<hr>';


        // array_search()- retorna o índice do valor pesquisado , caso ele exista
        $existe2 = array_search('Abacaxi', $lista_frutas);

        if ($existe2) {
            echo 'Sim, o valor pesquisado existe no array';
        }
        else {
            echo 'Não, o valor pesquisado não existe no array';
        }
        echo '<hr>';

        $lista_frutas[] = 'Abacaxi';

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre><hr>';


        // Array multidimencional
        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre><hr>';

        // Pesquisa em array multidimencional
        // echo in_array('Banana', $lista_coisas['frutas']).'<br>';
        // echo $lista_coisas['frutas'][array_search('Banana', $lista_coisas['frutas'])];

        // 
        $resultado;
        $categoria = 'pessoas';
        $pesquisa = 'João';

        if (in_array($pesquisa, $lista_coisas[$categoria]) == 1) {

            $resultado = $lista_coisas[$categoria][array_search($pesquisa, $lista_coisas[$categoria])];

        }
        else{
            $resultado = 'O valor pesquisado não existe no array';
        }

    ?>

    <input type="text" value="<?= $resultado ?>" class="form-control" disabled>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>