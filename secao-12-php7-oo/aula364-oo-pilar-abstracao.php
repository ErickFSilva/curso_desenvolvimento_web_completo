<?php

    // modelo
    class Funcionario {

        // atributos
        public $nome = 'José';
        public $telefone = '87 99999-9999';
        public $numeroFilhos = 2;

        // métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numeroFilhos filho(s)";
        }

        function modificarNumFilhos($num) {
            $this->numeroFilhos = $num;
        }

    }

    $func = new Funcionario();
    
    echo $func->resumirCadFunc();
    echo '<br>';

    $func->modificarNumFilhos(3);
    
    echo $func->resumirCadFunc();
    echo '<hr>';


    $func2 = new Funcionario();

    echo $func2->resumirCadFunc();
    echo '<br>';

    $func2->modificarNumFilhos(5);

    echo $func2->resumirCadFunc();

?>