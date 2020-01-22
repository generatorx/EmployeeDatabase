<?php 
$dbServername = "localhost";
$dbUsername = "root" ;
$dbPassword = "admin" ;
$dbName = "employee" ;

$dsn = 'mysql:=host=' .$dbServername. ';dbname='.$dbName;

$connect = new PDO($dsn,$dbUsername,$dbPassword);
$connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>