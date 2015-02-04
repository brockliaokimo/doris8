<?php
$servidor="192.168.1.100";
$usuario="root";
$clave="123";
$bd="test";

mysql_connect("$servidor","$usuario","$clave");
mysql_select_db("$bd");

?>