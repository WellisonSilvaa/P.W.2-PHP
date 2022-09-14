<?php
$usu = $_POST['usuario'];
$sen = $_POST['senha'];

if($_POST){
    if($usu == "unesp" && $sen == "cotec"){
        echo "Seja Bem vindo ao Sistema de ativação";
    }else{
        echo "Usuário ou senha inválidos";
    }
}else{
    header("location, index04.php");
}
    header("refresh: 8, index04.php");
?>