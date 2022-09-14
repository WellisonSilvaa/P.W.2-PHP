<?php
    session_start();

    if($_SESSION['nome'] == "automacao" && $_SESSION['senha'] == "turma1au"){
        $logou = 1;
        $_SESSION['logou'] = $logou;
    }else{
        $logou = 0;
        $_SESSION['logou'] = $logou;
    }
   header("location: principal.php");
?>