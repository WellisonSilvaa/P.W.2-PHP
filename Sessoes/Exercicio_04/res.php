<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação</title>
</head>
<body>
<div class="questoes">
    <?php
    $pontos = 0;
        session_start();
    
        if ($_SESSION['alternativas1'] ==3)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas2'] ==4)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas3'] ==1)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas4'] ==0)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas5'] ==3)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas6'] ==1)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas7'] ==1)
        {
            $pontos++;
        }
        if ($_SESSION['alternativas8'] ==1)
        {
            $pontos++;
        } if ($_SESSION['alternativas9'] ==4)
        {
            $pontos++;
        } if ($_SESSION['alternativas10'] ==4)
        {
            $pontos++;
        }
    
        if($pontos == 0){
            echo $_SESSION['nome']." voce acertou {$pontos} quetões, ai da uma pegada né campeão(ã)" ;
        }else if($pontos < 5){
            echo $_SESSION['nome']." voce acertou {$pontos} quetões, estude mais campeão(ã)";
        }else if($pontos < 9){
            echo $_SESSION['nome']." voce acertou {$pontos} quetões, quase lá campeão(ã)";
        }else{
           echo "Parabens ".$_SESSION['nome'].", tu é foda, voce acertou {$pontos} quetões, gabarito!";
        }

        echo "<p> <a href=\"index04.php\"> <button>Início</button></a></p>"
    ?>
</div>


</body>
</html>