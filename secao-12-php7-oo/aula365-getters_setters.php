<?php

use Funcionario as GlobalFuncionario;

    class Funcionario {

        // Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // getters e setters
        function getNome() {
            return $this->nome;
        }
        function setNome($nome) {
            $this->nome = $nome;
        }

        function getTelefone() {
            return $this->telefone;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }
        function setNumFilhos($num) {
            $this->numFilhos = $num;
        }

        // Métodos
        function resumirCadFunc() {
            return $this->getNome() . ' tem ' . $this->getNumFilhos() . ' filho(s)';
        }

        function modNumFilhos($qtd) {
            $this->setNumFilhos($qtd);
        }

    }

    // 
    $func = new Funcionario();
    $func2 = new Funcionario();

    $func->setNome('José');
    $func->modNumFilhos(3);
    echo $func->resumirCadFunc();
    echo '<br>';

    $func2->setNome('Maria');
    $func2->modNumFilhos(4);
    echo $func2->resumirCadFunc();
    echo '<hr>';

?>