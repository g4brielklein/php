<?php

$nome = "Gabriel Klein";

$nome = strtoupper($nome); //Transforma um texto em letras maiúsculas

echo $nome;

$nome = strtolower($nome); //Transforma um texto em letras minúsculas

echo "<br/> $nome";

echo "<br/>";

echo ucwords($nome); //Transforme a primeira letra de todas as palavras para maiúsculo

echo "<br/>";

echo ucfirst($nome); //Trasforma a primeira letra da primeira palavra para maiúsculo

?>