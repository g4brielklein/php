<?php

for ($i = 0; $i < 1000; $i+=5) { //Repete a variável $i, que inicia valendo 0, enquanto for menor do que 1000 incrementando 5 números por vez

	if ($i >= 200 && $i <= 800) continue; //Pula o intervalo de números entre 200 e 800

	if ($i === 900) break; // Para o contagem depois de 900

	echo $i."<br/>";

}

?>