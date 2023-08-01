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

    $idade = 36;
    $peso = 80.3;
    $resultado = "";

    if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
        $resultado = "Atende aos requisitos";
    }
    else {
        $resultado = "Não atende aos requisitos";
    }

    ?>

    <div class="container">
        <header>
            <h1>Doador de Sangue</h1>
        </header>

        <div>
            <input type="text" id="resultado" class="form-control" value="<?= $resultado ?>">
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>