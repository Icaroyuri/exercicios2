<?php

$arquivoAberto = fopen('arquivo.txt', 'w');

$linha1 = $_REQUEST['linha1'];
$linha2 = $_REQUEST['linha2'];
$linha3 = $_REQUEST['linha3'];

fwrite($arquivoAberto, "$linha1\n");
fwrite($arquivoAberto, "$linha2\n");
fwrite($arquivoAberto, "$linha3\n");
fclose($arquivoAberto);
?>