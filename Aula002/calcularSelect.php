<?php
if ($_POST) {
    $nm = $_POST['txtname'];
    $vc = $_POST['txtveic'];
    $dt = $_POST['txtdist'];
    $at = $_POST['txtauto'];
    $vl = $_POST['txtcombustivel'];
    $cl = ($dt / $at);
    $cs = ($dt / $at) * $vl;
    echo "<p>O {$vc} irá consumir {$cs} litros de combustivel no percurso desejado.</p>";
    echo "<p>E você terá um custo de R$ {$cs} reais</p>";
    echo "<p>{$nm}, obrigado por utilizar nosso serviço!</p>";
    header("refresh: 20, indexRadio.php"); //a tag refresh atualiza a página, logodepois da tag vc coloca o numero de segundos que a pagina ficará aberta, e depois da virgula o local da página destino.
}else{
    header("location: indexRadio.php"); //Se alguem tentar entrar na página pelo URL, ja sera direcionado a página destinada!
}
?>