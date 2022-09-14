<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 07</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 07</legend>
        <h2>Quantas regiões tem o Brasil?</h2>
        <label for="">4</label> <input type="radio" name="txtp7" value="0" id="" ><p>
        <label for="">5</label> <input type="radio" name="txtp7" value="1" id=""><p>
        <label for="">6</label> <input type="radio" name="txtp7" value="3" id=""><p>
        <label for="">7</label> <input type="radio" name="txtp7" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp7'])){
        $_SESSION['alternativas7'] = $_POST['txtp7'];

        echo "<p>Proxima Questão <a href=\"pag8.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>