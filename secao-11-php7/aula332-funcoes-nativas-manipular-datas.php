<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul, ul ul, ol { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container py-3">

    <header>
        <h1 class="h3 text-center">Funções nativas para tarefas matemáticas</h1>
    </header>

    <ul>
        <li><b>date(formato)</b>: recuperar a data atual
            <ul>
                <li><b>d</b>: dia no formato numérico</li>
                <li><b>D</b>: dia no formato de sigla</li>
                <li><b>m</b>: mês no formato numérico</li>
                <li><b>M</b>: mês no formato de sigla</li>
                <li><b>y</b>: ano no formato numérico (##)</li>
                <li><b>Y</b>: ano no formato numérico (####)</li>
                <li><b>h</b>: hora no formato 12</li>
                <li><b>H</b>: hora no formato 24</li>
                <li><b>i</b>: minutos</li>
                <li><b>s</b>: segundos</li>
            </ul>
        </li>
        <li><b>date_default_timezone_get(timezone)</b>: recuperar o timezone default da aplicação</li>
        <li><b>date_default_timezone_set(timezone)</b>: atualizar o timezone default da aplicação</li>
        <li><b>strtotime(data)</b>: Transformar datas textuais em segundos</li>
    </ul>
    <hr>

    <?php

        // recupera o timezone
        echo date_default_timezone_get().'<br>';

        // recuperação da data atual, data corrente
        echo date('Y-m-d H:i').'<br>';

        // seta o timezone
        date_default_timezone_set('Europe/Berlin');

        // 
        echo '<br>';
        echo date_default_timezone_get().'<br>';
        echo date('Y-m-d H:i').'<br>';

    ?>
    <hr>

    <?php

        $data_inicial = '2022-10-24';
        $data_final = '2022-10-30';

        // timestamp tem como referência, ponto de partida, a data (01/01/1970)

        $time_inicial = strtotime($data_inicial); // retorno em segundos
        echo $data_inicial.' = '.$time_inicial;
        echo '<br>';
        
        $time_final = strtotime($data_final); // retorno em segundos
        echo $data_final.' = '.$time_final;
        echo '<br><br>';

        $dia_time = 24 * 60 * 60;
        $diferenca_times = $time_final - $time_inicial;
        
        echo 'Diferença entre as duas datas: '.($diferenca_times/$dia_time);

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>