<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Login</legend>
            <label for="">Nome de Usuário</label> <input type="text" name="txtnomeusu" id="" required><p>
            <label for="">Senha</label> <input type="password" name="txtsenha" id="" required><p>
            <button type="submit">Salvar</button> <button type="reset">Limpar</button>
        </fieldset>
    </form>
    <?php
    session_start();

    if (isset($_POST['txtnomeusu']) && $_POST['txtsenha']) {
        
        $_SESSION['nome'] = $_POST['txtnomeusu'];

        $_SESSION['senha'] = $_POST['txtsenha'];
    
        echo "<p>Login Salvo <a href=\"checa_login.php\"><button>ENTRAR</button></a>";
    }
    
    ?>
    
</body>
</html>