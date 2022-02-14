<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variaveis e echo</title>
        <style>
            .tit{
                color:#f00;
                background:#f0f;
            }
        </style>
    </head>
    <body>
        <?php
        //Comentario de uma linha
        /*
            comentario
            de
            varias
            linhas
        */
        //declaração de variáveis e atribuição de valor
        //-sempre terminar com ponto e virgula  
        $nome = "Pedro";
        $idade = 25;
        $salario = 3000.00;
        //Exibição de valores e texto
        //echo "Nome";
        //echo $nome;
        // . ponto é o simbolo de concatenação
        //echo "Nome " . $nome;
        //echo "Nome: " . $nome . " Idade: " . $idade . " Salário: " . $salario;
        //echo "Nome: $nome Idade: $idade Salário: $salario";
        /*
        echo "<h1>Nome: $nome </h1>";
        echo "<h1>Idade: $idade </h1>";
        echo "<h1>Salário: $salario </h1>";
        */
        //echo "<h1 style='color:#f00;background:#f0f;'> Nome: $nome </h1> ";
        //echo "<h1 class='tit'> Nome: $nome </h1> ";
        ?>
    </body>
</html>