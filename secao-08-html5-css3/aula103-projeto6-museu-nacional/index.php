<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museu Nacional</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/variaveis.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <!-- Abre container -->
    <div id="container">

        <!-- Abre header -->
        <header>

            <!-- Abre logo -->
            <div id="logo">
                <h1>
                    <a href="index.php">Museu Nacional</a>
                </h1>
            </div>
            <!-- Fecha logo -->

            <!-- Abre navegação -->
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Exposições</a></li>
                    <li><a href="index.php">Pesquisa</a></li>
                    <li><a href="index.php">Acervo</a></li>
                    <li><a href="index.php">Vídeos</a></li>
                    <li><a href="index.php">Fotos</a></li>
                    <li><a href="index.php">Contato</a></li>
                </ul>
            </nav>
            <!-- Fecha navegação -->

        </header>
        <!-- Fecha header -->

        <!-- Abre principal -->
        <div id="principal">

            <!-- Abre conteudo -->
            <div id="conteudo">
                <section id="capa">
                    <img src="imagens/museu.png" alt="museu">
                </section>
            </div>
            <!-- Fecha conteudo -->

            <!-- Abre aside -->
            <aside>
                <section id="depoimento">
                    <img src="imagens/depoimento.png" alt="depoimento">
                </section>

                <!-- Abre visita -->
                <section id="visita">
                    <h4>Faça uma visita</h4>

                    <form action="index.php">
                        <fieldset>
                            <legend>Selecione uma data</legend>

                            <label for="data-visita">Data</label>
                            <input type="date" name="data-visita" id="data-visita" class="campo" value="dd/mm/aaaa">

                            <label for="qtd-pessoas">Qtd pessoas</label>
                            <input type="text" name="qtd-pessoas" id="qtd-pessoas" class="campo">
                        </fieldset>

                        <input type="submit" value="Verificar disponibilidade" class="botao">
                    </form>
                </section>
                <!-- Fecha visita -->

                <!-- Abre galeria -->
                <section id="galeria">
                    <h4>Galeria de fotos</h4>

                    <a href="index.php">
                        <img src="imagens/imagem1.jpg" alt="imagem1">
                    </a>

                    <a href="index.php">
                        <img src="imagens/imagem2.jpg" alt="imagem2">
                    </a>

                    <a href="index.php">
                        <img src="imagens/imagem3.jpg" alt="imagem3">
                    </a>

                    <a href="index.php">
                        <img src="imagens/imagem4.jpg" alt="imagem4">
                    </a>
                </section>
                <!-- Fecha galeria -->
            </aside>
            <!-- Fecha aside -->

            <!-- Limpa flutuação -->
            <div class="clear-both"></div>

        </div>
        <!-- Fecha principal -->

    </div>
    <!-- Fecha container -->

</body>

</html>