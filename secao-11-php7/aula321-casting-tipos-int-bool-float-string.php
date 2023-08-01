<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container py-3">

    <header>
        <h1>Casting de tipos com (int), (bool), (Float) e (string)</h1>
    </header>

    <dl>
        <dt>int</dt>
            <dd>Float</dd>
            <dd>string</dd>
        
        <dt>float/double</dt>
            <dd>int</dd>
            <dd>string</dd>
            
        <dt>string</dt>
            <dd>int</dd>
            <dd>string</dd>
            <dd>boolean</dd>
            
        <dt>boolean</dt>
            <dd>int</dd>
            <dd>string</dd>
    </dl>
    <hr>

    <?php

        // gettype() => retorna o tipo da variável em PHP

        $valorInt = 10;
        $valorFloat = 15.35; // ou double também
        $valorString = '36.22';
        $valorBool = false;
        $valorBool2 = true;


        // Casting para Float/Double
        $valorIntFloat = (float) $valorInt;
        $valorStringDouble = (double) $valorString;
        $valorBoolDouble = (double) $valorBool;
        $valorBoolDouble2 = (double) $valorBool2;

        echo '- Casting para Float/Double:<br>';
        echo $valorIntFloat . ' ' . gettype($valorIntFloat) . '<br>';
        echo $valorStringDouble . ' ' . gettype($valorStringDouble) . '<br>';
        echo $valorBoolDouble . ' ' . gettype($valorBoolDouble) . '<br>';
        echo $valorBoolDouble2 . ' ' . gettype($valorBoolDouble2) . '<hr>';


        // Casting para string
        $valorIntString = (string) $valorInt;
        $valorFloatString = (string) $valorFloat;
        $valorBoolString = (string) $valorBool;
        $valorBoolString2 = (string) $valorBool2;

        echo '- Casting para String:<br>';
        echo $valorIntString . ' ' . gettype($valorIntString) . '<br>';
        echo $valorFloatString . ' ' . gettype($valorFloatString) . '<br>';
        echo $valorBoolString . ' ' . gettype($valorBoolString) . '<br>';
        echo $valorBoolString . ' ' . gettype($valorBoolString2) . '<hr>';


        // Casting para int
        $valorFloatInt = (int) $valorFloat;
        $valorStringInt = (int) $valorString;
        $valorBoolInt = (int) $valorBool;
        $valorBoolInt2 = (int) $valorBool2;

        echo '- Casting para Int:<br>';
        echo $valorFloatInt . ' ' . gettype($valorFloatInt) . '<br>';
        echo $valorStringInt . ' ' . gettype($valorStringInt) . '<br>';
        echo $valorBoolInt . ' ' . gettype($valorBoolInt) . '<br>';
        echo $valorBoolInt2 . ' ' . gettype($valorBoolInt2) . '<hr>';


        // Casting para bool
        $valorIntBoolean = (bool) $valorInt;
        $valorFloatBoolean = (bool) $valorFloat;
        $valorStringBoolean = (bool) $valorString;
        $valorStringBoolean2 = (bool) $valorString;

        echo '- Casting para Boolean:<br>';
        echo $valorIntBoolean . ' ' . gettype($valorIntBoolean) . '<br>';
        echo $valorFloatBoolean . ' ' . gettype($valorFloatBoolean) . '<br>';
        echo $valorStringBoolean . ' ' . gettype($valorStringBoolean) . '<br>';
        echo $valorStringBoolean2 . ' ' . gettype($valorStringBoolean2) . '<hr>';

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>