<?php

    // DSN: Data Source Name

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

        // $query = '
        //     insert into tb_usuarios 
        //     values (null, "Beltrana de Tal", "beltrana@php.br", "123456");
        // ';

        // $query = '
        //     delete from tb_usuarios;
        // ';

        $query = '
            select * from tb_usuarios;
        ';

        $stmt = $conexao->query($query);

        // $lista = $stmt->fetchAll(PDO::FETCH_ASSOC); // retorna apenas índeces associativos
        // $lista = $stmt->fetchAll(PDO::FETCH_NUM); // retorna apenas índices numéricos
        // $lista = $stmt->fetchAll(PDO::FETCH_BOTH); // retorna ambos os índices
        
        $lista = $stmt->fetchAll(PDO::FETCH_OBJ); // retorna um array de objetos

        echo '<pre>';
        print_r($lista);
        echo '</pre>';
        echo '<hr>';

        // echo $lista[0][1]; // para retorno de array comúms
        echo $lista[0]->nome; // para retorno de array do tipo objetos

    }
    catch(PDOException $e) {

        echo '<strong>Erro:</strong> ' . $e->getCode();
        echo '<br><strong>Mensagem:</strong> ' . $e->getMessage();

        // Registrar erro

        // Redirecionar para outra página
        header('Location: http://localhost/_projetos-php/desenvolvimento-web-completo/secao-15-php-pdo-mysql/');

    }

?>