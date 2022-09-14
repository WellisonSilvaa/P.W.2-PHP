<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 02</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 02</legend>
        <h2>Quantas Copas do Mundo o Brasil ganhou?</h2>
        <label for="">1</label> <input type="radio" name="txtp2" value="0" id="" ><p>
        <label for="">6</label> <input type="radio" name="txtp2" value="1" id=""><p>
        <label for="">3</label> <input type="radio" name="txtp2" value="3" id=""><p>
        <label for="">5</label> <input type="radio" name="txtp2" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp2'])){
        $_SESSION['alternativas2'] = $_POST['txtp2'];

        echo "<p>Proxima Questão <a href=\"pag3.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>