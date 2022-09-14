<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 09</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 09</legend>
        <h2>De qual país o Brasil foi colônia</h2>
        <label for="">Inglaterra</label> <input type="radio" name="txtp9" value="0" id="" ><p>
        <label for="">Espanha</label> <input type="radio" name="txtp9" value="1" id=""><p>
        <label for="">França</label> <input type="radio" name="txtp9" value="3" id=""><p>
        <label for="">Portugal</label> <input type="radio" name="txtp9" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp9'])){
        $_SESSION['alternativas9'] = $_POST['txtp9'];

        echo "<p>Proxima Questão <a href=\"pag10.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>