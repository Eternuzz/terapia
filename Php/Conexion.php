<?php

$host='localhost';
$root='root';
$password='123456789';
$nombrebd='mydb';
$con= new mysqli($host,$root,$password,$nombrebd,3307);
if(!$con){
    die("No es posible conectar a la base de datos");
}

?>