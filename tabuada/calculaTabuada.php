<?php

$leitura = fopen('arquivo.txt', 'r');
$numero = $_REQUEST['numero'];

function tabuada ($numero) {
    $escrita = fopen('arquivo.txt', 'w');
    for($k=1; $k<=10; $k++) {
        $resultado = $numero * $k;
        fwrite($escrita, "$resultado \n");
    }
    fclose($escrita);
}

tabuada($numero);
while(!feof($leitura)) {
    $linha = fgets($leitura);
    echo "$linha <br>";
}
fclose($leitura);
?>