
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão encadeada</title>
</head>
<body>

    <?php
    
    $mes = 5;

    switch($mes){
        case 1:
            echo "Janeiro";
        break;
        case 2:
            echo "Fevereiro";
        break;
        case 3:
            echo "Março";
        break;
        case 4:
            echo "Abril";
        break;
        case 5:
            echo "Maio";
        break;
        case 6:
            echo "Junho";
        break;
        case 7:
            echo "Julho";
        break;
        case 8:
            echo "Agosto";
        break;        
        case 9:
            echo "Setembro";
        break;
        case 10:
            echo "Outubro";
        break;
        case 11:
            echo "Novembro";
        break;
        case 12:
            echo "Dezembro";
        break;
        default:
            echo "Mês inválido";                              
    }


    /* 
    if($mes == 1){
        echo "Janeiro";
    }
    else if($mes == 2){
        echo "Fevereiro";
    }

    else if($mes == 3){
        echo "Março";
    }

    else if($mes == 4){
        echo "Abril";
    }
    else if($mes == 5){
        echo "Maio";
    }
    else if($mes == 6){
        echo "Junho";
    }
    else if($mes == 7){
        echo "Julho";
    }
    else if($mes == 8){
        echo "Agosto";
    }
    else if($mes == 9){
        echo "Setembro";
    }
    else if($mes == 10){
        echo "Outubro";
    }
    else if($mes == 11){
        echo "Novembro";
    }
    else if($mes == 12){
        echo "Dezembro";
    }
    else {
        echo "Mês inválido";
    }
    */

    ?>
    
</body>
</html>