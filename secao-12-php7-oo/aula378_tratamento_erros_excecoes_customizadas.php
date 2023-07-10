<?php

    class MinhaExceptionCustomizada extends Exception {

        private $erro = '';

        public function __construct($erro) {

            $this->erro = $erro;

        }

        public function exibirMensagemErroCustomizada() {

            return $this->erro;

        }

    }

    try {

        /**
         * Error (php)
         * Exception (programadores)
         * Customizadas (programadores)
         */

        throw new MinhaExceptionCustomizada('Erro de teste');

    }
    catch (MinhaExceptionCustomizada $e) {

        echo $e->exibirMensagemErroCustomizada();

    }

?>