<?php

$host='localhost';
$root='root';
$password='';
$nombrebd='terapia';
$con= new mysqli($host,$root,$password,$nombrebd,3306);
if(!$con){
    die("No es posible conectar a la base de datos");
}

?>