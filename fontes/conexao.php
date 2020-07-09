<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//incluir o arquivo config dentro desta pagina
//include
//require
//include_once
//require_once

include_once "config.php";
//mysql_connect () -> Conecta com o Banco de Dados (MYSQL)
$con = mysql_connect(IP,USER,PWD);
mysql_select_db(DB,$con);


?>