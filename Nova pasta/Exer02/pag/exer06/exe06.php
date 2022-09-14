<?php
$nome = $_POST['txtnome'];
$peso = $_POST['txtpeso'];
$altura = $_POST['txtaltura'];
$sexo = $_POST['txtsexo'];
$pesoIdeal;

if($_POST){
    if($sexo == 0 ){
        $pesoIdeal = ($altura * $altura) *23;
    }else{
        $pesoIdeal = ($altura * $altura) *22; 
    }
    if($peso > $pesoIdeal){
        echo "<p>{$nome} está acima do peso ideal</p>
        <style>
        p{
            color: red;
        }
        </style>";
    }else if($peso < $pesoIdeal){
        echo "<p>{$nome} está  abaixo do peso ideal</p>
        <style>
        p{
            color: yellow;
        }
        </style>";
    }else{
        echo "<p>{$nome} está  dentro do peso ideal</p>
        <style>
        p{
            color: blue;
        }
        </style>";
    }
}else{
    header("location, index06.php");
}
    header("refresh: 5, index06.php");
?>