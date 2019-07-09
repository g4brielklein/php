<?php

$json = '[{"nome":"Gabriel","idade":20},{"nome":"Joao","idade":25}]';

$data = json_decode($json, true); //Converte um jason em array

var_dump($data);

?>