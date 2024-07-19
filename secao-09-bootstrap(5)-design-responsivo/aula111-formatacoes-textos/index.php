<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <!-- Bootstrap-5.3.3 (local) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-4 border">
                <!-- Cabeçalhos -->
                <h1 class="h4">- Cabeçalhos:</h1>

                <h1 class="h1">Cabeçalho 1</h1>
                <p class="h2">Cabeçalho 2</p>
                <h1 class="h3">Cabeçalho 3</h1>
                <div class="h4">Cabeçalho 4</div>
                <h1 class="h5">Cabeçalho 5</h1>
                <span class="h6">Cabeçalho 6</span>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Display classes - Maior destaque -->
                <h1 class="h4">- Display classes:</h1>

                <h1 class="display-1">Display 1</h1>
                <h1 class="display-2">Display 2</h1>
                <h1 class="display-3">Display 3</h1>
                <h1 class="display-4">Display 4</h1>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Parágrafos -->
                <h1 class="h4">- Parágrafos:</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut perspiciatis autem quae laboriosam, reprehenderit impedit blanditiis officiis dolore beatae eos necessitatibus ab aspernatur, ipsum sit veritatis distinctio ex provident placeat.
                </p>

                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel doloribus in at mollitia voluptatem, fugit, illo corrupti ipsa similique eligendi assumenda delectus quia hic? Error corporis earum harum est distinctio!
                </p>

                <p class="font-monospace">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, inventore ad, quisquam vitae eum aspernatur nobis velit nulla dicta in consequatur sapiente ipsa ullam voluptates at officia veritatis laudantium vel?
                </p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Classe de estilo -->
                <h1 class="h4">- Classe de estilo:</h1>

                <p class="fw-bold">Texto negrito</p>
                <p class="fw-normal">Texto normal</p>
                <p class="fst-italic">Texto itálico</p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Transformação de textos -->
                <h1 class="h4">- Transformação de textos:</h1>

                <p class="text-uppercased">Letras maiúsculas</p>
                <p class="text-lowercase">LETRAS MINÚSCULAS</p>
                <p class="text-capitalize">primeira letra maiúscula</p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Alinhamentos -->
                <h1 class="h4">- Alinhamentos:</h1>

                <p class="text-start">Esquerda</p>
                <p class="text-center">Centralizado</p>
                <p class="text-end">Direita</p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Bloco de citação -->
                <h1 class="h4">- Bloco de citação:</h1>

                <blockquote class="blockquote text-end border-bottom">
                    <p>Esse é um bloco de citação!</p>
                </blockquote>

                <!-- Bloco de citação com rodapé -->
                <h1 class="h4">- Bloco de citação com rodapé:</h1>

                <blockquote class="blockquote text-end">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ipsa, accusamus officia culpa earum recusandae, saepe quisquam quidem perferendis molestias labore aut eveniet vitae. Magnam dolorum maxime veniam officiis harum.
                    </p>
                    <footer class="blockquote-footer">por
                        <cite>Jamilton Damasceno</cite>
                    </footer>
                </blockquote>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <!-- Truncate -->
                <h1 class="h4">- Truncate:</h1>

                <p class="text-truncate">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, id ipsum in provident quae natus maiores enim, nostrum, consequuntur reiciendis quaerat non quia delectus temporibus molestiae! Pariatur in incidunt dolore.
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ratione ad culpa similique animi, vitae ab neque et enim tempore amet omnis impedit corrupti quas debitis in, quia laudantium eius.
                </p>
            </div>

            <div class="col-md-6 col-lg-4 border">
                <div class="row">
                    <div class="col">
                        <!-- Lista sem estilo -->
                        <h1 class="h4">- Lista sem estilo:</h1>

                        <ul class="list-unstyled">
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>
                    </div>

                    <div class="col">
                        <!-- Lista inline -->
                        <h1 class="h4">- Lista inline:</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item">Item 1</li>
                            <li class="list-inline-item">Item 2</li>
                            <li class="list-inline-item">Item 3</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>