<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias Cidade</title>
    <link rel="stylesheet" href="css/variaveis.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="duas-colunas" class="brasil">

    <!-- Abre container -->
    <div id="container">

        <!-- Abre topo -->
        <div id="topo">

            <!-- Abre logo -->
            <h1 class="logo">Notícias cidade</h1>

            <!-- Abre navegação -->
            <ul id="navagacao">
                <li><a href="index.php" class="primeiro home">Home</a></li>
                <li><a href="brasil.php" class="brasil">Brasil</a></li>
                <li><a href="internacional.php" class="internacional">Internacional</a></li>
                <li><a href="economia.php" class="economia">Economia</a></li>
                <li><a href="saude.php" class="saude">Saúde</a></li>
                <li><a href="ciencia.php" class="ciencia">Ciência</a></li>
                <li><a href="fotos.php" class="fotos">Fotos</a></li>
            </ul>
            <!-- Fecha navegação -->

        </div>
        <!-- Fecha topo -->

        <!-- Abre conteúdo -->
        <div id="conteudo">

            <!-- Abre principal -->
            <div id="principal" class="float-right">

                <!-- Abre conteúdo primario -->
                <div id="primario" class="float-left">

                    <!-- Abre caixa destaque - Primário -->
                    <div class="caixa">
                        <h2>Destaque</h2>

                        <div class="caixa-conteudo">
                            <h3>Nova legislação</h3>
                            <img src="imagens/taxi.jpg" alt="taxi">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sequi ipsa culpa...
                            </p>
                            <a href="">Leia mais!</a>
                        </div>
                    </div>
                    <!-- Fecha caixa destaque - Primário -->

                    <!-- Abre caixa mundo - Primário -->
                    <div class="caixa">
                        <h2>Mundo</h2>

                        <div class="caixa-conteudo">

                            <!-- Abre lista-noticias -->
                            <ul id="lista-noticias">
                                <li>
                                    <a href="">
                                        <img src="imagens/tecnologia.jpg" alt="tecnologia">
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                    </a>
                                    <div class="clear-both"></div>
                                </li>

                                <li>
                                    <a href="">
                                        <img src="imagens/tecnologia.jpg" alt="tecnologia">
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                    </a>
                                    <div class="clear-both"></div>
                                </li>

                                <li>
                                    <a href="">
                                        <img src="imagens/tecnologia.jpg" alt="tecnologia">
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                    </a>
                                    <div class="clear-both"></div>
                                </li>

                                <li>
                                    <a href="">
                                        <img src="imagens/tecnologia.jpg" alt="tecnologia">
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                    </a>
                                    <div class="clear-both"></div>
                                </li>
                            </ul>
                            <!-- Fecha  lista-noticias -->

                        </div>
                    </div>
                    <!-- Fecha caixa mundo - Primário -->

                </div>
                <!-- Fecha conteúdo primário -->

            </div>
            <!-- Fecha principal -->

            <!-- Abre conteúdo lateral -->
            <div id="lateral" class="float-left">

                <!-- Abre caixa entrevista - Lateral -->
                <div class="caixa">
                    <h2>Entrevistas</h2>

                    <div class="caixa-conteudo">
                        <ul>
                            <li><a href="entrevista.php">José Almeida</a></li>
                            <li><a href="entrevista.php">Felipe Silva</a></li>
                            <li><a href="entrevista.php">Renato Rodrigues</a></li>
                            <li><a href="entrevista.php">Abelardo Silveira</a></li>
                            <li><a href="entrevista.php">André Carlos</a></li>
                            <li><a href="entrevista.php">Márcio Mello</a></li>
                            <li><a href="entrevista.php">João Pedro</a></li>
                            <li><a href="entrevista.php">Fernando Weiss</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Fecha caixa entrevista - Lateral -->

                <!-- Abre caixa news - Lateral -->
                <div class="caixa">
                    <h2>News</h2>

                    <div class="caixa-conteudo">
                        <form action="">
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" placeholder="E-mail">
                            </div>

                            <div>
                                <input type="submit" value="Cadastrar">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Fecha caixa news - Lateral -->

            </div>
            <!-- Fecha conteúdo lateral -->

            <!-- Limpa efeitos do float em conteúdo -->
            <div class="clear-both"></div>

        </div>
        <!-- Fecha conteúdo -->

    </div>
    <!-- Fecha container -->

    <!-- Abre container rodapé -->
    <div id="container-rodape">

        <!-- Abre rodapé -->
        <div id="rodape">
            &copy; Copyright 2000-2018 Notícias cidade
        </div>
        <!-- Abre rodapé -->

    </div>
    <!-- Fecha container rodapé -->

</body>

</html>