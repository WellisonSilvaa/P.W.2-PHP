<?php
if ($_POST) {
    $nm = $_POST['txtname'];
    $vc = $_POST['txtveic'];
    $dt = $_POST['txtdist'];
    $at = $_POST['txtauto'];
    $cs = $dt / $at;
    echo "<p>O {$vc} irá consumir {$cs} litros de combustivel no percurso desejado.</p>";
    echo "<p>{$nm}, obrigado por utilizar nosso serviço!</p>";
    header("refresh: 10, index.php"); //a tag refresh atualiza a página, logodepois da tag vc coloca o numero de segundos que a pagina ficará aberta, e depois da virgula o local da página destino.
}else{
    header("location: index.php"); //Se alguem tentar entrar na página pelo URL, ja sera direcionado a página destinada!
}
?>