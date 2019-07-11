<?php

function ola($texto = "Mundo", $periodo	= "Bom dia"){ //Função com parâmetro

	return "Olá, $texto! $periodo!<br/>";

}

echo ola("Mundo","Bom dia");
echo ola("", "Boa noite"); 
echo ola("Gabriel", "Boa tarde"); //Passagem de parâmetro na função
echo ola("Hcode","");

?>