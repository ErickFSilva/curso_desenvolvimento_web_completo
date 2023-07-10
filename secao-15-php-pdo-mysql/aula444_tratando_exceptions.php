<?php

    // DSN: Data Source Name

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

    }
    catch(PDOException $e) {

        echo '<strong>Erro:</strong> ' . $e->getCode();
        echo '<br><strong>Mensagem:</strong> ' . $e->getMessage();

        // Registrar erro

        // Redirecionar para outra página
        header('Location: http://localhost/_projetos-php/desenvolvimento-web-completo/secao-15-php-pdo-mysql/');

    }

?>