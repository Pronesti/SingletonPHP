<?php
require_once("Singleton.php");
require_once("Connection.php");

//$a = new Singleton(); no se puede hacer
$a = Singleton::getInstance(); // se hace asi

$con1 = Connection::getInstance();
$quer = $con->query("select * from user");
// Otra forma seria
$quer = Connection::getInstance()->query("select * from user");