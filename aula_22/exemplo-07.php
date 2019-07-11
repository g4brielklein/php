<?php

function soma(int...$valores){ //Define o tipo de dado do(s) paramêtro(s)

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br/>";
echo soma(25, 33);
echo "<br/>";
echo soma(1.5, 3.2);
echo "<br/>";

?>