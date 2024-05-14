<?php
include ('conexion.php');
session_start();
$id_user=$_SESSION["id"];
$idt=$_POST["id_terapia"];
$duracion=$_POST["duracion"];
$dolor=$_POST["dolor"];
$fuerza=$_POST["fuerza"];

$fecha_hoy = date("d-m-Y");


    $insert3="INSERT INTO segterapia (id_usuario,Duracion,Dolor,Fuerza,Tipo_terapia,Fecha) VALUES ('$id_user','$duracion','$dolor','$fuerza','$idt','$fecha_hoy')";
    $cont=mysqli_query($con,$insert3);
    if ($cont) {
       echo "Si";
    } else {
        echo "No";
    }
    




?>