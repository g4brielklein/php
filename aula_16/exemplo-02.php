<?php

require_once ("config.php");

session_unset(); //Apaga todos os dados de sessão	

echo $_SESSION['nome'];

session_destroy(); //Destrói a sessão, apaga os dados e remove o usuário da sessão

?>