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

    $usuarioCartaoLoja = false;
    $valorCompra = 59;
    $valorFrete = 50;
    $descontoFrete = false;

    if ($usuarioCartaoLoja && $valorCompra >= 100) {
        $valorFrete = 0;
        $descontoFrete = true;
    }
    else if ($usuarioCartaoLoja && ($valorCompra >= 60 && $valorCompra < 100)) {
        $valorFrete = 20;
        $descontoFrete = true;
    }
    else if ($usuarioCartaoLoja == false && $valorCompra >= 100) {
        $valorFrete = 20;
        $descontoFrete = true;
    }
    else if ($usuarioCartaoLoja == false && ($valorCompra >= 60 && $valorCompra < 100)) {
        $valorFrete = 35;
        $descontoFrete = true;
    }

    $valorTotalPedido = $valorCompra + $valorFrete;

?>

<div class="container py-3">

    <div class="card text-center w-75 m-auto border-light">
        <div class="card-header bg-success text-light">
            <span class="h4">Detalhes do pedido</span>
        </div>

        <div class="card-body bg-light">
            <p class="card-text mb-0">Possui cartão da loja? 
                <span class="fw-bold">
                    <?php
                        if ($usuarioCartaoLoja) {
                            echo 'Sim';
                        }
                        else {
                            echo 'Não';
                        }
                    ?>
                </span>
            </p>

            <p class="card-text">Recebeu desconto no frete? 
                <span class="fw-bold">
                    <?php
                        if ($descontoFrete) {
                            echo 'Sim';
                        }
                        else {
                            echo 'Não';
                        }
                    ?>
                </span>
            </p>

            <p class="card-text mb-0">Valor da compra: R$ <span class="fw-bold"><?= $valorCompra ?></span></p>
            <p class="card-text">Valor do frete: R$ <span class="fw-bold"><?= $valorFrete ?></span></p>
        </div>

        <div class="card-footer bg-warning">
            <div class="fs-5">Valor total do pedido: <span class="fw-bold">R$ <?= $valorTotalPedido ?></span></div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>