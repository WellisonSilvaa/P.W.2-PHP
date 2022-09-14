<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 03</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Pergunta 03</legend>
        <h2>Quantos Estados tem o Brasil?</h2>
        <label for="">24</label> <input type="radio" name="txtp3" value="0" id="" ><p>
        <label for="">26</label> <input type="radio" name="txtp3" value="1" id=""><p>
        <label for="">27</label> <input type="radio" name="txtp3" value="3" id=""><p>
        <label for="">28</label> <input type="radio" name="txtp3" value="4" id=""><p>

        <button type="submit">Salvar</button>
    </fieldset>
</form>

<?php
    session_start();

    if(isset($_POST['txtp3'])){
        $_SESSION['alternativas3'] = $_POST['txtp3'];

        echo "<p>Proxima Questão <a href=\"pag4.php\"> <button>PROXIMA</button> </a>";
    }
?>
    
</body>
</html>