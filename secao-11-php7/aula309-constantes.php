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

    // Desenvolvimento:
    define('BD_DES_URL', 'endereco_bd_dev');
    define('BD_DES_USUARIO', 'usuario_dev');
    define('BD_DES_SENHA', 'senha_dev');

    // Produção:
    define('BD_PROD_URL', 'endereco_bd_dev');
    define('BD_PROD_USUARIO', 'usuario_dev');
    define('BD_PROD_SENHA', 'senha_dev');

    ?>

    <div class="container py-3">

        <dl>
            <dt>BD de desenvolvimento</dt>
            <dd><?= BD_DES_URL ?></dd>
            <dd><?= BD_DES_USUARIO ?></dd>
            <dd><?= BD_DES_SENHA ?></dd>
        </dl>

        <dl>
            <dt>BD de produção</dt>
            <dd><?= BD_PROD_URL ?></dd>
            <dd><?= BD_PROD_USUARIO ?></dd>
            <dd><?= BD_PROD_SENHA ?></dd>
        </dl>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>