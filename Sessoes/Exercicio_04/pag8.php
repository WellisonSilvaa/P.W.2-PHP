<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 08</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 08</legend>
        <h2>Que ano foi assinada a Lei Aurea e por quem?</h2>
        <label for="">1888 por Princesa Diana</label> <input type="radio" name="txtp8" value="0" id="" ><p>
        <label for="">1888 por Princesa Isabel</label> <input type="radio" name="txtp8" value="1" id=""><p>
        <label for="">1889 por Princesa Isabel</label> <input type="radio" name="txtp8" value="3" id=""><p>
        <label for="">1889 por Princesa Diana</label> <input type="radio" name="txtp8" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp8'])){
        $_SESSION['alternativas8'] = $_POST['txtp8'];

        echo "<p>Proxima Questão <a href=\"pag9.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>