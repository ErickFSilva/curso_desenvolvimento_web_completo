<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap-4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Bootstrap-5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12 mb-3">
                <h1 class="display-4 py-2 text-center border-bottom text-bg-primary">Margin e Padding</h1>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 my-3">Margin:</h2>

                <ul class="list-group border-bottom">
                    <li class="list-group-item">mt - Margin top</li>
                    <li class="list-group-item">mb - Margin bottom</li>
                    <li class="list-group-item">ms - Margin start (left)</li>
                    <li class="list-group-item">me - Margin end (right)</li>
                    <li class="list-group-item">mx - Margin no eixo x (horizontal)</li>
                    <li class="list-group-item">my - Margin no eixo y (vertical)</li>
                    <li class="list-group-item">m - Margin em todos os lados</li>
                    <li class="list-group-item">Valores utilizados são: 0 à 5. Medida definida em 'rem'</li>
                </ul>

                <div class="exemplos mb-4">
                    <p class="text-bg-dark mt-1">Margin top 1 <i class="bi bi-arrow-up"></i></p>
                    <p class="text-bg-secondary mt-2">Margin top 2 <i class="bi bi-arrow-up"></i></p>
                    <p class="text-bg-success mt-3">Margin top 3 <i class="bi bi-arrow-up"></i></p>
                    <p class="text-bg-warning mt-4">Margin top 4 <i class="bi bi-arrow-up"></i></p>
                    <p class="text-bg-danger mt-5">Margin top 5 <i class="bi bi-arrow-up"></i></p>
                </div>

                <div class="exemplos">
                    <p class="text-bg-info py-1">Padding Y 1 <i class="bi bi-arrows-expand"></i></p>
                    <p class="text-bg-primary py-2">Padding Y 2 <i class="bi bi-arrows-expand"></i></p>
                    <p class="text-bg-light py-3">Padding Y 3 <i class="bi bi-arrows-expand"></i></p>
                    <p class="text-bg-dark py-4">Padding Y 4 <i class="bi bi-arrows-expand"></i></p>
                    <p class="text-bg-secondary py-5">Padding Y 5 <i class="bi bi-arrows-expand"></i></p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>