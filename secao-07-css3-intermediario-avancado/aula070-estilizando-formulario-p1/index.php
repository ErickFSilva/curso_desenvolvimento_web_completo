<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seção 07 - CSS3</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <a href="http://localhost/_projetos-php/curso_desenvolvimento_web_completo">Localhost</a>

    <div id="container">

        <h2>Estilizando formulário</h2>

        <form action="">

            <fieldset>
                <legend>Detalhes do contato</legend>

                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="url">URL</label>
                    <input type="url" name="url" id="url">
                </div>
            </fieldset>

            <fieldset>
                <legend>Comentários</legend>

                <div>
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" id="mensagem"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Lembrar de mim</legend>

                <div>
                    <label>
                        <input type="radio" name="lembrar" id="sim">Sim
                    </label>
                </div>

                <div>
                    <label>
                        <input type="radio" name="lembrar" id="nao">Não
                    </label>
                </div>
            </fieldset>

            <button type="submit">Enviar</button>

        </form>

    </div>

</body>

</html>