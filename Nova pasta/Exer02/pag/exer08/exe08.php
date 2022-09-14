<?php
$n = $_POST['txtn'];
$raiz;

if($_POST){
  
  for ($i=0; $i < 20; $i++) { 
    $raiz = sqrt($n);
    echo "<p>Raiz quadrada de {$n} é {$raiz}</p>";
    $n++;
  }
   
}else{
    header("location, index08.php");
}
    header("refresh: 10, index08.php");
?>