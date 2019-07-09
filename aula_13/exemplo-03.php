<?php

$pessoas = array();

array_push($pessoas, array( //Insere dados dentro de um array ja existente
	'nome'=>'Gabriel',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>25
));

print_r($pessoas[0]['nome']);

?>