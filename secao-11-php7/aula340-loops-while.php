<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP7</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        ul { margin: 20px 0; }
        dt { margin: 10px 0; }
        dd { text-indent: 20px; }
    </style>
</head>
<body>

<div class="container py-3">

    <header>
        <h1>Loop While</h1>
    </header>
    
    <hr>

    <?php

    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $num4 = 0;


    echo "<p>";
    while($num1 < 10) {
        echo "$num1 ";
        $num1++;
    }
    echo "</p>";


    echo "<p>";
    while($num2 <= 20) {
        echo "$num2 ";
        $num2 += 2;
    }
    echo "</p>";


    echo "<p>";
    while($num3 <= 100) {

        if ($num3 > 50) {
            break;
        }
        
        echo "$num3 ";

        $num3 += 2;
    }
    echo "</p>";


    echo "<p>";
    while($num4 <= 60) {

        if ($num4 == 50) {
            continue;
        }
        
        echo "$num4 ";

        $num4 += 2;
    }
    echo "</p>";

    ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>