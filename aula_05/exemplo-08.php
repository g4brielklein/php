<?php

//$resultado = (10+3)/2; //Os parênteses mudam a ordem de precedência 

//$resultado = (10+3)/2 > 5 && 10 + 5 < 3; //Se as duas condições forem verdadeiras resultará em true

$resultado = (10+3)/2 > 5 || 10 + 5 < 3; //Se alguma das condições for verdadeira resultará em true

var_dump($resultado);

?>