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

    <div class="container">
        <div class="row">

            <h1 class="display-4 border-bottom border-dark my-3 pb-3">Barras de navegação</h1>

            <!-- 
                Tipos de navegação:
                    nav-pills
                    nav-tabs
                
                Opções de alinhamento:
                    justify-content-start
                    justify-content-center
                    justify-content-end
                    flex-column
            -->


            <!-- Navegação simples ou com abas -->
            <div class="col-12 p-2 mb-3 border">
                <h2 id="ancora-1" class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Navegação simples ou com abas:</h2>

                <!-- Navegação -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link disabled" aria-disabled="true">Contato</a>
                    </li>
                </ul>

                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Serviços</a>
                    </li>
                </ul>

                <ul class="nav nav-tabs justify-content-end">
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link active" aria-current="page">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#ancora-1" class="nav-link">Serviços</a>
                    </li>
                </ul>
            </div>


            <!-- Barra de navegação simples -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-2">Barra de navegação simples:</h2>

                <!-- Navegação -->
                <nav class="navbar bg-dark navbar-expand-sm px-3" data-bs-theme="dark">

                    <!-- Logo -->
                    <a class="navbar-brand" href="index.php#ancora-2">Chalé Hotel</a>

                    <!-- Botão de navegação -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarDark">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navegação -->
                    <div class="collapse navbar-collapse" id="navBarDark">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a href="index.php#ancora-2" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="index.php#ancora-2" class="nav-link">Sobre</a></li>
                            <li class="nav-item"><a href="index.php#ancora-2" class="nav-link">Contado</a></li>
                        </ul>
                    </div>

                </nav>
            </div>


            <!-- Barra de navegação com menu responsivo -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light" id="ancora-3">Barra de navegação com menu responsivo:</h2>

                <!-- Navegação -->
                <nav class="navbar bg-light navbar-expand-md px-3" data-bs-theme="light">

                    <!-- Logo -->
                    <a href="index.php" class="navbar-brand">Navbar</a>

                    <!-- Menu hanburguer -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarBotao">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navegação -->
                    <div class="collapse navbar-collapse" id="navBarBotao">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php#ancora-3">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#ancora-3">Sobre</a></li>

                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Serviços</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php#ancora-3">Agendar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="index.php#ancora-3">Consultar</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="index.php#ancora-3">Contato</a></li>
                        </ul>
                    </div>

                </nav>
            </div>


            <!-- Barra de navegação com formulário -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Barra de navegação com formulário:</h2>

                <!--  -->
            </div>


            <!-- Barra de navegação com menu dropdown -->
            <div class="col-12 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Barra de navegação com menu dropdown:</h2>

                <!--  -->
            </div>
        </div>
    </div>

</body>

</html>