<?php

    namespace A;

    class Cliente implements CadastroInerface {
        
        // Atributos
        public $nome = 'Erick';

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

        public function salvar() {
            echo 'Salvar';
        }

    }

    interface CadastroInerface {
        public function salvar();
    }
    
?>