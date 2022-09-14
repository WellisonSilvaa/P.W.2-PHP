<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION['codigo'])){
        echo "Código registrado na sessao: ".$_SESSION['codigo'];
    }

    if(isset($_SESSION['produto'])){
        echo "<p>Descrição do produto registrado na sessão: ".$_SESSION['produto'];
    }

        header("refresh: 3, index2.php");
    ?>
</body>
</html>