<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul,
        ol {
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

        <!--

            - Funções para pesquisa dentro de arrays:

            in_array(): retorna 'true' (1) ou 'false' (vazio) para a existência do que está sendo procurado;
            
            array_search(): retorna o índice do valor pesquisado, caso ele exista. Caso não, retorna um valor null, vazio;

        -->

        <section>
            <header>
                <h1 class="fs-3">- Array simples:</h1>
            </header>

            <?php

            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

            echo '<pre>';
            print_r($lista_frutas);
            // var_dump($lista_frutas);
            echo '</pre>';

            ?>

            <!-- 
                in_array(): retorna 'true' (1) ou 'false' (vazio) para a existência do que está sendo procurado;
             -->
            <div class="m-3 p-3 border">
                <h2 class="fs-5">in_array()</h2>

                <?php

                echo "<p>" . in_array('Banana', $lista_frutas) . "</p>";
                echo in_array('Abacate', $lista_frutas) ? "<p>Fruta encontrada</p>" : "<p>Fruta não encontrada</p>";
                echo in_array('Morango', $lista_frutas) ? "<p>Fruta encontrada</p>" : "<p>Fruta não encontrada</p>";

                ?>
            </div>


            <!-- 
                array_search(): retorna o índice do valor pesquisado, caso ele exista. Caso não, retorna um valor null, vazio;
             -->
            <div class="m-3 p-3 border">
                <h2 class="fs-5">array_search()</h2>

                <?php

                $fruta1 = 'Uva';
                $search1 = array_search($fruta1, $lista_frutas);

                echo "<p>" . array_search($fruta1, $lista_frutas) . "</p>";

                if ($search1 != null) {
                    echo "<p>Fruta encontrada: $lista_frutas[$search1]</p>";
                } else {
                    echo "<p>Fruta não encontrada</p>";
                }

                ?>
            </div>
        </section>

        <section>
            <header>
                <h1 class="fs-3">- Array multidimencional:</h1>
            </header>

            <?php

            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João', 'José', 'Maria']
            ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            $fruta2 = 'Uva';
            $pessoa2 = 'José';
            $search2;

            ?>


            <div class="m-3 p-3 border">
                <h2 class="fs-5">in_array()</h2>

                <?php

                echo in_array($fruta2, $lista_coisas['frutas']) ? "<p>Fruta encontrada</p>" : "<p>Fruta não encontrada</p>";
                echo in_array($pessoa2, $lista_coisas['pessoas']) ? "<p>Pessoa encontrada</p>" : "<p>Pessoa não encontrada</p>";

                ?>
            </div>


            <div class="m-3 p-3 border">
                <h2 class="fs-5">array_search()</h2>

                <?php

                echo "<p>Fruta: " . array_search($fruta2, $lista_coisas['frutas']) . "</p>";
                echo "<p>Pessoa: " . array_search($pessoa2, $lista_coisas['pessoas']) . "</p>";
                echo "<hr>";

                $search2 = array_search($pessoa2, $lista_coisas['pessoas']);

                if ($search2 != null) {
                    echo "Pessoa encontrada: " . $lista_coisas['pessoas'][$search2];
                } else {
                    echo "Pessoa não encontrada";
                }

                ?>
            </div>
        </section>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>