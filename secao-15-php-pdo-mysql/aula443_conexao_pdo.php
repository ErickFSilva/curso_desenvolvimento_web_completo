<?php

    // DSN: Data Source Name

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    $conexao = new PDO($dsn, $usuario, $senha);

?>