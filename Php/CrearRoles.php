<?php
include ('conexion.php');


$data=$_POST["date_user"];


    $insert3="INSERT INTO roles (Nombre_Rol) VALUES ('$data')";
    $cont=mysqli_query($con,$insert3);
    if ($cont) {
       include "AllRoles.php";
    } else {
        echo "Algo Fallo";
    }
    
?>