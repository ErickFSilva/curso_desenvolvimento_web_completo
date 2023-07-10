<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        h1, h2, h3, h4, h5, h6, p { margin: 0; padding: 0; }
        ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container-fluid py-3">

    <header>
        <h1 class="text-center">OO - Pilar do Polimorfismo</h1>
    </header>
    <hr>

    <?php

        // Classe veiculo
        class Veiculo {

            // Atributos
            public $placa = null;
            public $cor = null;

            // Métodos
            function acelerar() {
                echo 'Acelerar';
            }

            function freiar() {
                echo 'Freiar';
            }

            function trocarMarcha() {
                echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
            }

        }


        // Classe carro
        class Carro extends Veiculo {

            // Atributos
            public $teto_solar = true;

            // Construtor
            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            // Métodos
            function abrirTetoSolar() {
                echo 'Abrir teto solar';
            }

            function alterarPosicaoVolante() {
                echo 'Alterar posição volante';
            }

        }


        // Class moto
        class Moto extends Veiculo {

            // Atributos
            public $contraPesoGuidao = true;

            // Construtor
            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            // Métodos
            function empinar() {
                echo 'Empinar';
            }

            function trocarMarcha() {
                echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
            }
            
        }


        // 
        $carro = new Carro('abc1234', 'Branco');
        $moto = new Moto('def5678', 'Preto');

        $carro->trocarMarcha();
        echo '<br>';
        $moto->trocarMarcha();

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>