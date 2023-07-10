<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container py-3">

    

    <?php

        function calculaIR($salario) {
            $valorImposto;

            if ($salario <= 1903.98) {
                $valorImposto = 0;
            }
            else if ($salario >= 1903.99 && $salario <= 2828.65) {
                $valorImposto = ($salario / 100) * 7.5;
            }
            else if ($salario >= 2826.66 && $salario <= 3751.05) {
                $valorImposto = ($salario / 100) * 15;
            }
            else if ($salario >= 3751.06 && $salario <= 4664.68) {
                $valorImposto = ($salario / 100) * 22.5;
            }
            else if ($salario > 4664.68) {
                $valorImposto = ($salario / 100) * 27.5;
            }

            return $valorImposto;

        }

        $valorIR = calculaIR(2679.37);

    ?>

    <header class="mt-4">
        <h1>Atividade de fixação</h1>
    </header>
    <hr>

    <section>
        <div class="card w-50 shadow-sm">
            <div class="card-header text-center">
                <div class="py-2 fw-bold fs-5">Imposto de Renda</div>
            </div>
            
            <div class="card-text px-3 text-center">
                <div class="py-2"><?= round($valorIR,2) ?></div>
            </div>
        </div>
    </section>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>