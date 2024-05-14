<?php
include ('conexion.php');


$data=$_POST["date_user"];


    $insert3="INSERT INTO especialidad (Nombre_especialidad) VALUES ('$data')";
    $cont=mysqli_query($con,$insert3);
    if ($cont) {
       include "AllEspecialidades.php";
    } else {
        echo "Algo Fallo";
    }
    
?>