<?php // php_com_pdo

    class Conexao {

        // Atributos de conexão
        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $pass = '';
    
        // Método para estabelecar a conexão com o DB
        public function conectar() {

            try {

                $conexao = new PDO(

                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                    
                );

                return $conexao;

            }
            catch(PDOException $e) {

                echo "<p>$e->getMessage()</p>";

            }

        }

    }

?>