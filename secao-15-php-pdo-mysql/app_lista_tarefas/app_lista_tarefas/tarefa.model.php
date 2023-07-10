<?php

    /**
     * Classe modelo de tarefa
     * Apartir da instância dessa classe, podemos trabalhar os dados dentro da aplicação
     * A abstração, da classe Tarefa, terá os atributos correspondentes as colunas da tabela: tb_tarefas, do banco de dados
     */

    class Tarefa {

        // Atributos
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        // Métodos
        public function __get($atributo) {

            return $this->$atributo;
            
        }

        public function __set($atributo, $valor) {

            $this->$atributo = $valor;

        }

    }

?>