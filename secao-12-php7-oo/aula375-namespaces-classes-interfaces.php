<?php

    namespace A;

    class Cliente implements \B\CadastroInerface {
        
        // Atributos
        public $nome = 'Erick';

        // Construtor
        public function __construct() {
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

        public function remover() {
            echo 'Remover';
        }

    }

    interface CadastroInerface {
        public function salvar();
    }
    

    namespace B;

    class Cliente implements CadastroInerface {

        // Atributos
        public $nome = 'Luiz';

        // Construtor
        public function __construct() {
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


    $clienteA = new \A\Cliente();

    echo '<hr>';
    print_r($clienteA);
    echo '<hr>';
    echo $clienteA->__get('nome');

?>