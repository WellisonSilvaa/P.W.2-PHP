<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 10</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 10</legend>
        <h2>Em que ano ocorreu o golpe Civil-Militar?</h2>
        <label for="">1960</label> <input type="radio" name="txtp10" value="0" id="" ><p>
        <label for="">1962</label> <input type="radio" name="txtp10" value="1" id=""><p>
        <label for="">1963</label> <input type="radio" name="txtp10" value="3" id=""><p>
        <label for="">1964</label> <input type="radio" name="txtp10" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp10'])){
        $_SESSION['alternativas10'] = $_POST['txtp10'];

        echo "<p>Ver Pontuação <a href=\"res.php\"> <button>RESULTADO</button> </a>";
    }
?>
    
</body>
</html>