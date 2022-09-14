<?php
    session_start();

    if($_SESSION['altura'] > $_SESSION['altura2'])
    {
        echo "<p>O usuário(a) ".$_SESSION['nome']." é mais alto." ;
    }else
    {
        echo "<p>O usuário(a) ".$_SESSION['nome2']." é mais alto." ;
    }

    if($_SESSION['peso'] > $_SESSION['peso2'])
    {
        echo "<p>O usuário(a) ".$_SESSION['nome']." é mais pesado." ;
    }else
    {
        echo "<p>O usuário(a) ".$_SESSION['nome2']." é mais pesado." ;
    }

    if($_SESSION['idade'] > $_SESSION['idade2'])
    {
        echo "<p>O usuário(a) ".$_SESSION['nome']." é mais velho." ;
    }else
    {
        echo "<p>O usuário(a) ".$_SESSION['nome2']." é mais velho." ;
    }
?>