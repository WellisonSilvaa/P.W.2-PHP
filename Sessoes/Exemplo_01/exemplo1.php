<?php
session_start();
if(isset($_SESSION['codigo'])){
    echo "Código resgistrado na sessão: ".$_SESSION['codigo'];
}

if(isset($_SESSION['descricao'])){
    echo "<p>Descrição do produto registrado na sessão: ".$_SESSION['descricao'];
}


?>