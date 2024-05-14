<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seção 07</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body id="home">

    <a href="http://localhost/_projetos-php/curso_desenvolvimento_web_completo">Localhost</a>

    <div id="container">

        <!-- Abre marca -->
        <div id="marca"></div>
        <!-- Fecha marca -->

        <!-- Abre conteúdo -->
        <div id="conteudo">

            <!-- Conteúdo principal -->
            <div id="cont-princ">
                <h2>Conteúdo principal 1</h2>
                <img src="../../imagens/natureza.jpg" alt="natureza">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam ad, enim dolore vel accusamus recusandae quisquam tenetur fuga ab nobis voluptate facere pariatur dolorem dolores. Debitis maxime sint voluptas.
                </p>

                <h2>Conteúdo principal 2</h2>
                <img src="../../imagens/codigo-web.jpg" alt="">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam ad, enim dolore vel accusamus recusandae quisquam tenetur fuga ab nobis voluptate facere pariatur dolorem dolores. Debitis maxime sint voluptas.
                </p>
            </div>

            <!-- Conteúdo secundário -->
            <div id="cont-secun">
                <h2>Conteúdo secundário</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aperiam ad, enim dolore vel accusamus.
                </p>
            </div>

        </div>
        <!-- Fecha conteúdo -->

        <!-- Abre navegação -->
        <div id="navegacao">
            <?php include "barra-navegacao.php" ?>
        </div>
        <!-- Fecha navegação -->

        <!-- Abre rodapé -->
        <div id="rodape" class="clear">Rodapé</div>
        <!-- Fecha rodapé -->

    </div>

</body>

</html>