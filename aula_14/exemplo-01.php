<?php

$pessoas = array();

array_push($pessoas, array( //Insere dados dentro de um array ja existente
	'nome'=>'Gabriel',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Joao',
	'idade'=>25
));

echo json_encode($pessoas); //Converte um array em json

?>