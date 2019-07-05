<?php

//include ""; Inclui um arquivo
//require "": Inclui um arquivo, e imterrompe o código em caso de erro no mesmo

//include/require_once ""; Inclui um arquivo somente uma vez

//include "inc/exemplo-01.php";

require_once "inc/exemplo-01.php"; //Inclui o arquivo apenas uma vez

$resultado = somar(10,25); //Utiliza a função "somar" do arquivo incluido na linha acima

echo $resultado;

?>