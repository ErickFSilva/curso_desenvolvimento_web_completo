<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <nav class="navbar fixed-top bg-info" data-bs-theme="light">
                <ul class="navbar-nav px-3">
                    <li class="navbar-item">
                        <a href="../../secao-09-bootstrap(5)-design-responsivo/" class="nav-link">Voltar</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <h1 class="display-4 border-bottom border-dark mb-3 pb-3 barra-grupo-lista">Grupo de Listas</h1>

            <!-- Listas -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-1">Listas:</h2>

                <ul class="list-group">
                    <li class="list-group-item">Meu item de lista 1</li>
                    <li class="list-group-item">Meu item de lista 2</li>
                    <li class="list-group-item">Meu item de lista 3</li>
                    <li class="list-group-item">Meu item de lista 4</li>
                </ul>
            </div>

            <!-- Listas com classe flush -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-2">Listas com classe flush:</h2>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Meu item de lista 1</li>
                    <li class="list-group-item">Meu item de lista 2</li>
                    <li class="list-group-item">Meu item de lista 3</li>
                    <li class="list-group-item">Meu item de lista 4</li>
                </ul>
            </div>

            <!-- Listas com links -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-2">Listas com links:</h2>

                <ul class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">Meu item de lista 1</a>
                    <a href="index.php" class="list-group-item list-group-item-action">Meu item de lista 2</a>
                    <a href="index.php" class="list-group-item list-group-item-action">Meu item de lista 3</a>
                    <a href="index.php" class="list-group-item list-group-item-action">Meu item de lista 4</a>
                </ul>

                <h2 class="h3 mb-3 px-2 pt-4 pb-2 text-secondary border-bottom border-light" id="ancora-2">Listas com botões:</h2>

                <ul class="list-group">
                    <button type="button" class="list-group-item list-group-item-action">Meu item de lista 1</button>
                    <button type="button" class="list-group-item list-group-item-action">Meu item de lista 2</button>
                    <button type="button" class="list-group-item list-group-item-action">Meu item de lista 3</button>
                    <button type="button" class="list-group-item list-group-item-action">Meu item de lista 4</button>
                </ul>
            </div>

            <!-- Lista com classes contextuais -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-2">Lista com classes contextuais:</h2>

                <ul class="list-group">
                    <li class="list-group-item">Meu item de lista 1 - Normal</li>
                    <li class="list-group-item list-group-item-primary">Meu item de lista 2 - Primary</li>
                    <li class="list-group-item list-group-item-secondary">Meu item de lista 3 - Secondary</li>
                    <li class="list-group-item list-group-item-success">Meu item de lista 4 - Success</li>
                    <li class="list-group-item list-group-item-danger">Meu item de lista 5 - Danger</li>
                    <li class="list-group-item list-group-item-warning">Meu item de lista 6 - Warning</li>
                    <li class="list-group-item list-group-item-info">Meu item de lista 7 - info</li>
                    <li class="list-group-item list-group-item-light">Meu item de lista 8 - light</li>
                    <li class="list-group-item list-group-item-dark">Meu item de lista 9 - Dark</li>
                </ul>

                <h2 class="h3 mb-3 px-2 pt-4 pb-2 text-secondary border-bottom border-light" id="ancora-2">Lista com classes contextuais em links:</h2>

                <ul class="list-group">
                    <a class="list-group-item list-group-item-action">Meu item de lista 1 - Normal</a>
                    <a class="list-group-item list-group-item-action list-group-item-primary">Meu item de lista 2 - Primary</a>
                    <a class="list-group-item list-group-item-action list-group-item-secondary">Meu item de lista 3 - Secondary</a>
                    <a class="list-group-item list-group-item-action list-group-item-success">Meu item de lista 4 - Success</a>
                    <a class="list-group-item list-group-item-action list-group-item-danger">Meu item de lista 5 - Danger</a>
                    <a class="list-group-item list-group-item-action list-group-item-warning">Meu item de lista 6 - Warning</a>
                    <a class="list-group-item list-group-item-action list-group-item-info">Meu item de lista 7 - info</a>
                    <a class="list-group-item list-group-item-action list-group-item-light">Meu item de lista 8 - light</a>
                    <a class="list-group-item list-group-item-action list-group-item-dark">Meu item de lista 9 - Dark</a>
                </ul>
            </div>

            <!-- Lista com badge -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-2">Lista com badge:</h2>

                <div class="row">
                    <div class="col-7 col-sm-6 col-md-5 col-lg-4 col-xl-3">

                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Meu item de lista 1
                                <span class="badge text-bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Meu item de lista 2
                                <span class="badge text-bg-secondary rounded-pill">20</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Meu item de lista 3
                                <span class="badge text-bg-success rounded-pill">30</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Meu item de lista 4
                                <span class="badge text-bg-danger rounded-pill">40</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            <!-- Lista com breadcrumb -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-2">Lista com breadcrumb:</h2>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Usuários</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jamilton Damasceno</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

</body>

</html>