<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 01</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Formulário 01</legend>
        <label for="">Digite seu nome</label> <input type="text" name="txtnome" id=""><p>
        <label for="">Digite sua idade</label> <input type="number" name="txtidade" id=""><p>
        <label for="">Digite seu peso</label> <input type="number" name="txtpeso" step="0.01" id=""><p>
        <label for="">Digite sua altura</label> <input type="number" name="txtaltura" step="0.01" id=""><p>
        <button type="submit">Salvar</button> <button type="reset">Limpar</button>
    </fieldset>
</form>
    
<?php
    session_start();

    if (isset($_POST['txtnome']) && $_POST['txtidade'] && $_POST['txtpeso'] && $_POST['txtaltura']) {

        $_SESSION['nome'] = $_POST['txtnome'];
        $_SESSION['idade'] = $_POST['txtidade'];
        $_SESSION['peso'] = $_POST['txtpeso'];
        $_SESSION['altura'] = $_POST['txtaltura'];

        echo "Preencimneto Completo";
        echo "<p>Proximo Formulário <a href=\"formulario02.php\"> <button> PROXIMO </button></a>";
    }
?>

</body>
</html>