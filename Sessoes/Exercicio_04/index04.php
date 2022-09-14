<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>

    <form action="" method="post">
        <fieldset>
            <legend>Login</legend>
            <label for="">Digite seu nome</label> <input type="text" name="txtnome" id="" required><p>
            <button type="submit">Salvar</button> <button type="reset">Limpar</button>
        </fieldset>
    </form>

        <?php
            session_start();

            if(isset($_POST['txtnome'])){
                $_SESSION['nome'] = $_POST['txtnome'];
             
                echo "<p>BOA SORTE";
                echo "<p><a href=\"pag1.php\"> <button>INICIAR</button> </a>";
            }
        ?>
</body>
</html>