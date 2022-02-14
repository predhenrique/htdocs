<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 01</title>
    </head>
    <body>
        <?php
            /*
            $tempo = tempo gasto na viagem em horas
            $velmedia = velocidade média durante a viagem em km/h
            $aut = automóvel que faz 12km/l (autonomia do automóvel)
            $calc = resultado do calculo
            */
            $tempo = 3;
            $velmedia = 120;
            $aut = 12;
            $calc = ($velmedia . $tempo);
            $res = $calc / $aut;
            echo "Será necessário para está viagem $res litros de gasolina";            
        ?>
    </body>
</html>