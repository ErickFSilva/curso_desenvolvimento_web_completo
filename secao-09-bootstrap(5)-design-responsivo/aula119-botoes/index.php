<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <h1 class="display-4 border-bottom border-dark my-3 pb-3">Botões</h1>

            <!-- 
                Formatação padrão: btn
                Formatações específicas: btn-primary,
                                         btn-secondary,
                                         btn-success,
                                         btn-info,
                                         btn-warning,
                                         btn-danger,
                                         btn-light,
                                         btn-dark,
                                         btn-link
            -->

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Botões</h2>

                <button type="button" class="btn">Normal</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>
                <button type="button" class="btn btn-link">Link</button>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Botões com diferentes tags:</h2>

                <a href="index.php" class="btn btn-light">Link</a>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="button" class="btn btn-success" value="Button">
                <input type="submit" class="btn btn-info" value="Submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Botões com contorno:</h2>

                <button type="button" class="btn btn-outline-info">Clique</button>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Tamanhos dos botões:</h2>

                <div class="row">
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-danger btn-lg">Grande</button>
                        <button type="button" class="btn btn-warning">Normal</button>
                        <button type="button" class="btn btn-secondary btn-sm">Pequeno</button>

                    </div>

                    <div class="col-lg-6 d-grid mt-2">
                        <button class="btn btn-primary" type="button">Bloco</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Estados de botões:</h2>

                <button type="button" class="btn btn-primary">Normal</button>
                <button type="button" class="btn btn-secondary disabled">Inativo</button>
                <button type="button" class="btn btn-success active">Ativo</button>
                <button type="button" class="btn btn-warning" data-bs-toggle="button">Alternar</button>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Grupo de botões - horizontal:</h2>

                <div class="btn-group">
                    <button type="button" class="btn btn-danger">Left</button>
                    <button class="button btn btn-warning">Middle</button>
                    <button type="button" class="btn btn-success">Right</button>
                </div>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Grupo de botões verticais:</h2>

                <div class="btn btn-group-vertical" role="group" aria-label="Grupo de botões verticais">
                    <button type="button" class="btn btn-primary">Botão</button>
                    <button type="button" class="btn btn-primary">Botão</button>
                    <button type="button" class="btn btn-primary">Botão</button>
                </div>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Grupo de botões com dropdown:</h2>

                <div class="btn-group" role="group" aria-label="Grupo de botões com menu suspenso aninhado">
                    <button type="button" class="btn btn-primary">1</button>
                    <button type="button" class="btn btn-primary">2</button>

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>

                        <ul class="dropdown-menu">
                            <li><a href="index.php" class="dropdown-item">Dropdown link</a></li>
                            <li><a href="index.php" class="dropdown-item">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Grupo de botões verticais com dropdown:</h2>

                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-primary">Button</button>
                    <button type="button" class="btn btn-primary">Button</button>

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown (dropdown)
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                    </div>

                    <div class="btn-group dropstart" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown (dropstart)
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                    </div>

                    <div class="btn-group dropend" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown (dropend)
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                    </div>

                    <div class="btn-group dropup" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown (dropup)
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Barra de ferramentas com grupos de botões:</h2>

                <div class="btn-toolbar" role="toolbar" aria-label="Barra de ferramentas com grupos de botões">
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary">3</button>
                        <button type="button" class="btn btn-primary">4</button>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary">5</button>
                        <button type="button" class="btn btn-secondary">6</button>
                        <button type="button" class="btn btn-secondary">7</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-info">8</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

</body>

</html>