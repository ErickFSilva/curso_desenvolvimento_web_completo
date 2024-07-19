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
</head>

<body>

    <div class="container">
        <div class="row">

            <h1 class="display-4 mb-4">#Alinhamento de textos</h1>

            <div class="col-md-6 col-lg-4 border">
                <h2 class="h4">Parágrafo justificado:</h2>

                <p class="text-justify"><!-- Bootstrap-4.6 -->
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus harum architecto, ratione natus temporibus similique tempore delectus consequatur enim labore dignissimos porro eos corporis fuga at, dolorum ipsam voluptates perferendis.
                </p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <h2 class="h4">Alinhamento responsivo:</h2>

                <p class="text-sm-right">Tela &gt;= 576px (small)</p>
                <p class="text-md-right">Tela &gt;= 768px (medium)</p>
                <p class="text-lg-right">Tela &gt;= 992px (large)</p>
                <p class="text-xl-right">Tela &gt;= 1200px (extra large)</p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <h2 class="h4 d-inline">Elemento block para inline:</h2>

                <p class="bg-warning d-inline">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, distinctio maxime asperiores iusto excepturi nostrum exercitationem eos blanditiis reiciendis aliquam enim impedit laudantium, iste ipsam quia veniam eum? Recusandae, ad.
                </p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <h2 class="h4">Elemento inline para block:</h2>

                <span class="d-block bg-info">Elemento inline 1</span>
                <span class="d-block bg-info">Elemento inline 2</span>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <h2 class="h4">Elemento inline-block:</h2>

                <h4 class="bg-warning d-inline-block">Lorem ipsum dolor.</h4>
                <p class="bg-info d-inline-block">
                    Lorem ipsum dolor.
                </p>
            </div>

        </div>
    </div>

</body>

</html>