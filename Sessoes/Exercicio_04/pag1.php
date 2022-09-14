<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 01</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 01</legend>
        <h2>Qual a capital do Brasil</h2>
        <label for="">São Paulo</label> <input type="radio" name="txtp1" value="0" id="" ><p>
        <label for="">Rio de Janeiro</label> <input type="radio" name="txtp1" value="1" id=""><p>
        <label for="">Brasília</label> <input type="radio" name="txtp1" value="3" id=""><p>
        <label for="">Minas Gerais</label> <input type="radio" name="txtp1" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp1'])){
        $_SESSION['alternativas1'] = $_POST['txtp1'];

        echo "<p>Proxima Questão <a href=\"pag2.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>