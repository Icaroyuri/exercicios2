<?php
$arquivo_json = 'usuarios.json';
if (file_exists($arquivo_json)) {
    $usuarios = json_decode(file_get_contents($arquivo_json));
    #$usuarios = ($conteudo_json, true);
    foreach($usuarios as $usuario) {
        echo "Id: $usuario->id <br>";
        echo "Nome: $usuario->nome <br>";
        echo "E-mail: $usuario->email <br>";
    }
}

?>