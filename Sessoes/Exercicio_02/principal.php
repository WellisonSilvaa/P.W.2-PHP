<?php
    session_start();

    if($_SESSION['logou'] == 1){
        echo "Seja bem vindo ao Sistema Integrado";
        header("refresh: 5, formulario.php");
    }else{
        header("location: formulario.php");
    }
?>