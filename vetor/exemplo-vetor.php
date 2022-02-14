<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de vetor</title>
</head>
<body>
    <h1>Exemplo Vetor</h1>

    <?php

    //declaração de vetor

    $numero = array();

    //atribuição de valores
    $numero[0] = 8;
    $numero[1] = 4;
    $numero[2] = 23;
    $numero[3] = 87;
    $numero[4] = 2;

    /*
    echo $numero[0] . "<br/>";
    echo $numero[1] . "<br/>";
    echo $numero[2] . "<br/>";
    echo $numero[3] . "<br/>";
    echo $numero[4] . "<br/>";
    */

    for($i =0; $i<count($numero); $i++){
        echo $numero[$i] . "</br>";
    }


    ?>
</body>
</html>