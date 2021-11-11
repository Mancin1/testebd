<?php

$nome=filter_input(INPUT_POST, "nome");
$senha=filter_input(INPUT_POST, "senha");

echo"Nome: $nome <br>";
echo"Senha: $senha <br>";
?>
