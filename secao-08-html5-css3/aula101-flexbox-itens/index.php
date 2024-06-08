<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 - CSS3</title>
    <link rel="stylesheet" href="variaveis.css">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <h1>Flexbox</h1>
    
    <hr>
    <h2>Flex item</h2>
    <div class="propriedades">
        <dl>
            <dt>- flex grow:</dt>
            <dd>Define a proporção de espaço disponível por um item. Valor padrão: 0</dd>
        </dl>

        <dl>
            <dt>- flex shrink:</dt>
            <dd>Define a capacidade de redução de tamanho do item. Valor padão: 1</dd>
        </dl>

        <dl>
            <dt>- Flex basis:</dt>
            <dd>Indica o tamanho inicial do flex item antes da distribuição do espaço restante. Valor padrão: auto</dd>
        </dl>
    </div>

    <hr>

    <div id="conteudo">
        <div class="item">01</div>
        <div class="item">02</div>
        <div class="item">03</div>
        <div class="item">04</div>
    </div>

</body>

</html>