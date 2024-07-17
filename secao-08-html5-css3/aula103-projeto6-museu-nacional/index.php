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

                <!-- Abre a seção da capa -->
                <section id="capa">
                    <img src="imagens/museu.png" alt="museu">
                </section>
                <!-- Abre a seção da capa -->

                <!-- Abre seção postagens -->
                <section id="postagens">

                    <!-- Abre vídeo -->
                    <article id="video">
                        <h3>Vídeo: conheça o museu</h3>
                        <iframe width="310" height="170" src="https://www.youtube.com/embed/RGUYb-hivrc" title="Uma visita mediada ao Museu Nacional - UFRJ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </article>
                    <!-- Fecha vídeo -->

                    <!-- Abre mapa -->
                    <article id="mapa">
                        <h3>Mapa: encontre o museu</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2064457500046!2d-43.22910382395665!3d-22.905755037835586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e58a085b7af%3A0x4d11e9a933d38ce3!2sMuseu%20Nacional%20-%20UFRJ!5e0!3m2!1spt-BR!2sbr!4v1721151179200!5m2!1spt-BR!2sbr" width="310" height="170" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </article>
                    <!-- Abre mapa -->

                    <!-- Abre exposições -->
                    <article id="exposicoes">
                        <h3>Exposições</h3>
                        <ul>
                            <li><a href="index.php">Os assustadores insetos</a></li>
                            <li><a href="index.php">O crânio de Luzia, a mulher mais antiga do Brasil</a></li>
                            <li><a href="index.php">Preguiça gigante e tigre-dente-de-sabre</a></li>
                            <li><a href="index.php">Plantas do Brasil Central</a></li>
                            <li><a href="index.php">Teresa Cristina: A Imperatriz Arqueóloga</a></li>
                            <li><a href="index.php">Arte com Dinossauros - Paleoarte</a></li>
                            <li><a href="index.php">Veja todos (65)</a></li>
                        </ul>
                    </article>
                    <!-- Fecha exposições -->

                    <!-- Abre 200 anos de história -->
                    <article id="historia">
                        <h3>200 anos de história</h3>
                        <p>
                            Numa ponta que ameaçava sobre o mar, posteriormente conhecida como Ponta do Calabouço, entre as praias de Piaçaba e Santa Luzia, no centro histórico do Ria de Janeiro, os portugueses construíram em 1603 a Fortaleza de Santiago, origem do conjunto arquitetônico que hoje abriga o Museu Histórico Nacional.
                        </p>
                        <a href="index.php">Leia mais</a>
                    </article>
                    <!-- Fecha 200 anos de história -->
                </section>
                <!-- Fecha seção postagens -->
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
                            <input type="number" name="qtd-pessoas" id="qtd-pessoas" class="campo" min="1" value="1">
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

            <!-- Abre footer -->
            <footer>
                <p>
                    <a href="index.php">Home</a>
                    <a href="index.php">Exposições</a>
                    <a href="index.php">Pesquisa</a>
                    <a href="index.php">Acervo</a>
                    <a href="index.php">Vídeos</a>
                    <a href="index.php">Fotos</a>
                    <a href="index.php">Contato</a>
                </p>

                <p>
                    2019 <a href="index.php">Museu Nascional</a> - Todos os direitos reservados
                </p>
            </footer>
            <!-- Fecha footer -->

        </div>
        <!-- Fecha principal -->

    </div>
    <!-- Fecha container -->

</body>

</html>