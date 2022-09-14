<?php
$n1 = $_POST['nota1'];
$n2 = $_POST['nota2'];
$media = ($n1 + $n2)/ 2;

if($_POST){
    if($media >= 8){
        echo "Aprovado";
    }elseif($media <= 3){
        echo "Reprovado";
    }else{
        echo "Recuperação";
    }
}else{
    header("location, index05.php");
}
    header("refresh: 5, index05.php");
?>