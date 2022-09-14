<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 04</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 04</legend>
        <h2>Qual foi a PRIMEIRA capital do Brasil?</h2>
        <label for="">Salvador</label> <input type="radio" name="txtp4" value="0" id="" ><p>
        <label for="">Rio de Janeiro</label> <input type="radio" name="txtp4" value="1" id=""><p>
        <label for="">Ceará</label> <input type="radio" name="txtp4" value="3" id=""><p>
        <label for="">São Paulo</label> <input type="radio" name="txtp4" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp4'])){
        $_SESSION['alternativas4'] = $_POST['txtp4'];

        echo "<p>Proxima Questão <a href=\"pag5.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>