<?php
$db_host = "srvclayton.database.windows.net";
$db_name = "dbClayton";
$db_user = "clayton";
$db_pass = "Nix@01210379";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";
if(!$db = odbc_connect($dsn, $db_user, $db_pass)){
	echo "ERRO AO CONECTAR AO BANCO DE DADOS";
	exit();
}
?>