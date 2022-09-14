<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 06</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 06</legend>
        <h2>Quem descobriu o Brasil?</h2>
        <label for="">Cristovão Colombo</label> <input type="radio" name="txtp6" value="0" id="" ><p>
        <label for="">Pedro Alvares Cabral</label> <input type="radio" name="txtp6" value="1" id=""><p>
        <label for="">Dom Pedro I</label> <input type="radio" name="txtp6" value="3" id=""><p>
        <label for="">Dom Pedro II</label> <input type="radio" name="txtp6" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp6'])){
        $_SESSION['alternativas6'] = $_POST['txtp6'];

        echo "<p>Proxima Questão <a href=\"pag7.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>