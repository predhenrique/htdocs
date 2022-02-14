<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laços</title>
    </head>
    <body>
        <h1>Exemplo com laços de repetição</h1>
        <?php
        //Laço for
        //Inicio
        //Condição
        //incremento
        //dedremento
        //contador = contador + 1
        /*
        $numero = 5;
        for($contador=0;$contador<=10;$contador++){
            echo "$numero * $contador = ".($numero * $contador) . "<br/>";
        }
        */
        //While funciona para qualquer tipo de dado
        /*
        $soma = 0;
        $contador = 0;
        while($contador<=100){
            $soma = $soma + $contador;
            $contador++;
        }
        */ 
        $contador = 10;
        do{
            echo "$contador <br/>";
            $contador --;
        }while($contador>=0);
        ?>
    </body>
</html>