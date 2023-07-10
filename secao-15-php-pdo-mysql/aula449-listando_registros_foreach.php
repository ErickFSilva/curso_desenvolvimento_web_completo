<?php

    // DSN: Data Source Name

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        // 
        $conexao = new PDO($dsn, $usuario, $senha);


        // 
        $query = '
            select * from tb_usuarios;
        ';

        // $stmt = $conexao->query($query);

        foreach ($conexao->query($query) as $chave => $valor) {
            echo '<pre>';
            print_r($valor['nome']);
            echo '</pre><hr>';
        }


        // 
        // $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC); // retorna apenas índeces associativos
        // $lista = $stmt->fetchAll(PDO::FETCH_NUM); // retorna apenas índices numéricos
        // $lista = $stmt->fetchAll(PDO::FETCH_BOTH); // retorna ambos os índices
        
        // $lista = $stmt->fetchAll(PDO::FETCH_OBJ); // retorna um array de objetos
        // $usuario = $stmt->fetch(PDO::FETCH_OBJ); // retorna apenas um único objeto


        // 
        // foreach ($lista_usuarios as $key => $value) {
        //     echo($value['nome']);
        //     echo '<hr>';
        // }

    }
    catch (PDOException $e) {

        echo '<strong>Erro:</strong> ' . $e->getCode();
        echo '<br><strong>Mensagem:</strong> ' . $e->getMessage();

        // Registrar erro

        // Redirecionar para outra página
        header('Location: http://localhost/_projetos-php/desenvolvimento-web-completo/secao-15-php-pdo-mysql/');

    }

?>