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
            <div class="col-lg-6 p-2 mb-3 border">
                <h2 id="ancora-1" class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Navegação simples ou com abas:</h2>

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
            <div class="col-lg-6 p-2 mb-3 border">
                <h2 id="ancora-2" class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Barra de navegação simples:</h2>

                <nav class="navbar bg-dark navbar-expand-md px-3" data-bs-theme="dark">
                    <!-- Logo -->
                    <a href="index.php#ancora-2" class="navbar-brand">Chalé Hotel</a>

                    <!-- Navegação -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="index.php#ancora-2" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="index.php#ancora-2" class="nav-link">Sobre</a></li>
                        <li class="nav-item"><a href="index.php#ancora-2" class="nav-link">Contado</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Barra de navegação com menu responsivo -->
            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">Barra de navegação com menu responsivo:</h2>

                <!--  -->
            </div>

            <!--  -->
            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">:</h2>

                <!--  -->
            </div>

            <!--  -->
            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">:</h2>

                <!--  -->
            </div>

            <!--  -->
            <div class="col-lg-6 p-2 mb-3 border">
                <h2 class="h3 mb-3 px-2 pb-2 text-secondary border-bottom border-light">:</h2>

                <!--  -->
            </div>
        </div>
    </div>

</body>

</html>