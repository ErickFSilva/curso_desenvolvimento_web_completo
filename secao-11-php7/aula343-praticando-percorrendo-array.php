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

        h1, h2, h3, h4, h5, h6, p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>

    <?

    // print_array
    function print_array($array)
    {
        echo "<div class='my-3 p-3 border'>";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        echo "</div>";
    }

    $registros = [
        ['titulo' => 'Título noticia 1', 'conteudo' => 'Conteúdo notícia 1'],
        ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
        ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3']
    ];

    ?>

    <div class="container py-3">

        <header>
            <h1 class="h1 text-center">Percorrendo Arrays</h1>
            <p class="fs-5 text-center">Com While, Do While e For</p>
        </header>

        <hr>

        <!-- Notícias - com 'while' -->
        <div class="card mb-3">
            <div class="card-header">
                <h1 class="h6">Notícias - com 'while'</h1>
            </div>
            <div class="card-body">

                <?php

                $idx = 0;

                // count: conta a quantidade de elementos de um array;
                while ($idx < count($registros)) {

                ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <?= $registros[$idx]['titulo'] ?>
                    </div>
                    <div class="card-body">
                        <?= $registros[$idx]['conteudo'] ?>
                    </div>
                </div>

                <?php

                    $idx++;

                }

                ?>

            </div>
        </div>


        <!-- Notícias - com 'do while' -->
        <div class="card mb-3">
            <div class="card-header">
                <h1 class="h6">Notícias - com 'do while'</h1>
            </div>
            <div class="card-body">

                <?php

                $idx = 0;

                
                do {

                ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <?= $registros[$idx]['titulo'] ?>
                    </div>
                    <div class="card-body">
                        <?= $registros[$idx]['conteudo'] ?>
                    </div>
                </div>

                <?php

                    $idx++;

                // count: conta a quantidade de elementos de um array;
                } while($idx < count($registros));

                ?>

            </div>
        </div>


        <!-- Notícias - com 'for' -->
        <div class="card mb-3">
            <div class="card-header">
                <h1 class="h6">Notícias - com 'for'</h1>
            </div>
            <div class="card-body">

                <?php

                // count: conta a quantidade de elementos de um array;
                for($idx = 0; $idx < count($registros); $idx++) {

                ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <?= $registros[$idx]['titulo'] ?>
                    </div>
                    <div class="card-body">
                        <?= $registros[$idx]['conteudo'] ?>
                    </div>
                </div>

                <?php

                };

                ?>

            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>