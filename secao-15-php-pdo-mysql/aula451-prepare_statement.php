<?php

// 
if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    // DSN: Data Source Name
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    // 
    try {

        // Conexão com o DB
        $conexao = new PDO($dsn, $usuario, $senha);

        // Querys
        // $sqlTable = "create table tb_usuarios ( ";
        // $sqlTable .= " id int primary key auto_increment, ";
        // $sqlTable .= " nome varchar(30) not null, ";
        // $sqlTable .= " usuario varchar(30) not null, ";
        // $sqlTable .= " senha varchar(30) ";
        // $sqlTable .= " );";
        // $conexao->query($sqlTable);

        // $sqlInsert = "insert into tb_usuarios values(null, 'Erick', 'erick@php.br', '1234')";
        // $conexao->query($sqlInsert);

        // $sqlInsert = "insert into tb_usuarios values(null, 'raquezia', 'raquezia@php.br', '1234')";
        // $conexao->query($sqlInsert);
        
        // $sqlInsert = "insert into tb_usuarios values(null, 'gabriel', 'gabriel@php.br', '1234')";
        // $conexao->query($sqlInsert);

        // $sqlInsert = "insert into tb_usuarios values(null, 'gabriely', 'gabriely@php.br', '1234')";
        // $conexao->query($sqlInsert);

        $sqlSelect = "select * from tb_usuarios where ";
        $sqlSelect .= " usuario = :usuario ";
        $sqlSelect .= " and senha = :senha ";

        // Prepara a query contra o SQLInject
        $stmt = $conexao->prepare($sqlSelect);
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha']);
        
        // Executa a query
        $stmt->execute();

        // Recupera o primeiro registro retornado pela consulta
        $usuario = $stmt->fetch();
        
        // Imprime a consulta
        echo '<pre>';
        print_r($usuario);
        echo '</pre><hr>';

    } catch (PDOException $e) {

        echo '<strong>Erro:</strong> ' . $e->getCode();
        echo '<br><strong>Mensagem:</strong> ' . $e->getMessage();
    }

}
else {
    echo '<p>Preencha o formulário, <b>com dados válidos</b>, para ter acesso ao conteúdo</p><hr>';
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>

<body>

    <form action="#" method="POST">

        <input type="text" name="usuario" placeholder="Usuário">
        <br>
        <input type="password" name="senha" placeholder="Senha">
        <br>
        <button type="submit">Entrar</button>

    </form>

</body>

</html>