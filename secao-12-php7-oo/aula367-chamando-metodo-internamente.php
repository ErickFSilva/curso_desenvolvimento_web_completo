<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        h1, h2, h3, h4, h5, h6, p { margin: 0; padding: 0; }
        ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container-fluid py-3">

    <header>
        <h1 class="text-center">Getters e Setters</h1>
    </header>
    <hr>

    <?php

        class Funcionario {

            // Atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
            public $cargo = null;
            public $salario = null;

            // getters/setters com overloading
            function __get($atributo) {
                return $this->$atributo;
            }

            function __set($atributo, $valor) {
                $this->$atributo = $valor;
            }

            // Métodos
            function resumirCadFunc() {
                return $this->__get('nome') . ' tem ' . $this->__get('numFilhos') . ' filho(s)';
            }

            function modNumFilhos($qtd) {
                $this->__set('numFilhos', $qtd);
            }

        }
        
        // 
        $nomeFunc = null;
        $filhosFunc = null;

        if (isset($_POST['nome'])) {
            $nomeFunc = $_POST['nome'];
        }

        if (isset($_POST['filhos'])) {
            $filhosFunc = $_POST['filhos'];
        }

        // 
        $func = new Funcionario();
        $func2 = new Funcionario();
        $func3 = new Funcionario();

        $func->__set('nome', 'José');
        $func->modNumFilhos(3);

        $func2->__set('nome', 'Maria');
        $func2->modNumFilhos(4);

        $func3->__set('nome', $nomeFunc);
        $func3->modNumFilhos($filhosFunc);

    ?>

    <div class="card mb-4" style="width: 300px;">
        <div class="card-header py-3 bg-secondary text-light">
            Getting & Setting
        </div>

        <div class="card-body">

            <ul class="list-group m-0">
                <li class="list-group-item"><?= $func->resumirCadFunc(); ?></li>
                <li class="list-group-item"><?= $func2->resumirCadFunc(); ?></li>
                <li class="list-group-item"><?= $func3->resumirCadFunc(); ?></li>
            </ul>

        </div>
    </div>

    <div class="card" style="width: 300px;">
        <div class="card-header py-3 bg-secondary text-light">
            Cadastro
        </div>

        <div class="card-body">
            <form action="#" method="POST">
                <input type="text" class="form-control mb-2" name="nome" placeholder="Nome">
                <input type="number" min="0" class="form-control mb-2" name="filhos" placeholder="Filhos">
                <input type="submit" class="btn btn-secondary" value="Enviar">
            </form>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>