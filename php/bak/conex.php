<?php
$servidor="127.0.0.1";
$usuario="root";
$clave="123";
$bd="test";

mysql_connect("$servidor","$usuario","$clave");
mysql_select_db("$bd");

?>