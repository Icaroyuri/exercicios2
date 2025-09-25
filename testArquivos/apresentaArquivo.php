<?php

$arquivo = 'arquivo.txt';
$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)) {
    $conteudo = fgets($arquivoAberto);
    echo $conteudo . "<br>";
    
}
fclose($arquivoAberto);
?>