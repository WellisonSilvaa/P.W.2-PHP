<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 05</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 05</legend>
        <h2>Que dia é comemorada a Proclamação da Republica</h2>
        <label for="">14 de Setembro</label> <input type="radio" name="txtp5" value="0" id="" ><p>
        <label for="">14 de Outubro</label> <input type="radio" name="txtp5" value="1" id=""><p>
        <label for="">15 de Novembro </label> <input type="radio" name="txtp5" value="3" id=""><p>
        <label for="">15 de Dezembro</label> <input type="radio" name="txtp5" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp5'])){
        $_SESSION['alternativas5'] = $_POST['txtp5'];

        echo "<p>Proxima Questão <a href=\"pag6.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>