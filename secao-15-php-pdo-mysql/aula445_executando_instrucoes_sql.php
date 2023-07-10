<?php

    // DSN: Data Source Name

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

        // executando uma query no DB
        $query = '
            create table if not exists tb_usuarios (
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            );
        ';

        $conexao->exec($query);

        $query = '
            insert into tb_usuarios 
            values (null, "Erick Ferreira", "erick@php.br", "123456");
        ';

        // $query = '
        //     delete from tb_usuarios;
        // ';

        $conexao->exec($query);

    }
    catch(PDOException $e) {

        echo '<strong>Erro:</strong> ' . $e->getCode();
        echo '<br><strong>Mensagem:</strong> ' . $e->getMessage();

        // Registrar erro

        // Redirecionar para outra página
        header('Location: http://localhost/_projetos-php/desenvolvimento-web-completo/secao-15-php-pdo-mysql/');

    }

?>