<?php

/////////////////////////////////////////////////// Tipos Básicos

$nome = "Hcode"; //String com aspas duplas
$site = 'www.hcode.com.br'; //String com aspas simples

$ano = 1999; //Tipo númerico
$salario = 5500.99; //Ponto flutuante
$bloqueado = false; //Boolean

////////////////////////////////////////////////// Tipos Compostos

$frutas = array("abacaxi", "laranja", "manga"); //Cria um array

//echo $frutas[2]; 

$nascimento = new DateTime(); //Cria um objeto

//var_dump($nascimento);

////////////////////////////////////////////////// Tipos Especiais

$arquivo = fopen("exemplo-03.php", "r"); 

//var_dump($arquivo);

$nulo = NULL; //Variável nula
$vazio = ""; //Variável vazia

?>
