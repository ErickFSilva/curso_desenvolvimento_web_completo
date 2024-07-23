<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <!-- Bootstrap-4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Bootstrap-5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center text-bg-secondary mb-3">
                <h1 class="display-5">Cores e Backgrounds</h1>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 border-bottom pb-2">Classes para formatação de textos</h2>

                <div>
                    <h2 class="h5 text-primary">Texto primary</h2>
                    <h2 class="h5 text-secondary">Texto secondary</h2>
                    <h2 class="h5 text-success">Texto success</h2>
                    <h2 class="h5 text-info">Texto info</h2>
                    <h2 class="h5 text-warning bg-dark">Texto warning</h2>
                    <h2 class="h5 text-danger">Texto danger</h2>
                    <h2 class="h5 text-light bg-dark">Texto light</h2>
                    <h2 class="h5 text-dark">Texto dark</h2>
                    <h2 class="h5 text-white bg-dark">Texto white</h2>
                    <h2 class="h5 text-black-50 bg-white">Texto black 50 (usa opacidade)</h2>
                    <h2 class="h5 text-white-50 bg-dark">Texto white 50 (usa opacidade)</h2>
                </div>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 border-bottom pb-2">Formatação de links</h2>

                <div id="links">
                    <a href="index.php" class="text-primary">Link primary</a>
                    <a href="index.php" class="text-secondary">Link secondary</a>
                    <a href="index.php" class="text-success">Link success</a>
                    <a href="index.php" class="text-info">Link info</a>
                    <a href="index.php" class="text-warning bg-dark">Link warning</a>
                    <a href="index.php" class="text-danger">Link danger</a>
                    <a href="index.php" class="text-light bg-dark">Link light</a>
                    <a href="index.php" class="text-dark">Link dark</a>
                    <a href="index.php" class="text-white bg-dark">Link white</a>
                </div>
            </div>

            <div class="col-lg-6 border">
                <h2 class="h4 border-bottom pb-2">Backgrounds</h2>

                <div id="backgrounds">
                    <div class="bg-primary"></div>
                    <div class="bg-secondary"></div>
                    <div class="bg-success"></div>
                    <div class="bg-info"></div>
                    <div class="bg-warning"></div>
                    <div class="bg-danger"></div>
                    <div class="bg-light"></div>
                    <div class="bg-dark"></div>
                    <div class="bg-white"></div>
                    <div class="bg-transparent"></div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>