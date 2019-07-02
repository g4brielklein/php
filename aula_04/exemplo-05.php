<?php

$nome = "Gabriel";

function teste() { //Cria uma função

	global $nome; //Define a variável como global
	echo $nome;

}

function teste2() {

	$nome = "João";

	echo $nome." agora no teste2";

}

teste(); //Executa a função

echo "<br/>";

teste2();

?>