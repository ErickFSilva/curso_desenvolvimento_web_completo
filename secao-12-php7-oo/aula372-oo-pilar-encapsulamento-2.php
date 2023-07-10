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
        <h1 class="text-center">OO - Pilar do Encapsulamento-2</h1>
    </header>
    <hr>

    <?php

        // Classe Pai
        class Pai {

            // Atributos
            private $nome = 'Erick'; // disponível apenas para o próprio objeto e não será herdado por seu filho
            protected $sobrenome = 'Ferreira'; // disponível apenas para o próprio objeto e pode ser herdado por seu filho
            public $humor = 'Feliz'; // disponível para todos

            // Método
            public function __get($attr) {
                return $this->$attr;
            }

            public function __set($attr, $valor) {

                if (strlen($valor) >= 3) {
                    $this->$attr = $valor;
                }

            }

            // Métodos
            private function executarMania() {
                echo 'Assobiar';
            }

            protected function responder() {
                echo 'oi';
            }

            public function executarAcao() {
                $x = rand(1, 10);

                if ($x >= 1 && $x <= 5) {
                    $this->executarMania();
                }
                else {
                    $this->responder();
                }
            }

        }

        // Classe Filho
        class Filho extends Pai {

            public function __construct() {
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre><hr>';
            }

            // Métodos
            // public function getAtributo($attr) {
            //     return $this->$attr;
            // }

            // public function setAtributo($attr, $value) {
            //     $this->$attr = $value;
            // }

        }


        // Criando objetos
        // $pai = new Pai();
        $filho = new Filho();

        echo '<pre>';
        print_r($filho);
        echo '</pre><hr>';

        echo $filho->executarAcao();

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>