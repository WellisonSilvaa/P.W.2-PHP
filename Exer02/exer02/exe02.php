<?php
$n = $_POST['txtn'];

if($_POST){
    if($n >= 0){
        echo "<p>Número Positivo</p>
                <style>
                p{
                    color: blue;
                }
                </style>";
    }else{
        echo "<p>Número Negativo</p>
        <style>
        p{
            color: red;
        }
        </style>";
    }
}else{
    header("location, index02.php");
}
?>