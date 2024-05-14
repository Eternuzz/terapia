<?php
include ('Conexion.php');

$name=$_POST["name"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
$genero=$_POST["genero1"];
$email=$_POST["email"];
$id=$_POST["Identificacion1"];
$telefono=$_POST["telefono"];
$pass=$_POST["pass"];
$estado=$_POST["estado"];

$sql = "UPDATE usuarios
        SET Nombre = '$name',
            Apellido = '$apellido',
            Genero = '$genero',
            Correo = '$email',
            Telefono = '$telefono',
            Edad = '$edad',
            Pass = '$pass',
            Estado = '$estado'
        WHERE idusuarios = '$id'";

if ($con->query($sql) === TRUE) {
  echo "Si";
} else {
  echo "No";
}
?>