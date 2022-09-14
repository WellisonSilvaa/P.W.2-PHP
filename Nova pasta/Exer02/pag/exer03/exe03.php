<?php
$n = $_POST['txtn'];

if($_POST){
    if($n % 2 == 0){
        echo "O número é par";
    }else{
        echo "O número é Impar";
    }
}else{
    header("location, index03.php");
}
?>