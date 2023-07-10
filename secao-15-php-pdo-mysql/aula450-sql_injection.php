<?php

    // 
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        // DSN: Data Source Name
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        // 
        try {

            // Conexão com o DB
            $conexao = new PDO($dsn, $usuario, $senha);

            // Query
            $query = "select * from tb_usuarios where ";
            $query .= " email = '{$_POST['usuario']}' ";
            $query .= " and senha = '{$_POST['senha']}' ";

            echo $query;

            $stmt = $conexao->query($query);
            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';

        }
        catch (PDOException $e) {

            echo '<strong>Erro:</strong> ' . $e->getCode();
            echo '<br><strong>Mensagem:</strong> ' . $e->getMessage();

        }
        
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