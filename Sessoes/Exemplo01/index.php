<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <?php
    //Inicia a sessão
    session_start();

    //Registra o código do produto na sessão
    $_SESSION['codigo'] = 1;

    //Registra a descrição do produto na sessão
    $_SESSION['Descricao'] = "TV LCD 42";

    echo "variaveis registradas<p><a href=\"exemplo1.php\"></a></p>"


    ?>
</body>
</html>