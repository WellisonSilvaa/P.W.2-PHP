<?php
$nome = $_POST['txtn'];
$valor = $_POST['txtv'];
$tipo = $_POST['tipo'];
$meses = $_POST['txtm'];
$numMes = 1;
$total;


if($_POST){
    if($tipo == 0){ 
      echo "<p>Usuário {$nome} | Conta : Poupança | Valor investido: {$valor}.</p>";
      for ($i=0; $i < $meses; $i++) {
    $total = $valor + ($valor * 0.5 / 100);
    $valor = $total;
    $total = number_format($total, 2, ".", "");
    echo "<p>Mês{$numMes} => Valor Total: {$total}</p>";
      $numMes++;
    }
  }else{
    echo "<p>Usuário {$nome} | Conta : Poupança | Valor investido: {$valor}.</p>";
      for ($i=0; $i < $meses; $i++) {
    $total = $valor + ($valor * 1 / 100);
    $valor = $total;
    $total = number_format($total, 2, ".", "");
    
    echo "<p>Mês{$numMes} => Valor Total: {$total}</p>";
      $numMes++;
    }
  } 
}else{
    header("location, index10.php");
}
header("refresh: 10, index10.php");
?>