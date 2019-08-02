<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y h:i:s");

$dt -> add($periodo); //Adiciona os dias da variação $periodo na data da variável $dt

echo "<br/>"; 

echo $dt->format("d/m/Y h:i:s");

?>