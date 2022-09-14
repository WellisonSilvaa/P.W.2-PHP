<?php
    if($_POST){
    $valor = $_POST['txtn'];

    if($valor >= 100){
        echo "<p>Compra maior ou igual a cem.</p>";
        
    }else{
        echo "<p>Compra menor que cem.</p>";
       
    }
header("refresh: 5, index01.php");
}else{
    header("location: index01.php");
}
?>