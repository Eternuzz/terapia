<?php
include ('Conexion.php');
session_start();


$id_usuario=$_SESSION["id"];
$mensaje=$_POST["mensaje"];
$Fecha=$_POST["fecha"];
$Hora=$_POST["hora"];
$id_terapia=$_POST["id_terapia"];

$insert3="INSERT INTO recordatorio (id_usuario,Mensaje,Fecha,Hora,id_terapia) VALUES ('$id_usuario','$mensaje','$Fecha','$Hora','$id_terapia')";
$cont=mysqli_query($con,$insert3);
    if ($cont) {
       echo "Si";
    } else {
        echo "No";
    }
    




?>