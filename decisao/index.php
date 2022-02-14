<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomada de decisão simples e composta</title>

    <style>
        .apro{
            font-size:15px;
            color:#0f0;
            text-transform:uppercase;
        }
        .repro{
            font-size:15px;
            font-weight:700;
            color:#f00;
            text-transform:uppercase;
        }



    </style>
</head>
<body>

    <?php
    
    // Aluno João para ser aprovado tem que tirar média 7 ou superior senão ele está reprovado
    // Ele terá duas atividades, cada uma valendo de 0 a 10.
    
    $nome = "João";
    $atividade1 = 8;
    $atividade2 = 2;

    $media = ($atividade1+$atividade2)/2;

    //Operadores relacionais > < >= <= == !=
    //Operadores logicos && || !

    if($media>=7){
        echo "Aluno(a) $nome está <span class='apro'> aprovado </span> com média $media";
    }
    else{
        echo "Aluno(a) $nome está <span class='repro'> reprovado </span> com média $media";
    }

    ?>


</body>
</html>