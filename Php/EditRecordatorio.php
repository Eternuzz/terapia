<?php
include ('Conexion.php');

$id=$_POST["id"];
$mensaje=$_POST["mensaje"];
$fecha=$_POST["fecha"];
$hora=$_POST["hora"];



$sql = "UPDATE recordatorio
        SET Mensaje = '$mensaje',
            Fecha = '$fecha',
            Hora = '$hora'
        WHERE idRecordatorio = '$id'";

if ($con->query($sql) === TRUE) {
  echo "Si";
} else {
  echo "No";
}
?>