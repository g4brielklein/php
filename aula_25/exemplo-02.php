<?php

//$ts = strtotime("2001-09-11"); //Converte uma string em um timestamp

$ts = strtotime("now"); //Retorna a data de hoje

echo date("l, d/m/Y", $ts); //Retorna a data do timestamp informado

?>