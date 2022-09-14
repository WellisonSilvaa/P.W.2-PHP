<?php
$frase = $_POST['txtf'];
$num = $_POST['txtn'];

if($_POST){
  for ($i=0; $i < $num; $i++) { 
    echo "<table border='1'>
          <tr>
          <td>{$frase}</td>
          </tr>
          </table>";
  }
  
  
   
}else{
    header("location, index10.php");
}
    header("refresh: 10, index10.php");
?>