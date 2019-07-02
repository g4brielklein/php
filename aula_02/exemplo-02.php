<?php
// Comentário simples
/*
Comentário de múltiplas linhas
*/

$anoNascimento = 1999;

// Na linha de baixo temos uma variável com número no nome
$nome1 = "Gabriel";

$sobrenome = "Klein";

$nomeCompleto = $nome1." ".$sobrenome; // Concatenação

echo $nomeCompleto;

exit; //Interrompe a execução do código

echo "<br/>"; // Exibe uma linha em branco

echo $nome1;

echo "<br/>";

unset($nome1); // Apaga a variável da memória

if (isset($nome1)){ // Verifica se a variável foi definida

	echo $nome1;

}
?>