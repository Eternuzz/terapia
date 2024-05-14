<?php
include ('conexion.php');


$name=$_POST["name"];
$apellido=$_POST["apellido"];
$edad=$_POST["edad"];
$genero=$_POST["genero"];
$email=$_POST["email"];
$id=$_POST["Identificacion"];
$telefono=$_POST["telefono"];
$fecha=$_POST["fecha"];
$rol=$_POST["rol"];
$pass=$_POST["pass"];
$estado=1;


    $insert3="INSERT INTO usuarios (idusuarios,Nombre,Apellido,Genero,Correo,Telefono,Edad,Pass,Estado,id_rol,fecha_nacimiento) VALUES ('$id','$name','$apellido','$genero','$email','$telefono','$edad','$pass','$estado','$rol','$fecha')";
    $cont=mysqli_query($con,$insert3);
    if ($cont) {
       echo "Si";
    } else {
        echo "No";
    }
    




?>