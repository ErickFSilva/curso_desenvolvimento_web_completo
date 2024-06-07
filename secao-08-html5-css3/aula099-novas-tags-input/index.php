<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5</title>
</head>

<body>

    <form action="" method="get">

        <!-- Texto -->
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="" id="nome" required autofocus>
        </div>

        <!-- Email -->
        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="" id="email" required>
        </div>

        <!-- Número -->
        <div>
            <label for="numero">Número:</label>
            <input type="number" name="" id="numero" min="0" max="10" step="2">
        </div>

        <!-- URL -->
        <div>
            <label for="url">URL:</label>
            <input type="url" name="" id="url" placeholder="ex.: http(s)://www...">
        </div>

        <!-- Pesquisa -->
        <div>
            <label for="pesquisa">Pesquisa</label>
            <input type="search" name="" id="pesquisa">
        </div>

        <!-- Range -->
        <div>
            <label for="range">Range</label>
            <input type="range" name="" id="range" min="0" max="10" value="5">
        </div>

        <!-- Data -->
        <div>
            <label for="data">Data</label>
            <input type="date" name="" id="data">
        </div>

        <!-- Cor -->
        <div>
            <label for="cor">Cor</label>
            <input type="color" name="" id="cor">
        </div>

        <!-- Enviar -->
        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>

</html>