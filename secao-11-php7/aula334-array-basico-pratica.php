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

        <header>
            <h1 class="mb-4 display-3">Array básico</h1>
        </header>

        <div class="row">
            <div class="d-flex flex-column flex-md-row gap-3">

                <div class="p-3 w-100 border border-secondary">

                    <h2 class="mb-3 fs-5">- Arrays sequênciais (numéricos)</h2>

                    <?php

                    // Declarando:
                    $lista_fruta = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

                    // Listando o array:
                    echo '<pre>';
                    var_dump($lista_fruta);
                    echo '</pre>';
                    echo '<hr>';

                    // Adicionando ítem ao array:
                    $lista_fruta[] = 'Abacaxi';

                    echo '<pre>';
                    var_dump($lista_fruta);
                    echo '</pre>';
                    echo '<hr>';

                    // Recuperando um valor específico do array:
                    echo $lista_fruta[2];

                    ?>

                </div>

                <div class="p-3 w-100 border border-secondary">

                    <h2 class="mb-3 fs-5">- Arrays associativos</h2>

                    <?php

                    // Declarando o array:
                    $lista_fruta2 = [
                        'a' => 'Banana', 
                        'b' => 'Maçã', 
                        'c' => 'Morango', 
                        'd' => 'Uva', 
                        'e' => 'Abacate'
                    ];

                    // Listando o array:
                    echo '<pre>';
                    var_dump($lista_fruta2);
                    echo '</pre>';
                    echo '<hr>';

                    // Adicionando ítem:
                    $lista_fruta2['w'] = 'Abacaxi';

                    // Listando um ítem do array
                    echo $lista_fruta2['w'];
                    echo '<hr>';

                    // Listando o array:
                    echo '<pre>';
                    var_dump($lista_fruta2);
                    echo '</pre>';

                    ?>

                </div>

            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>