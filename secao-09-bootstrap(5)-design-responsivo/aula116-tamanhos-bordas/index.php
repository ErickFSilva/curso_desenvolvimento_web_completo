<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap-4.6 -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

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
                <h1 class="display-4 py-2 text-center border-bottom text-bg-primary">Tamanhos e bordas</h1>
            </div>

            <div class="col-lg-6 border mb-3">
                <h2 class="h4 my-3">Classes de largura:</h2>

                <div class="text-bg-success w-25">width 25%</div>
                <div class="text-bg-primary w-50">Width 50%</div>
                <div class="text-bg-info w-75">Width 75%</div>
                <div class="text-bg-warning w-100">Width 100%</div>
                <div class="text-bg-danger w-auto">Width auto</div>
            </div>

            <div class="col-lg-6 border mb-3">
                <h2 class="h4 my-3">Classes de altura</h2>

                <div class="bg-warning d-inline-block h-25">Height 25%</div>
                <div class="bg-warning d-inline-block h-50">Height 50%</div>
                <div class="bg-warning d-inline-block h-75">Height 75%</div>
                <div class="bg-warning d-inline-block h-100">Height 100%</div>
                <div class="bg-warning d-inline-block h-auto">Height auto</div>
            </div>

            <div class="col-lg-6 border mb-3"></div>

        </div>
    </div>

</body>

</html>