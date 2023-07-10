<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <style>
        h1, h2, h3, h4, h5, h6, p { margin: 0; padding: 0; }
        ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container-fluid py-3">

    <header class="border-bottom pb-3">
        <h1 class="h2 text-center">Interfaces</h1>
        <i class="fa-regular fa-face-grin-tongue-wink"></i>
    </header>

    <?php

        // Inerfaces
        interface EquipamentoEletronicoInterface {

            // Métodos
            public function ligar();
            public function desligar();

        }

        interface MamiferoInterface {

            // Métodos
            public function respirar();

        }

        interface TerrestreInterface {

            // Métodos
            public function andar();

        }

        interface AquaticoInterface {

            // Métodos
            public function nadar();

        }

        interface AnimalInterface {
            
            // Métodos
            public function comer();

        }

        interface AveInerface extends AnimalInterface {

            // Métodos
            public function voar();

        }


        // Classes
        class Geladeira implements EquipamentoEletronicoInterface {

            // Métodos
            public function abrirPorta() {
                echo 'Abrir porta';
            }

            public function ligar() {
                echo 'Ligar';
            }

            public function desligar() {
                echo 'Desligar';
            }

        }

        class Tv implements EquipamentoEletronicoInterface {

            // Métodos
            public function trocarCanal() {
                echo 'Trocar canal';
            }

            public function ligar() {
                echo 'Ligar';
            }

            public function desligar() {
                echo 'Desligar';
            }

        }

        class Humano implements MamiferoInterface, TerrestreInterface {

            // Métodos
            public function andar() {
                echo 'Andar';
            }

            public function respirar() {
                echo 'Respirar';
            }

            public function conversar() {
                echo 'Conversar';
            }

        }

        class Baleia implements MamiferoInterface, AquaticoInterface {

            // Métodos
            public function respirar() {
                echo 'Respirar';
            }

            public function nadar() {
                echo 'Nadar';
            }

            public function esguichar() {
                echo 'Esguichar';
            }

        }

        class Papagaio implements AveInerface {

            // Métodos
            public function comer() {
                echo 'Comer';
            }

            public function voar() {
                echo 'Voar';
            }

        }

    ?>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>