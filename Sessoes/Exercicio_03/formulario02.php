<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 02</title>
</head>
<body>

<form action="" method="post">
    <fieldset>
        <legend>Formulário 02</legend>
        <label for="">Digite seu nome</label> <input type="text" name="txtnome2" id="" required><p>
        <label for="">Digite sua idade</label> <input type="number" name="txtidade2" id="" required><p>
        <label for="">Digite seu peso</label> <input type="number" name="txtpeso2" step="0.01" id="" required><p>
        <label for="">Digite sua altura</label> <input type="number" name="txtaltura2" step="0.01" id="" required><p>
        <button type="submit">Salvar</button> <button type="reset">Limpar</button>
    </fieldset>
</form>
    
<?php
    session_start();

    if (isset($_POST['txtnome2']) && $_POST['txtidade2'] && $_POST['txtpeso2'] && $_POST['txtaltura2']) {

        $_SESSION['nome2'] = $_POST['txtnome2'];
        $_SESSION['idade2'] = $_POST['txtidade2'];
        $_SESSION['peso2'] = $_POST['txtpeso2'];
        $_SESSION['altura2'] = $_POST['txtaltura2'];

        echo "Preencimneto Completo";
        echo "<p>Ver RESULTADO <a href=\"checa_form.php\"> <button> RESULTADO </button></a>";
    }
?>

</body>
</html>