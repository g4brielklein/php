<?php

session_id('irv0gi2vs8c6msbv8hc5bfancj'); //Recupe os dados da sessão do id informado

require_once("config.php");

session_regenerate_id(); //Gera um novo id de sessão

echo session_id();

var_dump($_SESSION);

?>