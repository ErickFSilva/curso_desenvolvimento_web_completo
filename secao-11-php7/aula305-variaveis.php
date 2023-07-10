<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <?php

    $varTipos1 = 'string, int, float, booblean, array...';
    $varRegVar1 = 'Devem obrigatoriamente iniciar com o caractere "$"';
    $varRegVar2 = 'Não podem conter espaços ou caracteres especiais (com exeção do underline)';
    $varRegVar3 = 'Devem iniciar com uma letra';

    ?>

    <div class="container">
        <div class="row">
            <div class="col">

                <section>
                    <header class="py-4">
                        <h1 class="h2">Variáveis - Introdução</h1>
                        <h2 class="h3">O que são variáveis?</h2>
                    </header>

                    <dl>
                        <dt>Tipos de variáveis em PHP:</dt>
                        <div class="p-3">
                            <dd><?= $varTipos1 ?></dd>
                        </div>
                        <dt>Regas para declaração de variáveis em PHP:</dt>
                        <div class="p-3">
                            <dd><?= $varRegVar1 ?></dd>
                            <dd><?= $varRegVar2 ?></dd>
                            <dd><?= $varRegVar3 ?></dd>
                        </div>
                        <dt>Não requer a definição explicita de tipos:</dt>
                        <dt>Case sensitive</dt>
                        <div class="d-flex flex-row p-3">
                            <dd class="me-2">$nome</dd>
                            <dd class="me-2">$Nome</dd>
                            <dd>$NONE</dd>
                        </div>
                        <dt>Exemplos de variáveis <span class="text-success">válidas</span> x <span class="text-danger">inválidas</span></dt>
                        <div class="p-3">
                            <div class="d-flex flex-row">
                                <dd class="me-2 text-success">$nome</dd>
                                <dd class="me-2 text-success">$fone1</dd>
                                <dd class="me-2 text-success">$endereco_2</dd>
                            </div>
                            <div class="d-flex flex-row">
                                <dd class="me-2 text-danger">$ idade</dd>
                                <dd class="me-2 text-danger">$1fone</dd>
                                <dd class="me-2 text-danger">$número</dd>
                            </div>
                        </div>
                    </dl>
                </section>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>