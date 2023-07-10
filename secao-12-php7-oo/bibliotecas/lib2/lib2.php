<?php

    namespace B;

    class Cliente implements CadastroInerface {

        // Atributos
        public $nome = 'Luiz';

        // Construtor
        public function __construct() {
            echo '<hr>';
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre>';
        }

        // Métodos
        public function __get($attr) {
            return $this->$attr;
        }

        public function remover() {
            echo 'Remover';
        }

    }

    interface CadastroInerface {
        public function remover();
    }

?>