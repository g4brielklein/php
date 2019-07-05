<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra); //Retorna a posição da palavra "mãe" dentro da string

$texto = substr($frase, 0, $q); //Retorna o trecho da string apartir da primeira letra até o indice da variável $q

var_dump($texto);

//strlen(); //Retorna o tamanho de uma string

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //Retorna o trecho da string apartir do ìndice $q até o final da string excluindo a $palavra

echo "<br/>";

var_dump($texto2);

?>