<?php
$f = $_POST['temperatura'];
$c;

if($_POST){
   
   for ($i= 0; $i <= 10; $i++) { 
    $c = 5 / 9 * ($f - 32);
    echo "<p>Fº{$f} | Cº{$c}</p>";
    $f++;
   }
}else{
    header("location, index07.php");
}
    header("refresh: 5, index07.php");
?>