<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend>Dados Cadastrais</legend>
            <label for="">Código</label> <input type="number" name="txtcodigo" id="" required><p>
            <label for="">Produto</label> <input type="text" name="txtproduto" id="" required><p>
            <button type="submit">Salvar</button> <button type="reset">Limpar</button>
        </fieldset>
    </form>

    <?php
    session_start();
    if(isset($_POST['txtcodigo']) && $_POST['txtproduto']){
        
        $_SESSION['codigo'] = $_POST['txtcodigo'];

        $_SESSION['produto'] = $_POST['txtproduto'];

        echo "Visualizar produtos<p><a href=\"exemplo2.php\">Clique aqui para buscar os valores</a>";
    }

    ?>

</body>
</html>